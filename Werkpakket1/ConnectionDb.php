<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/03/2017
 * Time: 09:34
 */
require "PDOEventRepository.php";
  class ConnectionDb{

     public static function getConnection(){
       // $config = simplexml_load_file("config.xml");
        // $host=(string)$config->host;
         //$user=$config->dbUser;
         //$password=$config->dbPw;
         //$database=$config-
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