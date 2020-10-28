<?php 
class EatDetail extends BaseModel {


    public static function getDetail() {
        global $db;

        $sql = 'SELECT `eat_id`, `title`, `photo` FROM `opportunities` ';

        $sql_statement = $db->prepare($sql);
        $sql_statement->execute(
        
        );

        return $sql_statement->fetchAll();
    }
}