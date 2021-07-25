<?php
include("php/baglanti.php");

 echo'<>
<body align="center" text="white" style=" font-size: 25px; background-color: black;">
<body>
</form>';

                                 $mail=mysqli_real_escape_string($db,$_SESSION['mail']);


	                                $sql = "SELECT * FROM elestiri where user_mail ='$mail'";
                                    $result = $db->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                          echo '<div class="list">'.$row['user_mail'].'(<small>'.$row['mesaj_tarihi'].'</small>)</br/>'.$row['baslik'].'</br/>'.$row['mesaj'].'</br/> </div> </br/>' ;
											$postId = $row['id'];
											echo "<a href='php/delete.php?id=$postId'><button style=' width: 55px; transform: translateY(-150%);'>Sil</button></a>";
                                        }
                                       
                                    } else{
										
										echo "Daha hiç eleştiri yapmamışsınız!";
									}
		 
		
		 
	
	
	
	


?>