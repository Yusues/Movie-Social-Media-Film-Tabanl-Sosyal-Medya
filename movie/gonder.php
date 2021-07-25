<?php
include 'php/baglanti.php';
if(isset($_POST['mesaj-gonder']))
{
        $baslik = mysqli_real_escape_string($db,$_POST['baslik']);
        $icerik = mysqli_real_escape_string($db,$_POST['icerik']);
		$gonderen = mysqli_real_escape_string($db,$_SESSION['id']);
		$alici = mysqli_real_escape_string($db,$_POST['kullanici']);
		$tarih = date('Y/m/d');
		
		if (empty($baslik)) { array_push($errors, "Baslik boş"); }
		if (empty($icerik)) { array_push($errors, "Boş"); }
		if (empty($gonderen)) { array_push($errors, "Boş"); }
		if (empty($alici)) { array_push($errors, "Boş"); }
		
		$sql = "INSERT INTO mesaj (baslik,icerik,tarih,alici,gonderen)
		VALUES ('$baslik','$icerik','$tarih','$alici','$gonderen')";
		mysqli_query($db,$sql);
		header('location: mesaj-gonder.php');
}
?>