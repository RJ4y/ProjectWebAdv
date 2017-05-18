<?php
require_once "ConnectionDb.php";
require_once "PDOEventRepository.php";
$connection = ConnectionDb::getConnection();
$url = parse_url(trim($_SERVER['REQUEST_URI']));
$pathSegments = array_values(
    array_filter(explode('/', $url['path'])));
$method = $_SERVER['REQUEST_METHOD'];
$requestBody = file_get_contents('php://input');
if ($method == 'GET') {
    /*
      if ($pathSegments[5] == "events") { // /events/
        if (isset($pathSegments[5])) { // events/{id}

        } else {
            /* $repo = new Repositories\PDOEventRepository($connection);
             $events = $repo->findEvents();
                // $events = "veel iets";
                    if ($events != null) { // eventid gevonden
                     http_response_code(200);
                     header('Content-Type: application/json' );
                     echo json_encode($events);
                 } else {
                     http_response_code(404); // eventid bestaat niet
                 }
              }
            if ($pathSegments[5] == "Person") {
                $repo = new Repositories\PDOEventRepository($connection);
                $events = $repo->findEventByPerson($pathSegments[6]);
                if ($events != null) {
                    http_response_code(200);
                    header('Content-Type: application/json');
                    echo json_encode($events);
                }
            } else {
                if ($pathSegments[5] = "from") {
                    $repo = new Repositories\PDOEventRepository($connection);

                    $events = $repo->findEventByDate();
                    if ($events != null) {
                        http_response_code(200);
                        header('Content-Type: application/json');
                        echo json_encode($events);
                    }
                }
            }
        }
        }else {
              $repo = new Repositories\PDOEventRepository($connection);
              $events = $repo->findEvents();
                 // $events = "veel iets";
                     if ($events != null) { // eventid gevonden
                      http_response_code(200);
                      header('Content-Type: application/json' );
                      echo json_encode($events);
                  } else {
                      http_response_code(404); // eventid bestaat niet
                  }
            }
            /*if ($pathSegments[5] == "Person") {
                $repo = new Repositories\PDOEventRepository($connection);
                $events = $repo->findEventByPerson($pathSegments[6]);
                if ($events != null) {
                    http_response_code(200);
                    header('Content-Type: application/json');
                    echo json_encode($events);
                }
            } else {
                if ($pathSegments[5] = "from") {
                    $repo = new Repositories\PDOEventRepository($connection);

                    $events = $repo->findEventByDate();
                    if ($events != null) {
                        http_response_code(200);
                        header('Content-Type: application/json');
                        echo json_encode($events);
                    }
                }
            }*/
    if ($pathSegments[4] == "events"){
        if (isset($pathSegments[5])){
            if (is_numeric($pathSegments[5])){
                $repo = new Repositories\PDOEventRepository($connection);
                $event = $repo->findEventById($pathSegments[5]);
                if ($event != null) { // eventid gevonden
                    http_response_code(200);
                    header('Content-Type: application/json');
                    echo json_encode($event);
                } else {
                    http_response_code(404); // eventid bestaat niet
                }

            }else {
                if ($pathSegments[5] == "person") {
                    if (is_numeric($pathSegments[6])) {
                        $repo = new Repositories\PDOEventRepository($connection);
                        $event = $repo->findEventByPerson($pathSegments[6]);
                        if ($event != null) {
                            http_response_code(200);
                            header('Content-Type: application/json');
                            echo json_encode($event);
                        } else {
                            http_response_code(404);
                        }
                    }
                }
            }

        }else{
            $repo = new Repositories\PDOEventRepository($connection);
            $event = $repo->findEvents();

            if ($event != null) { // eventid gevonden
                http_response_code(200);
                header('Content-Type: application/json');
                echo json_encode($event);
            } else {
                http_response_code(404); // eventid bestaat niet
            }
        }
    }else{
        echo $pathSegments[5];
        // http_response_code(404);
    }



    }else{
    if ($method == 'PUT'){
        if (isset($pathSegments[4])){
            $evenement=json_decode($requestBody);
            $repo = new Repositories\PDOEventRepository($connection);
            $event = $repo->AddEvent($evenement);
            http_response_code(201);
            header('Content-Type: application/json');
            echo json_encode($evenement);

        }

}
}


?>
