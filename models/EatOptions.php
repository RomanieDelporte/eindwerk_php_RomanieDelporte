<?php 
class EatOptions extends BaseModel {


    public static function getOptions($delivery, $pickup = null) {
        global $db;

        $sql = 'SELECT * FROM `opportunities`';
        if($delivery !== null) {
            $sql .= 'WHERE `deliver` = 1';
        }
        // als pickup gelijk is aan 1 toont 
        if($pickup !== null) {
            $sql .= 'WHERE `pickup` = 1';
        }

        $sql_statement = $db->prepare($sql);
        $sql_statement->execute(
        
        );

        return $sql_statement->fetchAll();
    }
}





