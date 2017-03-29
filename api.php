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
            $events = \repo\PDOEventRepository::get($pathSegments[4]);
            http_response_code(200);
            header('Content-Type: application/json');
            echo json_encode($events);
        }
    }
}
?>