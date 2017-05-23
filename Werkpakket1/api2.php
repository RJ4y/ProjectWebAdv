<?php

use Repositories\PDOEventRepository;
require "JsonView.php";
require "EvenementController.php";
require "vendor/autoload.php";
include 'ConnectionDb.php';
include 'PDOEventRepository.php';
try {
    $router = new AltoRouter();
    $router->setBasePath('/~user/werkpakket1/api');

    $router->map('GET','/events',
        function() {

            $connection = ConnectionDb::getConnection();
            $repo = new PDOEventRepository($connection);
            $view = new JsonView();
            $controller = new EvenementController($repo , $view);
            if (isset($_GET["from"])& isset($_GET["until"])){
                $controller->getAllEventByDate($_GET["from"] , $_GET["until"]);
            }else{
                $controller->getAllEvents();
            }
        }
   );
    $router->map('GET','/events/[i:id]',
        function($id) {
            $connection = ConnectionDb::getConnection();
            $repo = new PDOEventRepository($connection);
            $view = new JsonView();
            $controller = new EvenementController($repo , $view);
            $controller->getAllEventById($id);
        }
    );
    $router->map('GET','/events/person/[i:id]',
        function($id) {
            $connection = ConnectionDb::getConnection();
            $repo = new PDOEventRepository($connection);
            $view = new JsonView();
            $controller = new EvenementController($repo , $view);
            $controller->getAllEventByPerson($id);
        }
    );
    $router->map('GET','/person/[i:id]/events',
        function($id) {

            if (isset($_GET["from"]) & isset($_GET["until"])){
                $fromDate = $_GET["from"];
                $toDate = $_GET["until"];
                $connection = ConnectionDb::getConnection();
                $repo = new PDOEventRepository($connection);
                $view = new JsonView();
                $controller = new EvenementController($repo , $view);
                $controller->getAllEventByDateAndPerson($id , $fromDate ,$toDate);
            }else{
                echo "Parameters zijn niet meegegeven";
            }


        }
    );
    $router->map('POST' , '/events'
        ,function(){
            $evenement = new Evenement();
            $evenement->titel = $_POST['titel'];
            $evenement->id = $_POST['id'];
            $evenement->datumIngave = $_POST['datumIngave'];
            $evenement->klant = $_POST['klant'];
            $evenement->omschrijvingEvenement =  $_POST['omschrijvingEvenement'];
            $evenement->verwachteAanwezigheid =  $_POST['verwachteAanwezigheid'];
            $evenement->type =  $_POST['type'];
            $evenement->toegewezenPersoneel =  $_POST['toegewezenPersoneel'];
            $evenement->startDatum =  $_POST['startDatum'];
            $evenement->eindDatum =  $_POST['eindDatum'];
            $connection = ConnectionDb::getConnection();
            $repo = new PDOEventRepository($connection);
            $view = new JsonView();
            $controller = new EvenementController($repo , $view);
            $controller->AddEvent($evenement);





        });
    $match = $router->match();
    if( $match && is_callable( $match['target'] ) ){
        call_user_func_array( $match['target'], $match['params'] );
    }else{
      http_response_code(404);
    }

}catch (Exception $e){
    echo $e;
}