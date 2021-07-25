<?php 
include("baglanti.php");
$errors = array();
if(isset($_SESSION['mail']))
{
	
    $mail=mysqli_real_escape_string($db,$_SESSION['mail']);
	$uyeID=$mail;
	
	
	echo'<form action="" method="POST">
<body align="center" text="white" style=" font-size: 25px; background-color: black;">
<p>Başlık</p>
<div class="list"><textarea  rows="2" name ="baslik" style="resize: none; width: 50%;">
 </textarea></br>
 <p>Eleştiri</p>
<textarea rows="5" name ="mesaj" style="resize: none; width: 50%;"> </textarea></div>
<div class="list"><input type="submit" value="Paylaş"> </div>
<body>
</form>';

	 if(count($errors) == 0)
	{
		$sorgu= mysqli_query($db,"SELECT * FROM elestiri order by ID desc");
		while($yaz=mysqli_fetch_array($sorgu))
		{
			$uyerow=mysqli_fetch_array(mysqli_query($db,"select * from elestiri where id='$uyeID'"));
			echo
				'<div class="list">'.$yaz['user_mail'].'(<small>'.$yaz['mesaj_tarihi'].'</small>)</br/>'.$yaz['baslik'].'</br/>'.$yaz['mesaj'].'</br/> </div> </br/> ' ;
			if($uyeID == $yaz['user_mail']){
			 
			 $postId = $yaz['id'];
				
			echo "<a href='delete.php?id=$postId'><button style=' width: 55px; transform: translateY(-150%);'>Sil</button></a>";
				
		 }
			
			
			
		}
		 
		
		 
	}
		
	
	else{echo'<div class="list">Henüz Mesaj Yok.</div>';}
	
	if($_POST){
		$mesaj=strip_tags($_POST['mesaj']);
		$baslik=strip_tags($_POST['baslik']);
		if($mesaj ==" " && $baslik == " "){echo'<div class="error">Mesaj Boş Olmamalı</div>';}
	else{$ekle=mysqli_query($db,"INSERT INTO elestiri(baslik,user_mail,mesaj,mesaj_tarihi) VALUES ('$baslik','$uyeID','$mesaj','".date("Y-m-d")."')");
		
		if($ekle){header("location:chat.php");}else{'<div class="list">Mysql Hatası</div>';}
		 
		}
			   }
				
	}


?>

<?php 
?>