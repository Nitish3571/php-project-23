<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "form";
$tableName = "form";

$connection = new mysqli($serverName , $userName , $password , $dbName);
if($connection->connect_error){
    die("connection failed" . $connection->connect_error);
}
else{
    echo "connection successfully";
}


?>