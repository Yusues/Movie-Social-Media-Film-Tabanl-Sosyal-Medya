<?php
$errors = array();
include('baglanti.php');


if (isset($_POST['login'])) {
  $mail = mysqli_real_escape_string($db,$_POST['mail']);
  $pass = mysqli_real_escape_string($db,$_POST['pass']);
	
	 if (empty($mail)) {
  	array_push($errors, "E-posta Alanı Boş");
  }
  if (empty($pass)) {
  	array_push($errors, "Şifre Alanı Boş");
  }


  if (count($errors) == 0) {
	
  	$pass = md5($pass);
  	$query = "SELECT * FROM kullanici WHERE  mail='$mail' AND sifre='$pass'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['mail'] = $row['mail'];
	  //$_SESSION['id'] = $results['id'];
  	  $_SESSION['success'] = "Başarıyla Giriş Yapıldı";	
  	 header('location: kullanıcı-anasayfa.php'); 
		
  	}else {
  		array_push($errors, "Eksik ya da yanlış değer girdiniz.");
  	}
	
	
	$sorgu = "SELECT id FROM kullanici WHERE mail='$mail' AND sifre='$pass'";
	$statement = $db->prepare($sorgu);
	$statement->bind_param("i", $mail);
	$statement->bind_param("i", $pass);
	$statement->execute();
	$statement->bind_result($id);
   $statement->fetch();
   $_SESSION['id'] = $id;
   $statement->close( );
	
  }
}


?>