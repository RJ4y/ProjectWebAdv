<?php
require_once 'PDOEventRepository.php';
$url = parse_url(trim($_SERVER['REQUEST_URI']));
$pathSegments = array_values(
    array_filter(explode('/', $url['path'])));
$method = $_SERVER['REQUEST_METHOD'];
$requestBody = file_get_contents('php://input');
if ($method == 'GET') {
    if ($pathSegments[3] == "events") { // /events/
        if (isset($pathSegments[4])) { // events/{id}
            if (is_numeric($pathSegments[4])) {
                $repo = new \repo\PDOEventRepository(ConnectionDb::getConnection());
                $event = $repo->findEventById($pathSegments[4]);
                if ($event != null) { // eventid gevonden
                    http_response_code(200);
                    header('Content-Type: application/json');
                    echo json_encode($event);
                } else {
                    http_response_code(404); // eventid bestaat niet
                }
            } else {
                http_response_code(400); // eventid is not numeric
            }
        } else {
            $repo = new \repo\PDOEventRepository(ConnectionDb::getConnection());
                $events = $repo->findEvents();
                if ($events != null) { // Geen events in database
                    http_response_code(200);
                    header('Content-Type: application/json' );
                    echo json_encode($events);
                } else {
                    http_response_code(404); // eventid bestaat niet
                }
             }
        }else{
        if ($pathSegments[3] == "Person"){
            if (isset($pathSegments[4])){
                if (is_numeric($pathSegments[4])){
                    $repo = new \repo\PDOEventRepository(ConnectionDb::getConnection());

                    $person = $repo->findPerson($pathSegments[4]);
                    if ($person != null) { // persons gevonden
                        http_response_code(200);
                        header('Content-Type: application/json');
                        echo json_encode("$person");
                }
            }
            } else {
                http_response_code(404); // eventid bestaat niet
            }
        }
    }
    }
    if( isset($pathSegments[3]) && strcmp($pathSegments[3] , "person") == 0){
        if (isset($pathSegments[4])){
            $events = \repo\PDOEventRepository::findPerson($pathSegments[4]);
            if ($events != 0){
                http_response_code(200);
                header('Content-Type: application/json');
                echo json_encode($events);
            }
        }

    }

?>
