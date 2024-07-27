<?php

// echo 'hello';

include_once("connection.php");

$flags = false;

    $id = $_POST['id'];
    $name = (!empty($_POST['name']) ? $_POST['name'] : '');
    $email = (!empty($_POST['email']) ? $_POST['email'] : '');
    $mobile = (!empty($_POST['mobile']) ? $_POST['mobile'] : '');

    $update = "UPDATE $tableName SET name='" . $name . "' , email='" . $email . "' , mobile='" . $mobile . "' WHERE id='" . $id . "'";
    if ($connection->query($update) === TRUE) {
        $flags = true;
   }
   else {
        $flags = false;
   }


echo $flags;

?>