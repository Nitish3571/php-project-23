<?php

include_once('connection.php');
$deleteQuery = "delete from login_master where id=".$_REQUEST['id'];
if($connection->query($deleteQuery) === true){
    header('location:update.php');
    echo "delete successfully";
}
else{
    echo "delete failed please try again".$connection->error;
}

?>