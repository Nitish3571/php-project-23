<?php

include('connection.php');

$id = $_REQUEST['dataId'];
var_dump($id);

$flags = false;

$deleteQuery = "delete from $tableName where id='".$id."'";
if($connection->query($deleteQuery) == true){
    $flags = true;
}else{
    $flags = false;
}

echo $flags;


?>