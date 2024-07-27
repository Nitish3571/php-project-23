<?php

if(isset($_POST['login'])){
        $mobileNo = (!empty($_POST['mobile_no']) ? $_POST['mobile_no'] : '');
        $password1 = (!empty($_POST['password']) ? $_POST['password'] : '');
        $select = (!empty($_POST['select_voter']) ? $_POST['select_voter'] : '');
        $ip = "210:0:0:1";
        $created_id = 250;
        $query = "INSERT INTO login_data(mobile_no , password , select_voter , created_id , ip) VALUES ('$mobileNo' , '$password1' , '$select' , '$created_id' , '$ip')";
        $connection = new mysqli('localhost' , 'root' , '' , 'voting');
    if ($connection -> query($query) == TRUE){
        ?>
        <script>
            alert("Registration successfully");
        </script>
        <?php
    }
    else{
        echo 'error !!'.$connection->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <style>
            *{
                font-family: Arial, Helvetica, sans-serif;
                background-color: rgb(251, 197, 49);
            }

            h1{
                margin: 30px 0px;
            }
            h2{
                margin: 20px 0px;
            }
            input,select{
                margin: 10px;
                width: 200px;
                height: 30px;
                color: black;
                background-color: white;
                border-radius: 10px;
                border: 2px solid black;
            }
            button{
                background-color: blue;
                color: white;
                margin: 20px 0px;
                padding: 5px 20px;
                border-radius: 10px;
                border: 2px solid black;
            }
            button:hover{
                background-color: blueviolet;
                color: rgb(215, 184, 184);
            }

        </style>
    </head>
    <body>
        <form action="" method="post">
            <center>
                <h1>Online voting system</h1>
                <hr>
                <h2>Login</h2>
                <input type="text" placeholder="Enter Mobile No" name="mobile_no" required><br>
                <input type="password" placeholder="Enter password" name="password" required><br>
                <select name="select_voter" id="" required><br>
                    <option value="Voter" >Voter</option>
                    <option value="Admin" >Admin</option>
                </select><br>
                <button name="login" type="submit"> Login</button><br>
                New user? <a href="Registration_page.html">Register here</a>
            </center>
        </form>
    </body>
</html>