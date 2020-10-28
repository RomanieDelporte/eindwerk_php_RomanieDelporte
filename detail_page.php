<?php 

 require_once  'app.php';
 $v_id = $_GET['q_id'] ?? 0;

 //sql met parameter placeholders
 $sql = 'SELECT * FROM `opportunities` WHERE `eat_id` = :p_id';

 //voorbereiding
 $pdo_statement = $db->prepare($sql);
 //uitvoeren met parameters
 $pdo_statement->execute([
         ':p_id' => $v_id
     ]);
 //resultaat opvragen
 $result = $pdo_statement->fetchObject();


// $all_detail =EatDetail::getDetail();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="scss/detail.css?<?= time();?>">
  <script src="https://kit.fontawesome.com/bd99fa10f5.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Eindwerk_php</title>
</head>

<body>
  <?php 
        include './views/partials/home/header_home.php';
  ?>
  <div class="detail">
    <div class="container">
      <div class="detail__content">
        <div class="col-6">
        <img src="/assets/images/<?= $result->photo; ?>">
        </div>
        <div class="col-6">
        <h1><?= $result->title; ?></h1>
        <h2><?= $result->short_description;?></h2>
        <p><?= $result->location;?></p>
        <a href="<?= $result->takeaway;?>">Bekijk hier</a>
        </div>
      </div>
    </div>
  </div>
  <?php
include './views/partials/home/footer_home.php';

?>






</body>

</html>