<?php 



class EatOptions extends BaseModel {


    public static function getOptions() {
        global $db;

        $sql = 'SELECT * FROM `opportunities`';

        $sql_statement = $db->prepare($sql);
        $sql_statement->execute();

        return $sql_statement->fetchAll();
    }
}





