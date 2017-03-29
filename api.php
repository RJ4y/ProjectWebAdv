<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 29/03/2017
 * Time: 10:27
 */
require_once 'PDOEventRepository.php';

$url = parse_url(trim($_SERVER['REQUEST_URI']));
$pathSegments = array_values(
    array_filter(explode('/', $url['path'])));
$method = $_SERVER['REQUEST_METHOD'];
$requestBody = file_get_contents('php://input');

if ($method == 'GET') {
    if (isset($pathSegments[3])) { // /events/
        if (isset($pathSegments[4])) { // events/{id}
            if (is_numeric($pathSegments[4])) {
                $event = \repo\PDOEventRepository::findEventById($pathSegments[4]);
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
            if (is_numeric($pathSegments[3])) {
                $events = \repo\PDOEventRepository::findEvents();
                if ($events != null) { // eventid gevonden
                    http_response_code(200);
                    header('Content-Type: application/json');
                    echo json_encode($events);
                } else {
                    http_response_code(404); // eventid bestaat niet
                }
            } else {
                http_response_code(400); // eventid is not numeric
            }
        }
    }
}
?>