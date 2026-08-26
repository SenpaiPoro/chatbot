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
    $sql = "SELECT * FROM $table"; 
        return mysqli_query($connection, $sql);  
}

function checkId($paramType){

    if(isset($_GET[$paramType]))
    {
        if($_GET[$paramType] != null){
            return $_GET[$paramType];
        }else{
            return 'Id Not Found';
        }
    }else{
        return 'No Id Given';
    }
}

?>