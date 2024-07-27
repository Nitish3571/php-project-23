<?php

include('insertForm.php');

?>
<html>
<head>
    <title>Registration form</title>
</head>
<body style="background-color: cornflowerblue;">
    <form  method="post">
            <fieldset style="margin-left: 30%; margin-right:30%; padding-left: 50px; background-color:limegreen; border: radius 20px;">
                <h2 style="text-align: center;">Registration Form</h2>
                <label>First Name</label>
                <input type="text" name="first_name" autofocus required><br><br>
                <label>Last Name</label>
                <input type="text" name="last_name" autofocus required><br><br>
                <label>Father Name</label>
                <input type="text"  name="father_name" autofocus required><br><br>
                <label>Mother Name</label>
                <input type="text" name="mother_name" autofocus required><br><br>
                <label>Date of Birth</label>
                <input type="date" name="date_of_birth" autofocus required><br><br>
                <label for="">Gender</label>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female<br><br>
                <label>Address</label>
                <textarea type="text" name="address" autofocus required></textarea><br><br>
                <label for="">Hobbies</label>
                <input type="checkbox" name="hobbies[]" value="Volleyball" >Volleyball
                <input type="checkbox" name="hobbies[]" value="Chess">Chess
                <input type="checkbox" name="hobbies[]" value="Cricket">Cricket
                <input type="checkbox" name="hobbies[]" value="Khokho">Khokho<br><br>
                <label>City</label>
                <input type="text"  name="city" autofocus required><br><br>  
                <label for="country">country</label>
                <select name="country" id="">
                    <option value="select">select</option>
                    <option value="India">India</option>
                    <option value="Usa">Usa</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="America">America</option>
                </select><br><br>  
                <button name="register" style="text-align: center; margin-left:40%;" >Register</button><br>
                <a href="formData.php">View Registration successfully</a>

            </fieldset>
        </form>
</body>
</html>