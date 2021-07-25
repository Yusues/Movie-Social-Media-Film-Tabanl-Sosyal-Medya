<?php
$errors = array();
include("baglanti.php");

if (isset($_POST['updatePass'])) {
	
	
	if(isset($_SESSION['mail'])){
  $eskiSifre = mysqli_real_escape_string($db,$_POST['curPass']);
  $eskiSifreKontrol = mysqli_real_escape_string($db,$_SESSION['sifre']);
  $mail = mysqli_real_escape_string($db,$_SESSION['mail']);
  $yeniSifre=mysqli_real_escape_string($db,$_POST['newPass']);
  $yeniSifreKontrol=mysqli_real_escape_string($db,$_POST['newPassConfirm']);
		
		if (empty($eskiSifre)) { array_push($errors, "Şimdiki Şifren Kısmı Boş"); }
		if (empty($yeniSifre)) { array_push($errors, "Yeni Şifren Kısmı Boş"); }
		if (empty($yeniSifreKontrol)) { array_push($errors, "Yeni Şifreni Onayla Kısmı Boş"); }
		if ($yeniSifre != $yeniSifreKontrol) {array_push($errors, "Şifreler Eşleşmiyor");}
		if ($eskiSifreKontrol != $eskiSifre) {array_push($errors, "Şimdiki Şifreniz Hatalı");}
	

  if (count($errors) == 0) {
	  
	$yeniSifre = md5($yeniSifreKontrol);
  	 $query = "UPDATE kullanici SET sifre = '$yeniSifre'                 
                     WHERE mail = '$mail'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                
		
  }
		}
	else {
  		array_push($errors, "Eksik ya da yanlış değer girdiniz.");
  	}
  }

?>