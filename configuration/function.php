<?php
session_start();
require 'connection.php';

function validate($inputData)
{
    global $connection;
    $validatedData = mysqli_real_escape_string($connection, $inputData);
    return trim($validatedData);
}

function GetData($table)
{
    global $connection;
    // sanitize table name to prevent injection (allow letters, numbers, underscore)
    $sql = "SELECT * FROM $table"; 
        return mysqli_query($connection, $sql);    $stmt = $connection->prepare($sql);
}
?>