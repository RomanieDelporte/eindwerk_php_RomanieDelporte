<?php 

require_once './app.php';

$messages = MessagePhoto::getImages();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FE-PGM</title>
    <link rel="stylesheet" href="scss/images_page.css?<?= time();?>">
</head>
<body>
<div class="container">
    <div class="messages">
        <form method="POST" action="api/add_image.php" enctype="multipart/form-data">
            <div class="message message-new">
                <div class="content">
                    <p>Voeg een bericht en foto van een afgelopen evenement</p>
                    <textarea name="tweet"></textarea>
                    <input type="file" name="photo" multiple>
                    <button type="submit">Post</button>
                </div>
            </div>
        </form>
        <div class="container">
        <div class="row">
     
        <?php foreach($messages as $message) {
            include 'views/message_image.php';
        } ?>
        </div>
    </div>
    </div>

</div>

</body>
</html>