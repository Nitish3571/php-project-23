<?php

// header('location:list.php');

if (isset($_POST['register'])) {

    // var_dump($_FILES);die;
    
    $id = (!empty($_POST['id']) ? $_POST['id'] : '');
    $fullName = (!empty($_POST['full_name']) ? $_POST['full_name'] : '');
    $email = (!empty($_POST['email']) ? $_POST['email'] : '');
    $codingInterest = (!empty($_POST['coding_interest']) ? $_POST['coding_interest'] : '');
    $language = (!empty($_POST['language']) ? implode(',', $_POST['language']) : '');
    $semester = (!empty($_POST['semester']) ? $_POST['semester'] : '');

    
    $array = [];
    $profile_pic =(!empty($_FILES['profile_pic']) ? $_FILES['profile_pic'] : '');
    $fileSize = $_FILES['profile_pic']['size'];
    $fileType = $_FILES['profile_pic']['type'];
    var_dump($profile_pic);
    var_dump($fileSize);
    // var_dump($profile_pic);die;

    $desination = 'uploads/';
    $temFile = $_FILES['profile_pic']['tmp_name'];
    $uploadFileName = $_FILES['profile_pic']['name'];
    
    if(!file_exists($desination)){
        mkdir($desination);
    }

    if($fileSize > 2097152){
        $array = 'sorry! file must be excatly 2 MB ';
        die($array);
    }

    if(($fileType != 'jpeg' && $fileType != 'image/png' && $fileType != 'gif' && $fileType != 'jpg')){
        $array = 'file only allow in jpeg or jpg or gif or png';
        die($array);
    }

    if(empty($array)==true){
         move_uploaded_file($temFile , $desination.$uploadFileName);
        // echo "Upload Successfully";
     }else{
        print_r($array);
     }

    // }
        // var_dump($uploadFile);die;
    // if($uploadFile == true){
    //     echo 'upload successfull';
    // }else{
    //     echo 'error please try again...';
    // }
    // die;

    $insertQuery = "INSERT INTO student_form_record (full_name ,  email , coding_interest , language , semester , profile_pic) VALUES('$fullName' , '$email' , '$codingInterest' , '$language' , '$semester' ,'$uploadFileName') ";
    $connection = new mysqli('localhost', 'root', '', 'college_hostal_asoit');

    if ($connection->query($insertQuery) === TRUE) {
?>
        <script>
            alert('Registration successfully')
        </script>
<?php
        header('location:list.php');
    } else {
        echo "Registration failed " . $connection->error;
    }
}


?>