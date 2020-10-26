<?php 


require 'app.php';

$v_id = $_GET['page_id'] ?? 1;

$current_page = Page::getById($v_id);

$all_pages = Page::getAll();
    
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

$view = './views/' . $current_page->template . '.php';
//Indien het php bestand niet bestaat gebruik dan page.php
if (! file_exists($view)) {
    $view = 'home.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 
    include_once './views/partials/home/header_home.php'; 

    include_once $view;

    include_once './views/partials/home/footer_home.php';

?>
</body>
</html>


