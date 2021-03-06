<?php
require_once 'Werkpakket1/PDOEventRepository.php';
require_once 'Werkpakket1/ConnectionDb.php';
$url = parse_url(trim($_SERVER['REQUEST_URI']));
$pathSegments = array_values(
    array_filter(explode('/', $url['path'])));
$method = $_SERVER['REQUEST_METHOD'];
$requestBody = file_get_contents('php://input');
if ($method == 'GET') {
    if(isset($pathSegments[3])){
        if ($pathSegments[3] == "events") { // /events/
            if (isset($pathSegments[4])) { // events/{id}
                if (is_numeric($pathSegments[4])) {
                    $repo = new \Repositories\PDOEventRepository(ConnectionDb::getConnection());
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
                $repo = new \Repositories\PDOEventRepository(ConnectionDb::getConnection());
                $events = $repo->findEvents();
                if ($events != null) { // Geen events in database
                    http_response_code(200);
                    header('Content-Type: application/json');
                    echo json_encode($events);
                } else {
                    http_response_code(404); // eventid bestaat niet
                }
            }
        } else {
            if ($pathSegments[3] == "Person") {
                if (isset($pathSegments[4])) {
                    if (is_numeric($pathSegments[4])) {
                        $repo = new \Repositories\PDOEventRepository(ConnectionDb::getConnection());

                        $person = $repo->findPerson($pathSegments[4]);
                        if ($person != null) { // persons gevonden
                            http_response_code(200);
                            header('Content-Type: application/json');
                            echo json_encode($person);
                        }
                    }
                } else {
                    http_response_code(404); // eventid bestaat niet
                }
            }
        }
    }
} else {
    if ($method == 'POST') {
        if (isset($pathSegments[3])) {
            if ($pathSegments[3] == "events") {
                $evenementJson = json_decode($requestBody, true);
                $evenement = new Evenement($evenementJson['id'], $evenementJson['titel'], $evenementJson['datumIngave'],
                    $evenementJson['klantId'], $evenementJson['omschrijving'], $evenementJson['startDatum'], $evenementJson['eindDatum'],
                    $evenementJson['verwachteAanwezigheid'], $evenementJson['type'], $evenementJson['toegewezenPersoneel']);
                $repo = new \Repositories\PDOEventRepository(ConnectionDb::getConnection());
                $createdEvent = $repo->AddEvent($evenement);
                if($createdEvent!=null){
                    http_response_code(201);
                    header('Content-Type: application/json');
                    echo json_encode($createdEvent);
                }
            }
        }
    }
}
?>