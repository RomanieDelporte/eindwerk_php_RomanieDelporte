<?php 
class MessagePhoto extends BaseModel {


    public static function getImages() {
        global $db;

        $sql = 'SELECT * FROM `images` ';

        $sql_statement = $db->prepare($sql);
        $sql_statement->execute(
        
        );

        return $sql_statement->fetchAll();
    }
}