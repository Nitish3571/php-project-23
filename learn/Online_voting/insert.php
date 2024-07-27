<?php
include('connection.php');

if(isset($_POST['submit'])){
    $email = (!empty($_POST['email']) ? $_POST['email'] : '');
    $password = (!empty($_POST['password']) ? $_POST['password'] : '');

    $insertQuery = "insert into login_master (email , password) values('$email' , '$password')";
    if($connection->query($insertQuery) === true){
        // var_dump($email);die;
        echo "login successfully";
        header("location:list.php");
    }
    else{
        echo "login failed" . $connection->error;
    }
}

?>