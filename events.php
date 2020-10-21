<?php 
include './views/partials/home/header_home.php';

$search_string= $_GET['search_string'] ?? '';

$sql = 'SELECT * FROM `events` WHERE `title` LIKE :search_string LIMIT 20';

$sql_statement = $db->prepare($sql);
$sql_statement->execute(
    [
        ':search_string' => '%' . $search_string . '%'
    ]
);
$events = $sql_statement->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/events.css">
    <script src="https://kit.fontawesome.com/bd99fa10f5.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="api/add_event.php">
            <div class="message message-new">
                <div class="add_event">
                    <textarea name="event"></textarea>
                    <textarea name="description"></textarea>
                    <button type="submit">Voeg toe</button>
                </div>
            </div>
        </form>
        <form>
            <div class="search">
                <div class="content">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" value="<?= $search_string; ?>" name="search_string"
                            type="search" placeholder="Zoekterm" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card-columns">
                <?php 
   
   foreach( $events as $event) {
       include 'views/events.php';
   }
   
   
   ?>
            </div>
        </div>
    </div>

</body>

</html>