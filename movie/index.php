<?php
include "php/ust.php";
?>  
     
    <body style = "background: url(resimler/Background.jpg)"></body>
  </div>
  <div id="biggie">
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
				<a href="Login.php"><li>Filmler</li></a>
			</ul>
			</li>
			<a href="top10/topten.html" target="ana"><li>TOP 10</li></a>
			<a href="Login.php"><li>Eleştiriler</li></a>
		  
		  
		  </ul>
      </nav>
		<iframe src="postpage.html" name="ana" width="100%" height="96%" frameborder="0"></iframe>
		
      </div>
    <div id="alt-sag"> <nav id="site-ara"><p style="border:groove">Site içi ara</p> </nav>haftanın popülerleri 
	  
	  </div>
 <?php
include "php/alt.php";
?>  