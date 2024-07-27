<?php

include("connection.php");
// $id = $_POST['id'];
// var_dump($id);
$selectQuery = "select * from $tableName where id=".$_REQUEST['id'];
$result = $connection->query($selectQuery);
$studentRecord = mysqli_fetch_assoc($result);
$language = $studentRecord['language'];
$lang = explode(',' , $language);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: cornflowerblue;
        }
        fieldset{
            margin: 10px 35%;
            background-color: powderblue;
            border-radius: 20px;
        }
        h2{
            text-align: center;
        }
        label{
            text-transform: uppercase;
            font-weight: 20px;
        }
        #btn{
            text-align: center;
            margin-left: 40%;
            text-transform:capitalize;
            background-color: blueviolet;
            color: white;
            padding: 10px;
            border-radius: 20px;
        }
        p{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <fieldset>
        <h2>Registration From</h2>
        <label for="fname">Name:</label>
        <input type="text" id="fname" name="fname" value='<?php echo $studentRecord['fname'] ?>' placeholder="first name">
        <input type="text" id="lname" name="lname" value='<?php echo $studentRecord['lname'] ?>' placeholder="last name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value='<?php echo $studentRecord['email'] ?>' placeholder="abc@example.com"><br><br>
        <label for="gender">Gender:</label>
        <input type="radio" id="gender" name="gender" value='male' <?php echo ($studentRecord['gender'] == 'male' ? 'checked' : '' )?> >male
        <input type="radio" id="gender" name="gender" value="female" <?php echo ($studentRecord['gender'] == 'female' ? 'checked' : '' )?> >female <br><br>
        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" value='<?php echo $studentRecord['phone'] ?>' placeholder="phone no"><br><br>
        <label for="phoneno">Emergency phone no:</label>
        <input type="number" name="phoneno" value='<?php echo $studentRecord['phoneno'] ?>' id="phoneno"><br><br>
        <label for="language">Language:</label>
        <input type="checkbox" name="language[]" value="Hindi" <?php echo in_array('Hindi', $lang) ? 'checked' : '' ?>  >Hindi
        <input type="checkbox" name="language[]" value="English" <?php echo in_array('English', $lang) ? 'checked' : '' ?> >English
        <input type="checkbox" name="language[]" value="Gujrati" <?php echo in_array('Gujrati', $lang) ? 'checked' : '' ?> >Gujrati <br><br>
        <label for="">State:</label>
        <select name="state" id="">
            <option value="0" <?php echo ($studentRecord['state'] == '0' ? 'selected' : '' )?> >select</option>
            <option value="1" <?php echo ($studentRecord['state'] == '1' ? 'selected' : '' )?> >Bihar</option>
            <option value="2" <?php echo ($studentRecord['state'] == '2' ? 'selected' : '' )?> >Jharkhand</option>
            <option value="3" <?php echo ($studentRecord['state'] == '3' ? 'selected' : '' )?> >Gujrat</option>
            <option value="4" <?php echo ($studentRecord['state'] == '4' ? 'selected' : '' )?> >Bangal</option>
        </select><br><br>
        <label for="image" >Image:</label>
        <input type="file" name="image"><br><br>
        <label for="">Instraction:</label>
        <p> <input type="checkbox"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nisi voluptatem porro quo officia eius natus suscipit voluptatibus placeat illo!</p>
        <input id="btn" type="submit" value="register">
        </fieldset>
    </form>

</body>
</html>