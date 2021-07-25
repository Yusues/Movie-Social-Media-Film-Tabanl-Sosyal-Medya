<?php include('./php/pc_vt.php');?>
<html>
<head>
	<meta charset='UTF-8' />
    <title>Sifreni Değiştir!</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type = "text/css">	
		body {text-align:center; height: 100%; overflow: hidden}
		#signForm{cursor: pointer; color: #fff; border-radius: 15px; margin: 10% auto; margin-left: auto; margin-right: auto; text-align: center; padding: 10px; width: 500px; height: 400px; background: rgba(0, 0, 0, 1);}
	    input{padding: 10px; margin: 10px; solid #ccc; border-radius: 5px;}
		#button{margin: 10px;  transform: translateX(130%); position: absolute; background-color:#01BD00; cursor: pointer; color: #fff;}
		form{display: inline-block; margin-left: auto; margin-right: auto; text-align:left;}
		input, select, textarea{color: #000000;}
		.error {width: 20%; margin: auto; padding: 10px;  border: 15px solid #a94442; color: #FFFFFF; background: #720D0D; border-radius: 5px; text-align: left;  transform: translateX(350%); position: absolute;}
	</style>
</head>

<body style = "background-color: black">
	<div id="error">
		
		<?php include('./php/hatalar.php') ?>
		
		
		</div>
<div id="signForm">
	<h2>Şifreni Değiştir!</h2>
        <p>Şifreni Değiştirmek İçin Tüm Bilgileri Giriniz.</p>
	    <p>Geri Dönmek İçin <a href="Kullanıcı-ayar.php">Tıkla</a>.</p>
	<form action="sifre_degistir.php" method="POST">
	<table>
		
	<tr>	
		<td><span style="color: #F4F4F4">Şimdiki Şifren: </span></td> <td> <input type="password" name="curPass"> </td>
	<tr>	
		<td><span style="color: #F4F4F4">Yeni Şifren: </span></td> <td> <input type="password" name="newPass"> </td>
	</tr>			
		<td><span style="color: #F4F4F4">Yeni Şifreni Onayla: </span></td> <td> <input type="password" name="newPassConfirm"> </td>
		
<tr>	
	<td> <button type="submit" id="button" class="btn" name="updatePass">Şifreni Değiştir</button></td>
	</tr>	
										
	</table>
	
	</form>
	</div>
</body>

</html> 