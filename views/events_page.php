<?php 

$search_string= $_GET['search_string'] ?? '';

$events = Events::getAllEvents();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/events.css?<?= time();?>">
    <script src="https://kit.fontawesome.com/bd99fa10f5.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FE-PGM</title>
</head>

<body>
    <div class="forms_add">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <form method="POST" action="api/add_event.php" enctype="multipart/form-data">
                        <div class="searchs">
                            <div class="contents">
                                <input class="form-control mr-sm-2" name="event" type="search"
                                    placeholder="Title toevoegen" aria-label="Search">
                                <input class="form-control mr-sm-2" name="description" type="search"
                                    placeholder="Description toevoegen" aria-label="Search">
                                <button type="submit">Voeg Toe</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-4">
                    <form method="POST">
                        <div class="search">
                            <div class="content">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" value="<?= $search_string; ?>"
                                        name="search_string" type="search" placeholder="Zoekterm" aria-label="Search">
                                    <button type="submit">Search</button>
                            </div>
                        </div>
                </div>
            </div>
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

</body>



</html>