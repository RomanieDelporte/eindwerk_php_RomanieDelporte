<?php 



class Home extends BaseModel {


    public static function getEvents() {
        global $db;

        $sql = 'SELECT * FROM `events` ORDER BY `date` DESC LIMIT 3';

        $sql_statement = $db->prepare($sql);
        $sql_statement->execute();
        // $events = $sql_statement->fetchAll();

        return $sql_statement->fetchAll();
    }
}

