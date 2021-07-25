<?php
$errors = array();
include("baglanti.php");
session_destroy();
if(isset($_POST['register'])){
	$ad = mysqli_real_escape_string($db,$_POST['ad']);
	$soyad = mysqli_real_escape_string($db,$_POST['soyad']);
	$mail = mysqli_real_escape_string($db,$_POST['mail']);
	$pass = mysqli_real_escape_string($db,$_POST['pass']);
	$confirm_pass = mysqli_real_escape_string($db,$_POST['confirm_pass']);	
	$bilgi = mysqli_real_escape_string($db,$_POST['bilgi']);
	$yas = mysqli_real_escape_string($db,$_POST['yas']);
	
if (empty($ad)) { array_push($errors, "Ad Kısmı Boş"); }
	if (empty($soyad)) { array_push($errors, "Soyad Kısmı Boş"); }
  if (empty($mail)) { array_push($errors, "E-Posta Kısmı Boş"); }
  if (empty($pass)) { array_push($errors, "Şifre Kısmı Boş"); }
  if ($pass != $confirm_pass) {array_push($errors, "Şifreler Eşleşmiyor");}
	if (empty($bilgi)) { array_push($errors, "Bilgi Kısmı Boş"); }
  if (empty($yas)) { array_push($errors, "Yaş Kısmı Boş"); }
	
	
  $user_check_query = "SELECT * FROM kullanici WHERE mail='$mail' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    

    if ($user['mail'] === $mail) {
      array_push($errors, "Böyle bir mail mevcut!");
		
    }
  }
	
	if (count($errors) == 0) {
		$pass = md5($confirm_pass);
		$sql = "INSERT INTO kullanici (ad,soyad,mail,sifre,bilgi,yas)
		VALUES ('$ad','$soyad','$mail','$pass','$bilgi','$yas')";
		
		mysqli_query($db,$sql);
	header('location: login.php');
	
	}
	
	
}

?>