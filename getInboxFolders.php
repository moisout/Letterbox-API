<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "GET":
        $folderNames = array('Inbox', 'Archive', 'Sent', 'Spam', 'Trash');
        echo json_encode($folderNames);
        http_response_code(200);
        break;

    case "PUT":
        # code...
        break;

    case "POST":
        # code...
        break;

    case "DELETE":
        # code...
        break;

    default:
        break;
}
