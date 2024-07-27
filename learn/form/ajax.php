<?php

// echo 'Welcome ajax';
// echo "<pre>";print_r($_REQUEST);

$email = (!empty($_POST['email']) ? $_POST['email'] : '');
// var_dump($email);
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'voting';
$connection = new mysqli($serverName , $userName , $password , $dbName);
// if($connection->connect_error){
//     die('connection failed'.$connection->connect_error);
// }else{
//     echo 'connection successfully';
// }

$flags = false;
$select = "select * from login_master where email='".$email."'";
$result  = $connection->query($select);
if($result){
    if($result->num_rows > 0){
        // $recordDetailsInfo = mysqli_fetch_all($result , MYSQLI_ASSOC);
        // var_dump($recordDetailsInfo);
        // if($recordDetailsInfo['email'] == $email){
        //     $success = true;
        // }
        // echo 'email exists';
        $flags = true;
    }else{
        //if email not exist then insert query 
        // echo 'email not exists';
       $flags = false;
    }
}
echo $flags;

?>