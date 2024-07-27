<?php

if(isset($_POST['register'])){
    $firstName = (!empty($_POST['first_name'])) ? $_POST['first_name'] : ' ' ;
    $lastName = (!empty($_POST['last_name'])) ? $_POST['last_name'] : ' ' ;
    $fatherName= (!empty($_POST['father_name']) ? $_POST['father_name'] : '');
	$motherName = (!empty($_POST['mother_name']) ? $_POST['mother_name'] : '');
	$dateOfBirth = (!empty($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '');	
    $gender = (!empty($_POST['gender'])) ? $_POST['gender'] : ' ' ;
	$address = (!empty($_POST['address']) ? $_POST['address'] : '');	
	$hobbies = (!empty($_POST['hobbies']) ? implode(',' , $_POST['hobbies']) : '');	
	// $hobbies = (!empty($_POST['hobbies']) ?  $_POST['hobbies']: '');	
	$city = (!empty($_POST['city']) ? $_POST['city'] : '');	
	$country = (!empty($_POST['country']) ? $_POST['country'] : '');
    
    // var_dump($hobbies);die;
  
    $query =  " INSERT INTO  demo_form ( first_name , last_name , father_name , mother_name , date_of_birth , gender , address , hobbies , city , country) values ( '$firstName' , '$lastName' , '$fatherName' , '$motherName' , '$dateOfBirth'  , '$gender', '$address' , '$hobbies' , '$city' , '$country')";

    $connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');

    if ($connection->query($query) === TRUE){
        ?>
        <script>
            alert( "Resistration successfully");
        </script>
        <?php
    }
    else{
        echo "connection failed " . $connection-> error;
    }
}

?>