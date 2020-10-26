<?php 

  require './libs/db.php';

 $all_options = EatOptions::getOptions();



// if(isset($_POST['delivery'])) {
    
//     $sql = 'SELECT * FROM `opportunities` WHERE `deliver` = FALSE';

//     }
//     $delivery_line= $_POST['delivery'] ?? '';

//     $sql_statement = $db->prepare($sql);
//     $sql_statement->execute(
//         [
//             ':delivery' =>  $delivery_line 
//         ]
//     );

// if(isset($_POST['pickup'])) {
    
// $sql = 'SELECT * FROM `opportunities` WHERE `deliver` = TRUE';

// }

// $pickup_line= $_POST['pickup'] ?? '';
// $sql_statement = $db->prepare($sql);
// $sql_statement->execute(
//     [
//         ':pickup' =>  $pickup_line 
//     ]
// );
// $all_options = $sql_statement->fetchAll();
// // // print_r($pickup_line);
// // // print_r($pickup);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/eat_page.css">
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
                    <form method="POST">
                        <button method="POST" name="delivery" value="<?= $delivery_line; ?>"
                            type="submit">Delivery</button>
                        <button method="POST" name="pickup" value="<?= $pickup_line; ?>" type="submit">Pickup</button>
                    </form>
                </div>
                <div class="col-8">

                <?php 
                    foreach( $all_options as $option) {
                        include './views/options.php';
                        }
                    
                
                ?>
                    <?php 
                    foreach($all_options as $option) {
                        include './views/eat.php';
                    }
                    ?>

                    <?php 
                        foreach ($all_options as $option) {
                             include './views/deliver.php';
                        }
                    
                    ?>
                </div>
            </div>

        </div>
    </div>
</body>

</html>