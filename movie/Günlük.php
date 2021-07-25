<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8' />
    <title>Kayıt Ol!</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type = "text/css">	
		body {text-align:center; height: 100%;}
		#signForm{cursor: pointer; color: #fff; border-radius: 15px; margin: 10% auto; margin-left: auto; margin-right: auto; text-align: center; padding: 10px; width: 450px; height: 450px; background: rgba(0, 0, 0, 0.8);}
	    input{padding: 10px; margin: 10px; solid #ccc; border-radius: 5px;}
		#button{margin: 100px;  transform: translateX(155%); transform: translateY(150%); position: absolute; background-color:#01BD00; cursor: pointer; color: #fff;}
		form{display: inline-block; margin-left: auto; margin-right: auto; text-align:left;}
		input, select, textarea{color: #000000;}
		textarea {position: absolute; resize:none;}
	
	</style>
</head>

<body style = "background: url(resimler/Background2.jpg)">
<div id="signForm">
	<h2>Günlükler</h2>
        <p>Günlük yazmak için boş kısımları doldurun.</p>
	    <p><a href="register.php">Geri Dön</a></p>
	<form action="?" method="POST">
	<table>
		
	<tr>	
		<td>Tarihi Giriniz: </td> <td> <input type="date" name="date"> </td>
		 
	<tr>
		</table>	
		       <td> 
              <p style="text-align: center">Günlük:</p>

              </td>
		
		
		<table>
		<textarea name="textarea" rows="7" cols="40"></textarea>
	</tr>			
		
<tr>	
		<td> <input type="submit" id="button" value="Gönder"> </td>
	</tr>	
</table>
	
	
	</form>
	</div>
</body>

</html>