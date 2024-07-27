<?php

include("connection.php");

$deleteQuery = "delete from $tableName where id=".$_REQUEST['id'];
$result = $connection->query($deleteQuery);
if($result == true){
    echo "delete successfully";
}else{
    echo "please try again".$connection->error;
}

?>