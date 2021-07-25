<?php
include "php/kullanıcı-ust.php";
session_start();
?>
<link href="css/cikis.css" rel="stylesheet" type="text/css">
    <link href="css/mesaj.css" rel="stylesheet" type="text/css">

    <body style = "background: url(resimler/Background.jpg)"></body>
  </div>
  <div id="biggie" >
    <aside id="imdb">
      <div id="imbd-ara"> <p style="border:groove">İmdb Ara</p> </div>
      <div id="imbd-top"> İMDB POPÜLER</div>
    </aside>
    <div id="icerik">
            <nav id="menu-button" >
        <ul>
         <a href="postpage.html" target="ana"> <li>Anasayfa</li></a>
            <li>Kategoriler
            <ul>
            <a href="imdb/form.html" target="ana"><li>Filmler</li></a>
            </ul>
            </li>
            <a href="top10/topten.html" target="ana"><li>TOP 10</li></a>
            <a href="php/chat.php" target="ana"><li>Eleştiriler</li></a>


          </ul>
      </nav>

        <iframe name="ana" src="postpage.html" allowtransparency="true" width="100%" height="96%" frameborder="0"></iframe>

      </div>
    <div id="alt-sag">
	<a href="mesaj.php" target="ana"><button class="m button1">Mesajlarım</button></a>
		</br>
	  <a href="logout.php"><button class="button button1">Logout</button></a>
         
      </div>
 <?php
include "php/alt.php";
?>