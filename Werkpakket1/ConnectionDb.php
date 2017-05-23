<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/03/2017
 * Time: 09:34
 */

  class ConnectionDb{

     public static function getConnection(){
        /* $config = simplexml_load_file("config.xml");
         $host = trim((String)$config->host);
         $user = trim((String)$config->dbUser);
         $password = trim((String)$config->dbPw);
         $database = trim((String)$config->dbName);
         $pdo = null;

        */
         $host = "localhost";
         $user = "root";
         $password = "user";
         $database = "monkeybussines";
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