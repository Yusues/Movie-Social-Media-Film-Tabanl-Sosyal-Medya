<!doctype html>
<html lang="tr">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <?php
        $ad = $_GET['ad'] ?? null;
        $ad = trim($ad);
        $json = filmAra($ad);
        $obj = json_decode($json, true);
        foreach($obj['Search'] as $row){
        ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo $row['Poster']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['Title']; ?> (<?php echo $row['Year']; ?>)</h5>
                    <p class="card-text"></p>
                    <a href="https://www.imdb.com/title/<?php echo $row['imdbID']; ?>/" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        <?php
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