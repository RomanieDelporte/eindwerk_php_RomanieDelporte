<?php 
class EatOptions extends BaseModel {


    public static function getOptions($delivery, $pickup = null) {
        global $db;

        $sql = 'SELECT * FROM `opportunities`';
        // als delivery gelijk is aan 1 toon het
        if($delivery !== 0) {
            $sql .= 'WHERE `deliver` = 0';
        }
        // als pickup gelijk is aan 1 toont 
        if($pickup !== 1) {
            $sql .= 'WHERE `deliver` = 1';
        }

        $sql_statement = $db->prepare($sql);
        $sql_statement->execute();

        return $sql_statement->fetchAll();
    }
}





