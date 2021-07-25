<?php
include 'php/baglanti.php';
include 'fonksiyonlar.php';
$id = mysqli_real_escape_string($db,$_SESSION['id']);
$gelen=mysqli_query($db,"SELECT *FROM mesaj WHERE alici = '$id' ORDER BY alici desc");
$gonderilen=mysqli_query($db,"SELECT *FROM mesaj WHERE gonderen = '$id'");
?>
<html>
<head>
</head>
	<link href="css/genel.css" rel="stylesheet" type="text/css">
	<link href="css/mesaj.css" rel="stylesheet" type="text/css">
	<body style="background-color:black;" align="center" text="white">    
	<div class="Post" style= "height: 100px;">
		
		<div class="card shadow mb-4">
				    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Gelen Mesajlarım</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="50%"  class="table table-bordered" id="dataTable"  cellspacing="0">
                                <thead>
                                    <tr>
                                    <!--<th>Mesaj Id</th>-->
                                        <th>Mesaj Başlığı</th>
                                        <th>Mesaj İçeriği</th>
										<th>Mesaj Tarihi</th>
                                        <th>Gönderen</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                    <?php
                                             while($veri=mysqli_fetch_array($gelen)) 
                                            {?>
                                                <tr>
                                                <!--<td> <?=$veri["mes_id"] ?> </td>-->
                                                    <td> <?=$veri["baslik"] ?> </td>
                                                    <td> <?=$veri["icerik"] ?> </td>
													<td style="center"> <?=$veri["tarih"] ?> </td>
                                                    <td> <?php kullaniciAdSoyad($veri["gonderen"]);?> </td>
                                      <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-header py-3">
                            <h6>Gönderilen Mesajlarım</h6>
                        </div>
                        <div class="table-responsive">
						
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                    <!--<th>Mesaj Id</th>-->
                                        <th>Mesaj Başlığı</th>
                                        <th>Mesaj İçeriği</th>
										<th>Mesaj Tarihi</th>
                                        <th>Alıcı</th>
                                    </tr>
                                </thead>
                                <tbody class="yazi">
                                    <?php
                                           while($veri=mysqli_fetch_array($gonderilen)) 
                                            {?>
                                                <tr >
                                                <!--<td> <?=$veri["mes_id"] ?> </td>-->
                                                    <td> <?=$veri["baslik"] ?> </td>
                                                    <td > <?=$veri["icerik"] ?> </td>
													<td style="center"> <?=$veri["tarih"] ?> </td>
                                                    <td> <?php kullaniciAdSoyad($veri["alici"]);?> </td>
                                      <?php }?>
                                </tbody>
                            </table>
							 <form id="contact" action="mesaj-gonder.php" method="post">
							 <fieldset>
                            <input name="mesaj-gonder" type="submit" value="Mesaj Gönder">
							
							
							
                              </fieldset>
							   </form>
							    
							
							
                              
                        </div>
                    </div>
                </div>
		</div>
	</body>


</html>