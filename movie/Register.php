<?php include('./php/reg_vt.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8' />
    <title>Kayıt Ol!</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type = "text/css">	
		body {text-align:center; height: 100%;}
		#signForm{cursor: pointer; color: #fff; border-radius: 5%; margin: 5% auto; margin-left: auto; margin-right: auto; text-align: center; padding: 10px; width: 
			500px; height: 700px; background: rgba(0, 0, 0, 0.8);}
	    input{padding: 10px; margin: 10px; solid #ccc; border-radius: 5px;}
		#button{margin: 10px;  transform: translateX(150%); position: relative; background-color:#01BD00; cursor: pointer; color: #fff;}
		form{display: inline-block; margin-left: auto; margin-right: auto; text-align:left;}
		input, select, textarea{color: #000000;}
		.error {width: 20%; margin: auto; padding: 10px;  border: 15px solid #a94442; color: #FFFFFF; background: #720D0D; border-radius: 5px; text-align: left;  transform: translateX(350%); position: absolute;}
 
	</style>
</head>

<body style = "background: url(resimler/Background.jpg)">
	<div id="error">
		
		<?php include('./php/hatalar.php') ?>
		
		
		</div>
	
<div id="signForm">
	<h2>Kayıt Ol!</h2>
        <p>Kayıt Olmak İçin Tüm Bilgileri Giriniz.</p>
	    <p>Zaten bir Hesabın var mı? <a href="Login.php">Giriş Yap</a>.</p>
	    <p><a href="index.php">Misafir Olarak Devam Et</a>.</p>
	<form action="Register.php" method="post">
		
		
		
	<table>
		
	<tr>	
		<td>Adı : </td> <td> <input type="text" name="ad"> </td>
	</tr>
		<tr>	
		<td>Soyadı : </td> <td> <input type="text" name="soyad"> </td>
	</tr>
		<tr>	
		<td>E-Posta : </td> <td> <input type="email" name="mail"> </td>
	</tr>	
	<tr>	
		<td>Şifre : </td> <td> <input type="password" name="pass"> </td>
	</tr>	
		
<tr>	
		<td>Şifre Onay : </td> <td> <input type="password" name="confirm_pass"> </td>
	</tr>	
		</tr>	
		
		<tr>	
		<td>Bilgi : </td> <td> <input type="text" name="bilgi"> </td>
	</tr>	
		
		<tr>	
		<td>Yaş : </td> <td> <input type="date" name="yas"> </td>
	</tr>	
		
<tr>	
	<td> <button type="submit" id="button" class="btn" name='register'>Kayıt Ol</button> </td>
	</tr>	
		
	</table
	
	
	
	</form>

	</div>
</body>

</html>