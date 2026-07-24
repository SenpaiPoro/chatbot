<?php
require_once __DIR__ . '/classes/chatbot.php';
include 'connection.php';

if(isset($_POST['add'])){
    $keyword = trim($_POST['keyword']);
    $reply   = trim($_POST['reply']);

    if($keyword != '' && $reply != ''){
        $stmt = $conn->prepare("INSERT INTO chatbot_responses (keyword, reply) VALUES (?, ?)");
        $stmt->bind_param("ss", $keyword, $reply);
        $stmt->execute();
    }
}
$responses = $conn->query("SELECT * FROM chatbot_responses");


?>