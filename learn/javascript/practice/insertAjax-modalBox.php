<?php

echo "<pre>";print_r($_POST);
include('connection.php');
$flags = false;
// echo $flags;


// if(isset($_POST)){
    // echo "<pre>";print_r($_POST);
    $name = (!empty($_POST['name']) ? $_POST['name'] : '');
    $email = (!empty($_POST['email']) ? $_POST['email'] : '');
    $mobile = (!empty($_POST['mobile']) ? $_POST['mobile'] : '');

    $insertQuery = "insert into $tableName (name , email , mobile) values('$name' , '$email' , '$mobile')";
    if($connection->query($insertQuery) === true){
        $flags = true;
        // echo 'hello';
    }else{
        $flags = false;
        // echo 'hello';
    }
// }
echo $flags;
?>



