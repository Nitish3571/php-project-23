<?php

// include('studentDetailsView.php');
header('updateStudentLoginForm.php');

$connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    else{
    echo "Connected successfully";
    }

    $deletequery = "DELETE FROM student_master where id=".$_REQUEST['id'];
        if($connection -> query($deletequery) === TRUE){
            ?>
            <script>alert('Record Deleted successfully')</script>
            <?php
        }
        else{
            echo "error " . $connection->error;
        }

    
?>

