<?php 

include_once './libs/db.php';

$sql = 'SELECT * FROM `events` ORDER BY `date` DESC LIMIT 3';

$sql_statement = $db->prepare($sql);
$sql_statement->execute();
$events = $sql_statement->fetchAll();

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
          <div class="container">
            <div class="title_events">
              <h1>Komende events</h1>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="card-columns">
            <?php 
              
              foreach( $events as $event) {
              include './views/events.php';
              
            }
            ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>

</body>


</html>