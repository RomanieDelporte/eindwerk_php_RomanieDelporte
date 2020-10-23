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
  <div class="header__home">
    <div class="container">
      <div class="row login">
        <div class="col-6 col-md-4">
          <h1 class="login__name">Fe-pgm</h1>
        </div>
        <div class="col-6 col-md-6">
         <?php 
         
         $sql = 'SELECT `page_id`, `name`, `slug` FROM `pages` ORDER BY `sort_order`';
        $pdo_statement = $db->prepare($sql);
         // uitvoeren
        $pdo_statement->execute();
        // resultaat opvragen + variabel aanmaken voor een navigatie op te bouwen
        $all_pages = $pdo_statement->fetchAll();


            echo '<nav>';
         foreach($all_pages as $page) {
             echo  '<a href="index.php?page_id=' . $page['page_id'] . ' "> ' . $page['name'] . '</a>';
         }
         echo '</nav>';
         
         ?>
        </div>
        <div class="login__profile col-6 col-md-2">
          <p class="login__name__after">Hallo Romanie</p>
          <i class="fas fa-chevron-circle-down"></i>
        </div>
      </div>
    </div>
  </div>
</body>
</html>