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
        $evenement->setTitel($_POST['titel']);
        $evenement->setId($_POST['id']);
        $evenement->setDatumIngave($_POST['datumIngave']);
        $evenement->setKlantId($_POST['klant']);
        $evenement->setOmschrijving($_POST['omschrijvingEvenement']);
        $evenement->setVerwachteAanwezigheid($_POST['verwachteAanwezigheid']);
        $evenement->setType($_POST['type']);
        $evenement->setToegewezenPersoneel($_POST['toegewezenPersoneel']);
        $evenement->setStartDatum($_POST['startDatum']);
        $evenement->setEindDatum($_POST['eindDatum']);
        $connection = ConnectionDb::getConnection();
        $repo = new PDOEventRepository($connection);
        $view = new JsonView();
        $controller = new EvenementController($repo , $view);
        $controller->AddEvent($evenement);

    });

    $match = $router->match();
    if( $match && is_callable( $match['target'] ) ){
        call_user_func_array( $match['target'], $match['params'] );
    }
} catch (Exception $e) {
    var_dump($e);
}
