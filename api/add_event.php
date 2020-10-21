<?php 

require '../libs/db.php';

 $event = $_POST['event'];
 $description = $_POST['description'];

$sql = 'INSERT INTO `events` (`event_id`, `title`, `short_description`, `date`)
VALUES  (:event_id, :title, :short_description, :date)
';


$sql_statement = $db->prepare($sql);
$sql_statement->execute(
    [
        ':event_id' => 18,
        ':title' => $event,
        ':short_description' => $description,
        ':date' => date('Y-m-d H:i:s'),
    ]
    );

header(' location: ../events.php');
die();