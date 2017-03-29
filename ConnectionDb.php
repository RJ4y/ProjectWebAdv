<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/03/2017
 * Time: 09:34
 */
class Connection{
    static function getConnection(){
        $user='root';
        $password='';
        $database='events';
        $pdo=null;
        try {
            $pdo = new PDO( "mysql:host=localhost;dbname=0".$database,
                $user, $password );
            $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            return $pdo;
        } catch ( PDOException $e ) {
            print 'Exception!: ' . $e->getMessage();
        }
        $pdo = null;
    }
}

?>