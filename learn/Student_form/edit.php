<?php

$connection = new mysqli('localhost', 'root', '', 'college_hostal_asoit');

$selectQuery = "SELECT * FROM student_form_record WHERE id = " . $_REQUEST['id'];
$result = $connection->query($selectQuery);
// $result = mysqli_query($connection, $selectQuery) ;
$studentRecord = mysqli_fetch_assoc($result);
// var_dump($studentRecord);die;

$language = $studentRecord['language'];
$lang = explode(',', $language);

// var_dump($studentRecord['profile_pic']);die;
// echo $language;


?>

<html>
<head>
    <title>student_login_form</title>
    <style>
        body {
            margin-top: 50px;
            background-color: blueviolet;
        }

        fieldset {
            background-color: dimgrey;
            margin-left: 30%;
            margin-right: 30%;
        }
    </style>
</head>
<body>
    <form action="update.php" method="post">
        <fieldset>
            <h2 style="text-align: center;">Student Registration Form</h2>
            <input type="hidden" name="id" value="<?php echo $studentRecord['id'] ?>" autofocus required>
            <label>Full Name</label>
            <input type="text" name="full_name" placeholder="Enter full name" value="<?php echo $studentRecord['full_name'] ?>"><br><br>
            <label>Email Id</label>
            <input type="text" name="email" placeholder="Enter email id" value="<?php echo $studentRecord['email'] ?>"><br><br>
            <label>Coding Interest</label>
            <input type="radio" name="coding_interest" value="Yes" <?php echo (($studentRecord['coding_interest'] == 'Yes' ? 'checked' : ''))  ?>> Yes
            <input type="radio" name="coding_interest" value="No" <?php echo (($studentRecord['coding_interest'] == 'No' ? 'checked' : ''))  ?>> No
            <br><br>
            <label>Language Know</label>
            <input type="checkbox" name="language[]"  <?php echo in_array('English', $lang) ? 'checked' : ''  ?> value="English"> English
            <input type="checkbox" name="language[]"  <?php echo in_array('Hindi', $lang) ? 'checked' : '' ?> value="Hindi"> Hindi
            <input type="checkbox" name="language[]" <?php echo in_array('Gujrati', $lang)  ? 'checked' : ''  ?> value="Gujrati" > Gujrati
            <br><br>
            <label>Semester</label>
            <select name="semester">
                <option value="select" <?php echo (($studentRecord['semester'] == 'select' ? 'selected' : '')) ?>>select</option>
                <option value="sem-1" <?php echo (($studentRecord['semester'] == 'sem-1' ? 'selected' : '')) ?>>sem-1</option>
                <option value="sem-2" <?php echo (($studentRecord['semester'] == 'sem-2' ? 'selected' : '')) ?>>sem-2</option>
                <option value="sem-3" <?php echo (($studentRecord['semester'] == 'sem-3' ? 'selected' : '')) ?>>sem-3</option>
                <option value="sem-4" <?php echo (($studentRecord['semester'] == 'sem-4' ? 'selected' : '')) ?>>sem-4</option>
            </select><br><br>
            <label>Profile_pic</label>
            <input type="file" name="profile_pic" >
            <?php
            $image =  'http://localhost/learn/Student_form/uploads/' . $studentRecord['profile_pic'];
            echo ($studentRecord['profile_pic']);
            ?>
            <img height="40px" width="40px" src=" <?php echo $image ?> ">
            <button name="register">register</button>

        </fieldset>
    </form>
</body>

</html>