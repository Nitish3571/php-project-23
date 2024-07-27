<?php
    header('studentDetailsView.php');

if(isset($_POST['register'])){
    $firstName = (!empty($_POST['first_name'])) ? $_POST['first_name'] : ' ' ;
    $secondName = (!empty($_POST['second_name'])) ? $_POST['second_name'] : ' ' ;
    $lastName = (!empty($_POST['last_name'])) ? $_POST['last_name'] : ' ' ;
    $fatherName= (!empty($_POST['father_name']) ? $_POST['father_name'] : '');
	$motherName = (!empty($_POST['mother_name']) ? $_POST['mother_name'] : '');
	$gender = (!empty($_POST['gender']) ? $_POST['gender'] : '');
	$dateOfBirth = (!empty($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '');
	$mobile = (!empty($_POST['mobile']) ? $_POST['mobile'] : '');
	$email = (!empty($_POST['email']) ? $_POST['email'] : '');
    
    $query = "select * from student_master WHERE email= '{$_POST['email']}'";
                $result  = $connection->query($query);
                // var_dump($result);die;
    $checkEmailDatabase = mysqli_fetch_assoc($dateOfBirth);
    if($checkdatabase  )
    
	$address = (!empty($_POST['address']) ? $_POST['address'] : '');	
	$hobbies = (!empty($_POST['hobbies']) ? implode(','  , $_POST['hobbies'] ): '');	
	$city = (!empty($_POST['city']) ? $_POST['city'] : '');	
	$country = (!empty($_POST['country']) ? $_POST['country'] : '');	

$query =  " INSERT INTO student_master ( first_name , second_name , last_name , father_name , mother_name , gender , date_of_birth , mobile , email , address , hobbies , city , country) values ( '$firstName' , '$secondName' , '$lastName' , '$fatherName' , '$motherName' , '$gender' , '$dateOfBirth' , '$mobile' , '$email' , '$address' , '$hobbies' , '$city' , '$country')";

$connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');

if ($connection->query($query) === TRUE){
    ?>
    <script>
        alert('Registration successful');
    </script>
    <?php
}
else{
    echo "connection failed " . $connection-> error;
}
}
?>

<html>
<head>
    <title>Registration form</title>
</head>
<body>
    <form  method="post">
        <h2>Register</h2>
        <label>First Name</label>
        <input type="text" name="first_name" autofocus required><br><br>
        <label>second Name</label>
        <input type="text" name="second_name" autofocus required><br><br>
        <label>Last Name</label>
        <input type="text" name="last_name" autofocus required><br><br>
        <label>Father Name</label>
        <input type="text"  name="father_name" autofocus required><br><br>
        <label>Mother Name</label>
        <input type="text" name="mother_name" autofocus required><br><br>
        <label>Gender</label>
        <input type="radio" name="gender" value="male" >male
        <input type="radio" name="gender" value="female" >female
        <br><br>
        <label>Date of Birth</label>
        <input type="date" name="date_of_birth" autofocus required><br><br>
        <label>Mobile</label>
        <input type="text" name="mobile" autofocus required><br><br>
        <label>Email Id</label>
        <input type="email" name="email" autofocus required><br><br>
        <label>Address</label><br>
        <textarea name="address" id="" cols="50" rows="5"></textarea><br><br>
        <label>Hobbies</label>
        <input type="checkbox" name="hobbies[]" value="cricket" >Cricket
        <input type="checkbox" name="hobbies[]" value="volleyball" >Volleyball
        <input type="checkbox" name="hobbies[]" value="KhoKho" >KhoKho
        <br><br>
        <label>City</label>
        <input type="text"  name="city" autofocus required><br> <br><br>
        <label for="">country</label>
        <select name="country">
            <option value="select" >select</option>
            <option value="india" >india</option>
            <option value="usa" >usa</option>
            <option value="uk" >uk</option>
            <option value="pakistan" >pakistan</option>
        </select>
        <button name="register">Register</button>
    </form>
</body>
</html>


