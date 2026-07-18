<?php
require_once __DIR__ . '/classes/chatbot.php';

header('Content-Type: application/json');

if (isset($_POST['message'])) {
    $bot = new Chatbot();
    $reply = $bot->getResponse($_POST['message']);
    echo json_encode(["reply" => $reply]);
}
