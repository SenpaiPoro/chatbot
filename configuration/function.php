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
    $table = preg_replace('/[^a-zA-Z0-9_]/', '', $table);
    $sql = "SELECT * FROM `" . $table . "`";
    $stmt = $connection->prepare($sql);
    if (!$stmt) {
        return false;
    }
    $stmt->execute();
    return $stmt->get_result();
}
?>