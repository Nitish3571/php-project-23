<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'voting';

$connection = new mysqli($serverName , $userName , $password , $dbName);
// if($connection->connect_error){
//     die("connection failed try again!!!" . $connection->connect_error);
// }
// else{
//     echo "connection successfully";
// }

?>