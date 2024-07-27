<?php

include('insert.php');

?>
<html>
<head>
    <title>student_login_form</title>
    <style>
        body {
            margin-top: 50px;
            background-color: aqua;
        }
        fieldset {
            background-color: dimgrey;
            margin-left: 30%;
            margin-right: 30%;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <h2 style="text-align: center;">Student Registration Form</h2>
            <label>Full Name</label>
            <input type="text" name="full_name" placeholder="Enter full name"><br><br>
            <label>Email Id</label>
            <input type="text" name="email" placeholder="Enter email id"><br><br>
            <label>Coding Interest</label>
            <input type="radio" name="coding_interest" value="Yes"> Yes
            <input type="radio" name="coding_interest" value="No"> No
            <br><br>
            <label>Language Know</label>
            <input type="checkbox" name="language[]" value="English"> English
            <input type="checkbox" name="language[]" value="Hindi"> Hindi
            <input type="checkbox" name="language[]" value="Gujrati"> Gujrati
            <br><br>
            <label>Semester</label>
            <select name="semester">
                <option value="select">select</option>
                <option value="sem-1">sem-1</option>
                <option value="sem-2">sem-2</option>
                <option value="sem-3">sem-3</option>
                <option value="sem-4">sem-4</option>
            </select><br><br>
            <label>Profile_pic</label>
            <input type="file" name="profile_pic" >
            <button name="register">Register</button>
        </fieldset>
    </form>
</body>

</html>