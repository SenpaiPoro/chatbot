<?php
require_once __DIR__ . '../classes/chatbot.php';
include 'connection.php';

if(isset($_POST['add'])){
    $keyword = trim($_POST['keyword']);
    $reply   = trim($_POST['reply']);

    if($keyword != '' && $reply != ''){
        $stmt = $conn->prepare("INSERT INTO chatbot_responses (keyword, reply) VALUES (?, ?)");
        $stmt->bind_param("ss", $keyword, $reply);
        $stmt->execute();
    }
    $responses = $conn->query("SELECT * FROM chatbot_responses");
}


if(isset($_POST['add_hotel'])){
    $name = trim($_POST['name']);
    $address = trim($_POST['address']);
    $code = trim($_POST['code']);

    if($name != '' && $address != '' && $code != ''){
        $stmt = $conn->prepare("INSERT INTO hotels (name, address, code) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $address, $code);
        $stmt->execute();
    }
}

?>