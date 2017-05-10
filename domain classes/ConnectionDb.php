<?php

/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/03/2017
 * Time: 09:34
 */
class Connection
{
    public static function getConnection()
    {
        $config = simplexml_load_file("config.xml");

        $host = trim((String)$config->host);
        $user = trim((String)$config->dbUser);
        $password = trim((String)$config->dbPw);
        $database = trim((String)$config->dbName);
        $pdo = null;
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database",
                $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            print 'Exception!: ' . $e->getMessage();
        }
    }
}

?>