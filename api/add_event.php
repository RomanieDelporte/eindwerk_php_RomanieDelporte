<?php 

require '../libs/db.php';

 $event = $_POST['event'];
 $description = $_POST['description'];

$sql = 'INSERT INTO `events` ( `title`, `short_description`, `date`)
VALUES  (:title, :short_description, :date)
';


$sql_statement = $db->prepare($sql);
$sql_statement->execute(
    [
        ':title' => $event,
        ':short_description' => $description,
        ':date' => date('Y-m-d H:i:s'),
    ]
    );

 header('location: ../index.php?page_id=2');
 die();