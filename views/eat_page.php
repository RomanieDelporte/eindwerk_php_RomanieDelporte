<?php 

 

  $delivery = $_GET['delivery'] ?? null;
  $pickup = $_GET['pickup'] ?? null;

  $all_options = EatOptions::getOptions($delivery, $pickup);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/eat_page.css?<?= time();?>">
    <title>Document</title>
</head>

<body>
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-4 page__title">
                    <h2>Aantal Restaurants</h2>
                </div>
                <div class="col-8">
                    <form>
                        <div class="page__form">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" name="search_string" type="search"
                                    placeholder="Zoekterm" aria-label="Search">
                                <button type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-4 page__options">
                    <h3>Selecteer</h3>
                    <a href="index.php?page_id=3" class="<?= ($delivery  === null && $pickup === null) ? 'active' : '' ?>" >All</a>
                    <a href="index.php?page_id=3&delivery=1" class="<?= ($delivery !== null) ? 'active' : '' ?>" >Delivery</a>
                    <a href="index.php?page_id=3&pickup=1" class="<?= ($pickup !== null) ? 'active' : '' ?>">Pickup</a>

                </div>
                <div class="col-8">
                    <div class="page__options">
                        <?php 
                    foreach( $all_options as $option) {
                        // echo var_dump($optie);
                        include './views/eat.php';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>