<?php
require "vendor/autoload.php";
try {

    $router = new AltoRouter();


    $router->setBasePath('/api');

    $router->map('GET','/event',
        function() {
            /*$connection = ConnectionDb::getConnection();
            $repo = new Repositories\PDOEventRepository($connection);
            $repo->findEvents();*/
            echo "event";
        }
   );
    $router->map('GET','/event/[i:id]',
        function($id) {
            $connection = ConnectionDb::getConnection();
            $repo = new Repositories\PDOEventRepository($connection);
            $repo->findEventByPerson($id);
        }
    );
    $router->map('GET','/event/person/[i:id]',
        function($id) {
            $connection = ConnectionDb::getConnection();
            $repo = new Repositories\PDOEventRepository($connection);
            $repo->findEventByPerson($id);
        }
    );
    $router->map('GET','/events/?from=[$fromDate]&until=[$toDate]/[i:id]',
        function($fromDate , $toDate) {
            $connection = ConnectionDb::getConnection();
            $repo = new Repositories\PDOEventRepository($connection);
            $repo->findEventByDate($fromDate , $toDate);
        }
    );
    $router->map('GET','/person/{personId}/events/?from=[$fromDate]&until=[$toDate]/[i:id]',
        function($fromDate , $toDate) {
            $connection = ConnectionDb::getConnection();
            $repo = new Repositories\PDOEventRepository($connection);
            $repo->findEventByDate($fromDate , $toDate);
        }
    );
    $match = $router->match();
    if( $match && is_callable( $match['target'] ) ){
        call_user_func_array( $match['target'], $match['params'] );
    }
} catch (Exception $e) {
    var_dump($e);
}
