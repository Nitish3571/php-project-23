<?php

include('student.php');
$studentRecord = $obj->editData('student_form_record');
$language = $studentRecord['language'];
$lang = explode(',', $language);
var_dump($lang);

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
            <button name="update">update</button>
        </fieldset>
    </form>
</body>

</html>