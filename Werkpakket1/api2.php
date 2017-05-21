<?php
use Repositories\PDOEventRepository;

require "vendor/autoload.php";
include 'ConnectionDb.php';
include 'PDOEventRepository.php';
try {

    $router = new AltoRouter();


    $router->setBasePath('/~user/Werkpakket1/api');

    $router->map('GET','/event',
        function() {
            $connection = ConnectionDb::getConnection();
            $repo = new PDOEventRepository($connection);
            $event= $repo->findEvents();
            if ($event != null) { // eventid gevonden
                http_response_code(200);
                header('Content-Type: application/json');
                echo json_encode($event);
            } else {
                http_response_code(404); // eventid bestaat niet
            }
        }
   );
    $router->map('GET','/event/[i:id]',
        function($id) {
            $connection = ConnectionDb::getConnection();
            $repo = new PDOEventRepository($connection);
            $event= $repo->findEventById($id);
            if ($event != null) { // eventid gevonden
                http_response_code(200);
                header('Content-Type: application/json');
                echo json_encode($event);
            } else {
                http_response_code(404); // eventid bestaat niet
            }
        }
    );
    $router->map('GET','/event/person/[i:id]',
        function($id) {
            $connection = ConnectionDb::getConnection();
            $repo = new PDOEventRepository($connection);
            $event= $repo->findEventByPerson($id);
            if ($event != null) { // eventid gevonden
                http_response_code(200);
                header('Content-Type: application/json');
                echo json_encode($event);
            } else {
                http_response_code(404); // eventid bestaat niet
            }
        }
    );
    $router->map('GET','/events',
        function() {
           $from = $_GET["from"];
           $until = $_GET["until"];
            $connection = ConnectionDb::getConnection();
            $repo = new Repositories\PDOEventRepository($connection);
            $event =$repo->findEventByDate($from ,$until);
            if ($event != null) { // eventid gevonden
                http_response_code(200);
                header('Content-Type: application/json');
                echo json_encode($event);
            } else {
                http_response_code(404); // eventid bestaat niet
            }

        }
    );
    $router->map('GET','/person/{personId}/events',
        function($id) {
             $connection = ConnectionDb::getConnection();
             $repo = new Repositories\PDOEventRepository($connection);
             $fromDate = $_GET["from"];
             $toDate = $_GET["until"];
           $event = $repo->findEventByDateAndPerson($id , $fromDate , $toDate);
            if ($event != null) { // eventid gevonden
                http_response_code(200);
                header('Content-Type: application/json');
                echo json_encode($event);
            } else {
                http_response_code(404); // eventid bestaat niet
            }
            echo "datumPersoon";
        }
    );

    $router->map('POST' , '/events',function(){
       $connection = ConnectionDb::getConnection();
        $repo = new Repositories\PDOEventRepository($connection);

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
        $repo->AddEvent($evenement);





    });

    $match = $router->match();
    if( $match && is_callable( $match['target'] ) ){
        call_user_func_array( $match['target'], $match['params'] );
    }
} catch (Exception $e) {
    var_dump($e);
}
