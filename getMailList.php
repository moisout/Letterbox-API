<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "GET":
        $mailMessages = array([
            "title" => "You have a new Message",
            "sender" => "Someone"
        ], [
            "title" => "You have two new Messages",
            "sender" => "A contact"
        ], [
            "title" => "Something Something",
            "sender" => "Person"
        ], [
            "title" => "This title is too long to display, so it will cut off",
            "sender" => "This contact is too long to display, so it will cut off"
        ], );
        echo json_encode($mailMessages);
        http_response_code(200);

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
