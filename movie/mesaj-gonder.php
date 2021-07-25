<?php
include 'php/baglanti.php';
include 'fonksiyonlar.php';
$id = mysqli_real_escape_string($db,$_SESSION['id']);
$gelen=mysqli_query($db,"SELECT *FROM kullanici WHERE id NOT IN('$id')");
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FORM KONTROL</title>
        <style>
      body{background-color:black;}
           

            .container { 
			
              max-width: 100%;
              width: 100%;
              margin: 0 auto;
              position: relative;
            }
 
            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="tel"],
            #contact input[type="url"],
            #contact textarea,
            #contact button[type="submit"] {
              font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
            }
 
            #contact {
              background: #F9F9F9;
              padding: 25px;
              margin: 150px 0;
              box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }
 
            #contact h3 {
              display: block;
              font-size: 30px;
              font-weight: 300;
              margin-bottom: 10px;
            }
 
            #contact h4 {
              margin: 5px 0 15px;
              display: block;
              font-size: 13px;
              font-weight: 400;
            }
 
            fieldset {
              border: medium none !important;
              margin: 0 0 10px;
              min-width: 100%;
              padding: 0;
              width: 100%;
            }
 
            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="tel"],
            #contact input[type="url"],
            #contact textarea {
              width: 100%;
              border: 1px solid #ccc;
              background: #FFF;
              margin: 0 0 5px;
              padding: 10px;
            }
 
            #contact input[type="text"]:hover,
            #contact input[type="email"]:hover,
            #contact input[type="tel"]:hover,
            #contact input[type="url"]:hover,
            #contact textarea:hover {
              -webkit-transition: border-color 0.3s ease-in-out;
              -moz-transition: border-color 0.3s ease-in-out;
              transition: border-color 0.3s ease-in-out;
              border: 1px solid #aaa;
            }
 
            #contact textarea {
              height: 100px;
              max-width: 100%;
              resize: none;
            }
 
            #contact button[type="submit"] {
              cursor: pointer;
              width: 100%;
              border: none;
              background: #4CAF50;
              color: #FFF;
              margin: 0 0 5px;
              padding: 10px;
              font-size: 15px;
            }
 
            #contact button[type="submit"]:hover {
              background: #43A047;
              -webkit-transition: background 0.3s ease-in-out;
              -moz-transition: background 0.3s ease-in-out;
              transition: background-color 0.3s ease-in-out;
            }
 
            #contact button[type="submit"]:active {
              box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
            }
 
            .copyright {
              text-align: center;
            }
 
            #contact input:focus,
            #contact textarea:focus {
              outline: 0;
              border: 1px solid #aaa;
            }
 
            ::-webkit-input-placeholder {
              color: #888;
            }
 
            :-moz-placeholder {
              color: #888;
            }
 
            ::-moz-placeholder {
              color: #888;
            }
 
            :-ms-input-placeholder {
              color: #888;
            }
 
        </style>
    </head>
    <body>
    <div class="container">  
      <form id="contact" action="gonder.php" method="post">
        <h3>Film Sitem</h3>
        <h4>Mesaj</h4>
		<fieldset>
          <select id="kullanici" name="kullanici" aria-invalid="false">
                                                    <option selected="">Kullanıcılar</option>
													<?php
                                                        while($veri=mysqli_fetch_array($gelen)) 
                                                        { ?>
                                                            <option value="<?=$veri["id"]?>"><?php kullaniciAdSoyad($veri["id"]);?></option>
                                                <?php   } ?>
                                                </select>
        </fieldset>
        <fieldset>
          <input style="height: 2em; font-size:16px;" placeholder="Mesaj Başlığı" type="text" name="baslik" tabindex="3" required>
        </fieldset>
        <fieldset>
		<textarea style="height: 9em; font-size:16px;" placeholder="Mesajınızı girin...."name="icerik"  rows="10" cols="76" tabindex="5" class="inputbox" ></textarea>
          
        </fieldset>	
        <fieldset>
          <input  name="mesaj-gonder" type="submit" value="Mesaj Gönder">
		 
        </fieldset>
		<fieldset>
       <input type="button" value="Geri" onclick="history.back(-1)" />
		 
        </fieldset>
      </form>
    </div>
    </body>
</html>
 