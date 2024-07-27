<?php

header('studentDetailsView.php');
$connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');

$selectquery = "SELECT * FROM student_master WHERE id = " . $_REQUEST['id'];
$result = $connection -> query($selectquery);

$recordDetails = mysqli_fetch_assoc($result);
$selectHobbie = $recordDetails['hobbies'];
$selectHobbies = explode(',' , $selectHobbie);
// var_dump($recordDetails['gender']);        
// var_dump($selectHobbies);die;


?>

<html>
<head>
    <title>Update form</title>
</head>
<body>
    <form  method="post" action="updateStudentLoginForm.php">
        <h2>Register</h2>
        <input type="hidden" name="id" value="<?php echo $recordDetails['id'] ?>" autofocus required>
        <label>First Name</label>
        <input type="text" name="first_name" value="<?php echo $recordDetails['first_name'] ?>" autofocus required><br><br>
        <label>Second Name</label>
        <input type="text" name="second_name" value="<?php echo $recordDetails['second_name'] ?>" autofocus required><br><br>
        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php echo $recordDetails['last_name'] ?>" autofocus required><br><br>
        <label>Father Name</label>
        <input type="text"  name="father_name" value="<?php echo $recordDetails['father_name'] ?>" autofocus required><br><br>
        <label>Mother Name</label>
        <input type="text" name="mother_name" value="<?php echo $recordDetails['mother_name'] ?>" autofocus required><br><br>
        <label>Gender</label>
        <input type="radio" name="gender" value="male" <?php echo ($recordDetails['gender']=='male' ? 'checked' : '' )?>>male
        <input type="radio" name="gender" value="female"  <?php echo( $recordDetails['gender']=='female' ? 'checked' : '') ?>>female
        <br><br>
        <label>Date of Birth</label>
        <input type="date" name="date_of_birth" value="<?php echo $recordDetails['date_of_birth'] ?>" autofocus required><br><br>
        <label>Mobile</label>
        <input type="text" name="mobile" value="<?php echo $recordDetails['mobile'] ?>" autofocus required><br><br>
        <label>Email Id</label>
        <input type="email" name="email" value="<?php echo $recordDetails['email'] ?>" autofocus required><br><br>
        <label>Address</label><br>
        <textarea name="address" id="" cols="50" rows="5"><?php echo $recordDetails['address'] ?></textarea><br><br>
        <label>Hobbies</label>
        <input type="checkbox" name="hobbies[]" value="cricket" <?php echo in_array('cricket' , $selectHobbies) ? 'checked' : '' ?>>Cricket
        <input type="checkbox" name="hobbies[]" value="volleyball" <?php echo in_array('volleyball' , $selectHobbies) ? 'checked' : ''?>>Volleyball
        <input type="checkbox" name="hobbies[]" value="KhoKho" <?php echo in_array('KhoKho' , $selectHobbies) ? 'checked' : ''?>>KhoKho
        <br><br>
        <label>City</label>
        <input type="text"  name="city" value="<?php echo $recordDetails['city'] ?>" autofocus required><br> <br><br>
        <label for="">country</label>
        <select name="country">
            <option value="select" <?php echo ($recordDetails['country']=='select' ? 'selected' : '' )?>>select</option>
            <option value="india" <?php echo ($recordDetails['country']=='india' ? 'selected' : '' )?>>india</option>
            <option value="usa" <?php echo ($recordDetails['country']=='usa' ? 'selected' : '' )?>>usa</option>
            <option value="uk" <?php echo ($recordDetails['country']=='uk' ? 'selected' : '' )?>>uk</option>
            <option value="pakistan" <?php echo ($recordDetails['country']=='pakistan' ? 'selected' : '' )?>>pakistan</option>
        </select>
        <button name="register">register</button>
    </form>
</body>
</html>
<?php


