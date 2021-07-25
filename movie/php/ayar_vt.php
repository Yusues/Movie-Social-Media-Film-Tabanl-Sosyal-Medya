<?php
session_start();
$errors = array();
$db = mysqli_connect('localhost','root','','film') or die($db);

if (isset($_POST['update'])) {
	
	
	if(isset($_SESSION['mail'])){
  $ad = mysqli_real_escape_string($db,$_POST['ad']);
  $soyad = mysqli_real_escape_string($db,$_POST['soyad']);
  $bilgi = mysqli_real_escape_string($db,$_POST['bilgi']);
  $yas = mysqli_real_escape_string($db,$_POST['yas']);
  $mail = mysqli_real_escape_string($db,$_SESSION['mail']);
	

  if (count($errors) == 0) {
	
  	 $query = "UPDATE kullanici SET ad = '$ad',
                      soyad = '$soyad', yas = $yas, bilgi = '$bilgi'
                      WHERE mail = '$mail'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                
		
  }
		}
	else {
  		array_push($errors, "Eksik ya da yanlış değer girdiniz.");
  	}
  }

?>