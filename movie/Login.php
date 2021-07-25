<?php include('./php/login_vt.php');?>



<html>
<head>
	<meta charset='UTF-8' />
    <title>Kayıt Ol!</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type = "text/css">	
		body {text-align:center; height: 100%; overflow: hidden}
		#signForm{cursor: pointer; color: #fff; border-radius: 15px; margin: 10% auto; margin-left: auto; margin-right: auto; text-align: center; padding: 10px; width: 500px; height: 350px; background: rgba(0, 0, 0, 0.8);}
	    input{padding: 10px; margin: 10px; solid #ccc; border-radius: 5px;}
		#button{margin: 10px;  transform: translateX(150%); position: absolute; background-color:#01BD00; cursor: pointer; color: #fff;}
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
	<h2>Giriş Yap!</h2>
        <p>Giriş Yapmak İçin Tüm Bilgileri Giriniz.</p>
	    <p>Hesabın Yok Mu? <a href="register.php">Kayıt Ol</a>.</p>
	    <p><a href="index.php">Misafir Olarak Devam Et</a>.</p>
	<form action="Login.php" method="POST">
	<table>
		
	<tr>	
		<td><span style="color: #F4F4F4">E-Posta: </span></td> <td> <input type="email" name="mail"> </td>
	<tr>	
		<td><span style="color: #F4F4F4">Şifre: </span></td> <td> <input type="password" name="pass"> </td>
	</tr>			
		
<tr>	
	<td> <button type="submit" id="button" class="btn" name="login">Giriş Yap</button></td>
	</tr>	
										
	</table>
	
	<?php
 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        $_SESSION['mail']=$_POST['mail'];
		$_SESSION['sifre']=$_POST['pass'];
 
        }
        ?>
	
	
	</form>
	</div>
</body>

</html> 