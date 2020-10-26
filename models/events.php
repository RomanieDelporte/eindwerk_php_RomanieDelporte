<?php 

class Events extends BaseModel {


    public static function getAllEvents() {
        global $db;
            $search_string= $_POST['search_string'] ?? '';

            $sql = 'SELECT * FROM `events` WHERE `title` LIKE :search_string LIMIT 20';

            $sql_statement = $db->prepare($sql);
            $sql_statement->execute(
                [
                    ':search_string' => '%' . $search_string . '%'
                ]
            );
            return $sql_statement->fetchAll();
        
    }
}

