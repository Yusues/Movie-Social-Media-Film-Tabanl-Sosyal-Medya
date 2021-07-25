<?php
    $ad = $_POST['ad'] ?? null;
    $ad = trim($ad);
    $sAd = str_replace(" ", "%20", $ad);
    $json = filmAra($sAd);
    $obj = json_decode($json, true);
    
?>
<!doctype html>
<html lang="tr">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <body style="background-color:black;" text="gray" align="center">  

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
    <div class="container" align="center">	
        <div class="row  pt-5 pb-5" align="center">
            <div class="col-md-12 bg-dark" align="center">
				<a href="form.html"><button name="geri" >Başka Bir Film Ara</button></a>
                <h2 class="text-white" align="center"><?php echo $ad; ?></h2>			
            </div>
        </div>
        <div class="row" align="center">		
        <?php		
			
         $i=-1;
		$tittle_array = array();
		$ara = $obj['Search'];
			
		
        foreach((array)$ara as $row){
         $tittle_array[]=$row['imdbID'];
			 $i++;
		
	
        ?>
			
			<form method="post"  >
            <div class="card" style="width: 16.87rem; height: 35rem;">
                <img class="card-img-top" src="<?php echo $row['Poster']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['Title']; ?> (<?php echo $row['Year'];?>) </h5>
                    <p class="card-text"></p>
					
					
					<button type='submit' name='bilgi' value="<?php echo $tittle_array[$i]; ?> ">İncele</button>
					
					<input type="submit" name="incele" value="favorilere ekle "/>
					</form>
	     
            </div>
            </div>
        <?php
		
        }
		
			
			if (isset($_POST['bilgi'])) {
	
$link= "https://www.imdb.com/title/";
$try = $_POST["bilgi"];
$imdb = file_get_contents($link.$try);
preg_match_all('@<h1 class="">(.*?)</h1>@si',$imdb,$baslik);
preg_match_all('@<span itemprop="ratingValue">(.*?)</span>@si',$imdb,$puan);
preg_match_all('@<div class="poster">(.*?)</div>@si',$imdb,$poster);
preg_match_all('@<div class="summary_text">(.*?)</div>@si',$imdb,$aciklama);
echo"<center><br><h3><font color= white>";
print_r($baslik[0][0]);
print_r("Puan ".$puan[0][0]);
print_r($poster[0][0]);
print_r($aciklama[0][0]);

		
}			
        ?>
			
			
        </div>
    </div>
	  

<?php

function filmAra($ad){



    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://movie-database-imdb-alternative.p.rapidapi.com/?s={$ad}&page=1&r=json",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: movie-database-imdb-alternative.p.rapidapi.com",
            "x-rapidapi-key: 50667ab4cbmsh354cbcc949121abp1798e6jsn98216d7a3725"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        return $response;
    }

}

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>