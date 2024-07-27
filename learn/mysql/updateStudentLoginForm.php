<?php

// include('studentDetailsView.php');

$connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');
    // if ($connection->connect_error) {
    //     die("Connection failed: " . $connection->connect_error);
    // }
    // else{
    // echo "Connected successfully";
    // }

    if(isset($_POST['register'])){
        $id = (!empty($_REQUEST['id']) ? $_REQUEST['id'] : '');
        $firstName = (!empty($_POST['first_name'])) ? $_POST['first_name'] : ' ' ;
        $secondName = (!empty($_POST['second_name'])) ? $_POST['second_name'] : ' ' ;
        $lastName = (!empty($_POST['last_name'])) ? $_POST['last_name'] : ' ' ;
        $fatherName= (!empty($_POST['father_name']) ? $_POST['father_name'] : '');
        $motherName = (!empty($_POST['mother_name']) ? $_POST['mother_name'] : '');
        $gender = (!empty($_POST['gender']) ? $_POST['gender'] : '');
        $dateOfBirth = (!empty($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '');	
        $mobile = (!empty($_POST['mobile']) ? $_POST['mobile'] : '');	
        $email = (!empty($_POST['email']) ? $_POST['email'] : '');	
        $address = (!empty($_POST['address']) ? $_POST['address'] : '');	
        $hobbies = (!empty($_POST['hobbies']) ? implode(','  , $_POST['hobbies'] ): '');	
        $city = (!empty($_POST['city']) ? $_POST['city'] : '');	
        $country = (!empty($_POST['country']) ? $_POST['country'] : '');	
    

        $updatequery = "UPDATE student_master SET first_name = '". $firstName ."' , second_name = '". $secondName ."' , last_name = '". $lastName ."' , father_name = '". $fatherName ."' , mother_name = '". $motherName ."' , gender = '". $gender ."' , date_of_birth = '". $dateOfBirth ."' , mobile = '". $mobile ."' , email = '". $email ."' , address = '". $address ."' , hobbies = '". $hobbies ."' , city = '". $city ."' , country = '". $country ."' where id = " .$id;

        if($connection -> query($updatequery) === TRUE){
            ?>
            <script>alert('Record Update successfully')</script>
            <?php
        }
        else{
            echo "error " . $connection->error;
        }
    }
?>

<table border="2">
    <thead>
        <tr>
            <th>Sr_no</th>
            <th>first_name</th>
            <th>second_name</th>
            <th>last_name</th>
            <th>father_name</th>
            <th>mother_name</th>
            <th>gender</th>
            <th>date of birth</th>
            <th>mobile</th>
            <th>email</th>
            <th>Address</th>
            <th>hobbies</th>
            <th>city</th>
            <th>country</th>
            <th>id</th>
        </tr>
    </thead>
    <tbody>
            <?php
                $connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');

                $query = "select * from student_master";
                $result  = $connection->query($query);

                if($result->num_rows > 0){
                    $recordDetails = mysqli_fetch_all($result , MYSQLI_ASSOC);
                    $recordIndex = 1;
                // echo "<pre>";print_r($result);die;
              foreach($recordDetails as $data){
                 ?>
                <tr>
                    <td><?php echo  $recordIndex ?></td>
                    <td><?php echo $data['first_name'] ?></td>
                    <td><?php echo $data['second_name'] ?></td>
                    <td><?php echo $data['last_name'] ?></td>
                    <td><?php echo $data['father_name'] ?></td>
                    <td><?php echo $data['mother_name'] ?></td>
                    <td><?php echo $data['gender'] ?></td>
                    <td><?php echo $data['date_of_birth'] ?></td>
                    <td><?php echo $data['mobile'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['address'] ?></td>
                    <td><?php echo $data['hobbies'] ?></td>
                    <td><?php echo $data['city'] ?></td>
                    <td><?php echo $data['country'] ?></td>
                    <td><?php echo $data['id'] ?></td>
                </tr> 
            <?php    
                 $recordIndex++;    
                }   
            } 
        ?>
    </tbody>
</table>