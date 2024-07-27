<?php
// include("form.php");
$connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');
// $query = "SELECT * from demo_form where id = ' . $_REQUEST["id"]'";
$query =  "select * from demo_form where id = " . $_REQUEST['id'];
$result = mysqli_query($connection, $query) ;
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Record</title>
</head>
<body>
    <div class="form">
        <h1>Update Record</h1>
        <?php
        $status = "";
        if (isset($_POST['register'])) {
            $id = $_GET['id'];
            $firstName = $_REQUEST['first_name'];
            $last_name  = $_REQUEST['last_name'];
            $fatherName = $_REQUEST['father_name'];
            $motherName = $_REQUEST["mother_name"];
            $dateOfBirth = $_REQUEST["date_of_birth"];
            $gender = $_REQUEST["gender"];
            $address = $_REQUEST["address"];
            $hobbies = $_REQUEST["hobbies"];
            $city = $_REQUEST["city"];
            $country = $_REQUEST["country"];

            $update = "UPDATE demo_form SET first_name='" . $firstName . "' , last_name='" . $last_name . "' , father_name='" . $fatherName . "' , mother_name='" . $motherName . "' , date_of_birth='" . $dateOfBirth . "' , gender='" . $gender . "' ,address='" . $address . "' , hobbies='" . $hobbies . "' , city='" . $city . "' ,country='" . $country . "' WHERE id='" . $id . "'";
            $connection-> query($update);
            // mysqli_query($connection, $update) ;
            $status = "Record Updated Successfully. </br></br> <a href='formRecord.php'>View Updated Record</a>";
            echo '<p style="color:#FF0000;">' . $status . '</p>';
        } else {
        ?>
            <div>
                <form  method="post">
                    <fieldset style="margin-left: 30%; margin-right:30%; padding-left: 50px; background-color:limegreen; border: radius 20px;">
                        <h2 style="text-align: center;">Registration Form</h2>
                        <label>First Name</label>
                        <input type="text" name="first_name" value=" <?php echo $row['first_name']; ?>" autofocus required><br><br>
                        <label>Last Name</label>
                        <input type="text" name="last_name"  value='<?php echo $row ['last_name'] ?>' autofocus required><br><br>
                        <label>Father Name</label>
                        <input type="text"  name="father_name"  value='<?php echo $row ['father_name'] ?>' autofocus required><br><br>
                        <label>Mother Name</label>
                        <input type="text" name="mother_name"  value='<?php echo $row ['mother_name'] ?>' autofocus required><br><br>
                        <label>Date of Birth</label>
                        <input type="date" name="date_of_birth"  value='<?php echo $row ['date_of_birth'] ?>' autofocus required><br><br>
                        <label for="" >Gender</label>
                        <input type="radio" name="gender" value="male"  >Male
                        <input type="radio" name="gender" value="female" >Female<br><br>
                        <label>Address</label>
                        <textarea type="text" name="address" value='<?php echo $row ['address'] ?>'  autofocus required></textarea><br><br>
                        <label for="">Hobbies</label>
                        <input type="checkbox" name="hobbies[]" value="Volleyball" >Volleyball
                        <input type="checkbox" name="hobbies[]" value="Chess">Chess
                        <input type="checkbox" name="hobbies[]" value="Cricket">Cricket
                        <input type="checkbox" name="hobbies[]" value="Khokho">Khokho<br><br>
                        <label>City</label>
                        <input type="text"  name="city" value='<?php echo $row ['city'] ?>' autofocus required><br><br>  
                        <label for="country">country</label>
                        <select name="country" id="" >
                            <option value="select">select</option>
                            <option value="India">India</option>
                            <option value="Usa">Usa</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="America">America</option>
                        </select><br><br>  
                        <button name="register" style="text-align: center; margin-left:40%;" >Register</button><br>
                    </fieldset>
                </form>
        <?php } ?>
            </div>
    </div>
</body>
</html>