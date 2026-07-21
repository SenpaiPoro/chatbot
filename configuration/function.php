<?php
session_start();
require 'dbcon.php';

function validate($inputData)
{
    global $connection;
    $validatedData = mysqli_real_escape_string($connection, $inputData);
    return trim($validatedData);
}


?>