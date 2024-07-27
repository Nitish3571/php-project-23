<?php

include("connection.php");
// echo "Welcome TO Insert Page";

// print_r($_POST);

if(isset($_POST)){
    $fname = (!empty($_POST['fname']) ? $_POST['fname'] : '');
    $lname = (!empty($_POST['lname']) ? $_POST['lname'] : '');
    $email = (!empty($_POST['email']) ? $_POST['email'] : '');
    $gender = (!empty($_POST['gender']) ? $_POST['gender'] : '');
    $phone = (!empty($_POST['phone']) ? $_POST['phone'] : '');
    $phoneno = (!empty($_POST['phoneno']) ? $_POST['phoneno'] : '');
    $language = (!empty($_POST['language']) ? implode(',', $_POST['language']) : '');
    $state = (!empty($_POST['state']) ? $_POST['state'] : '');

    $imageArr = [];
    $image = (!empty($_FILES['image']) ? $_FILES['image'] : '');
    var_dump($image);   
    $degination = 'image/';
    $uploadFileName = $_FILES['image']['name'];
    var_dump($uploadFileName);
    $tempName = $_FILES['image']['tmp_name'];

    if(!file_exists($degination)){
        mkdir($degination);
    }
    if(empty($imageArr) == true){
        move_uploaded_file($tempName , $degination.$uploadFileName);
    }

    $insertQuery = "insert into $tableName (fname , lname , email , gender , phone , phoneno , language , state , image) values ('$fname ', '$lname' , '$email' , '$gender ', '$phone' , '$phoneno' ,' $language' , '$state' , '$uploadFileName')";
    
    if($connection -> query($insertQuery) === true){
        echo "Registration successfully";
        header("Location:list.php");
    }
    else{
        echo "please try again".$connection->error;
    }
}

?>