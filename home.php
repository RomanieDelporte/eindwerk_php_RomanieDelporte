<?php 

include './views/partials/home/header_home.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="scss/home.css">
  <script src="https://kit.fontawesome.com/bd99fa10f5.js" crossorigin="anonymous"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eindwerk_php</title>
</head>

<body>
  <div class="home">
    <div class="home__about">
      <h1>FE-pgm. Wie zijn we?</h1>
    </div>
    <div class="home__text">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h2> Wij zijn FE-PGM.</h2>
            <h3>Wij maken van u online aanwezigheid een succes!</h3>
            <p><br> Wil je met je medeklasgenoten een activiteit organiseren?<br> dan kan dit hier zeer eenvoudig maak
              een evenement aan<br> en laat je medeklasgenoten keuzes maken uit verschillende<br> datums. Of eens lekker
              vettig eten op "vettige vrijdag"?<br> maak hier je keuze en alles gaat veel vlotter.</p>
          </div>
          <div class="col-6">
            <img src="assets/images/home__picture.png">
          </div>
          <div class="title_events">
            <h1>Komende events</h1>
          </div>

          <div class="card-columns">

            <div class="card_paint">

              <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
              <div class="card-body">
                <h5 class="card-title">Paintball</h5>
                <p class="card-text">2PGM - Neem een kijkje in het tablad events en maak leuke evenementen aan <br><a
                    href="detail.php">Lees meer</a></p>
                <p class="card-text"><small class="text-muted"> Aanmaak event: 22 november</small></p>
              </div>
            </div>
            <div class="card_team">
              <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
              <div class="card-body">
                <h5 class="card-title">Teambuilding</h5>
                <p class="card-text">2PGM - Neem een kijkje in het tablad events en maak leuke evenementen aan <br><a
                    href="detail.php">Lees meer</a></p>
                <p class="card-text"><small class="text-muted">Aanmaak event: 3 december</small></p>
              </div>
            </div>
            <div class="card_eat">
              <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
              <div class="card-body">
                <h5 class="card-title">Amadeus</h5>
                <p class="card-text">2PGM - Neem een kijkje in het tablad events en maak leuke evenementen aan <br><a
                    href="detail.php">Lees meer</a></p>
                <p class="card-text"><small class="text-muted">Aanmaak event: 14 januari</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<?php 

include './views/partials/home/footer_home.php';

?>

</html>