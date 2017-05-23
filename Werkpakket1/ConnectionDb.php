<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/03/2017
 * Time: 09:34
 */

  class ConnectionDb{

     public static function getConnection(){
         $host = "localhost";
         $user = "root";
         $password = "user";
         $database = "monkeybussines";
         $pdo=null;
         try {
             $connection = new mysqli($host, $user, $password, $database);
             return $connection;
         } catch ( Exception $e ) {
             print 'Exception!: ' . $e->getMessage();
         }
         $pdo = null;

     }

  }

?>