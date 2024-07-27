<?php 
if(isset($_POST['submit'])){
	$firstName = (!empty($_POST['first_name']) ? $_POST['first_name'] : '');
	$lastName = (!empty($_POST['last_name']) ? $_POST['last_name'] : '');
	$email= (!empty($_POST['email']) ? $_POST['email'] : '');
	$userName= (!empty($_POST['username']) ? $_POST['username'] : '');
	$password = (!empty($_POST['password']) ? $_POST['password'] : '');
	$conform_password = (!empty($_POST['conform_password']) ? $_POST['conform_password'] : '');	
	// $country = (!empty($_POST['country']) ? $_POST['country'] : '');
	// $hobby = (!empty($_POST['hobby']) ? implode("," ,  $_POST['hobby'] ) : '');	
	// var_dump($firstName);echo  "<br><br>";
	// var_dump($lastName);echo  "<br><br>";
	// var_dump($email);echo  "<br><br>";
	// var_dump($password);echo  "<br><br>";
	// var_dump($gender);echo  "<br><br>";
	// var_dump($country);echo  "<br><br>";
	// var_dump($hobby);echo  "<br><br>";
	//var_dump($firstName);echo  "<br><br>";
	$ip = "::1";
	$createId = 999;
	$createdAt = date('Y-m-d H:i:s');
	$query =  " Insert Into registration_details ( first_name , last_name , email , username , password , conform_password , ip , create_id , created_at   ) values ( '$firstName' , '$lastName' , '$email' , '$userName' , '$password' , '$conform_password' , '$ip' , '$createId' , '$createdAt'  ) ";
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "college_hostal_asoit";

	$connection = new mysqli($serverName , $userName , $password , $dbName);
	if ($connection->query($query) === TRUE) {
        ?>
        <script>
            alert("inserted successfully");
        </script>
        <?php
	} 
    else {
		echo $connection->error . "<br><br><br><br>";
		echo "error while insert record";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>
        body{
            background-color: blueviolet;
            color: white;
        }
        h1,h2{
        text-align: center;   
        font-size: 50px; 
        margin-top: 0px;
        }
        fieldset{
            margin-left: 30%;
            margin-right: 32%;
            font-size: 20px;
            background-color: white;
            color: black;
            border: none;

        }
        a{
            text-decoration: none;
            margin-left: 40px;
        }
        button{
            size: 50px;
            padding: 7px 260px;
            margin-left: 40px;
            font-size: 20px;
            margin-bottom: 20px;
            background-color: blue;
            color: white;
            border-radius: 20px;
        }
        button:hover{
            background-color: cornflowerblue;
        }
        input{
            margin-bottom: 20px;
            height: 30px;
            size: 70px;
            margin-left: 40px;
        }
        div{
            margin-left: 40px;
        }
    </style>
</head>
<body>
    <form  method="post">
        <h1>WELCOME TO BAELDUNG</h1>
        <fieldset>
            <h2>Register</h2>
            <div>First Name</div>
            <input type="text" size="80px" name="first_name" autofocus>
            <div>Last Name</div>
            <input type="text" size="80px" name="last_name" autofocus>
            <div>Email</div>
            <input type="email" size="80px" name="email" autofocus>
            <div>Username</div>
            <input type="text" size="80px" name="username" autofocus>
            <div>Enter Password</div>
            <input type="password" size="80px" name="password" autofocus>
            <div>Conform Password</div>
            <input type="password" size="80px" name="conform_password" autofocus><br>
            <a href="http://127.0.0.1:5500/HTML/login_form.html?user=duhfud&password=ehf0ijfop#">Back to Login</a><br><br>
            <a href="regDataTableForm.php" target="_blank">view to data</a><br><br>
            <button name="submit">Register</button>
        </fieldset>
    </form>
</body>
</html>



