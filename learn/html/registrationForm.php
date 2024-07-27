<?php




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
    <form action="studentDetails.php" method="post">
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

            <button>Register</button>

        </fieldset>
    </form>
</body>
</html>


