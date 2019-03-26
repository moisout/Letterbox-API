<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$method = $_SERVER['REQUEST_METHOD'];

// $secret_key = sodium_crypto_secretbox_keygen();
// $message = 'Sensitive information';

// $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
// $encrypted_message = sodium_crypto_secretbox($message, $nonce, $secret_key);


switch ($method) {
    case "GET":
        $folderNames = array('Inbox', 'Archive', 'Sent', 'Spam', 'Trash');
        echo json_encode($folderNames);
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
