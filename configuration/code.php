<?php
require_once __DIR__ . '/../classes/chatbot.php';
include 'connection.php';

if(isset($_POST['add'])){
    $keyword = trim($_POST['keyword']);
    $reply   = trim($_POST['reply']);

    if($keyword != '' && $reply != ''){
        $stmt = $conn->prepare("INSERT INTO chatbot_responses (keyword, reply) VALUES (?, ?)");
        $stmt->bind_param("ss", $keyword, $reply);
        $stmt->execute();
    }
    $responses = $connection->query("SELECT * FROM chatbot_responses");
}


if(isset($_POST['add_hotel'])){
    $name = trim($_POST['name']);
    $address = trim($_POST['address']);
    $code = trim($_POST['code']);

    if($name != '' && $address != '' && $code != '' && strlen($code) >2 && strlen($code) < 6){

        $duplicate = $connection->query("SELECT * FROM hotels WHERE code = '$code'");
        if ($duplicate->num_rows > 0) {
            echo '<script>alert("Hotel with this code already exists."); window.location.href = "../admin/addhotel.php";</script>';
            exit();
        }else{
            $stmt = $connection->prepare("INSERT INTO hotels (name, address, code) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $address, $code);
            $stmt->execute();
            }
    }else{
        echo '<script>alert("Please fill in all fields. Or Code is not valid."); window.location.href = "../admin/addhotel.php";</script>';
    }
        if($stmt->affected_rows > 0) {

            $hcode = $connection->prepare("INSERT INTO hotel_info (code) VALUES (?)");
            $hcode->bind_param("s", $code);
            $hcode->execute();

            echo '<script>alert("Hotel added successfully."); window.location.href = "../admin/hotellist.php";</script>';
        } else {
            echo '<script>alert("Failed to add hotel. Please try again."); window.location.href = "../admin/addhotel.php";</script>';
        }
}

?>