<?php 


require 'app.php';
  include_once './views/partials/home/header_home.php'; 

if($_SESSION['user_id']) {  

  $all_pages = Page::getAll();

  $v_id = $_GET['page_id'] ?? 1;

  $current_page = Page::getById($v_id);
  $view = './views/' . $current_page->template . '.php';
  //Indien het php bestand niet bestaat gebruik dan page.php
  if (! file_exists($view)) {
      $view = 'home.php';
  }
  include_once $view;


} else {
  echo 
  '<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
  <div class="about__page">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img src="assets/images/about_us.jpg">
        </div>
        <div class="col-6">
          <h1>Wat doen we?</h1>
          <p>Deze website is gemaakt voor de online aanwezigheid van onze richting nog meer te stimuleren. Registreer je en maak hier je evenementen aan of kies uit een geweldige lijst van fastfoodketens voor vettige vrijdag.</p>
        <a href="register.php">Registreer je</a>
        </div>
      
      </div>
    
    </div>
  
  </div>
  
  </body>
  </html>';
}
  include_once './views/partials/home/footer_home.php';

    
// $sql= 'SELECT * from `pages`';
// $pdo_statement= $db->prepare($sql);
// $pdo_statement->execute();
// $all_pages = $pdo_statement->fetchAll();


// $sql = 'SELECT * FROM `pages` WHERE `page_id` = :p_id';
// $pdo_statement = $db->prepare($sql);
// $pdo_statement->execute([
//         ':p_id' => $v_id
//     ]);
// $current_page = $pdo_statement->fetchObject();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>