<?php


include 'loginPage.php';

if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
    header("location:list.php");    
}

if(isset($_POST['login']) && $_POST['login']  == 'login'){
    $obj->loginData('login_master' , $_POST);
}


?>


<html>
    <head>
        <title>login_page</title>
        <style>
            body{
                background-image: url(https://img.freepik.com/free-photo/gradient-dark-blue-futuristic-digital-background_53876-102619.jpg?size=626&ext=jpg&ga=GA1.2.1405731001.1677003064&semt=ais);
                font-size: 40px;
                color: white;
                font-family: sans-serif;
            background-size: auto;
            }
            fieldset{
                margin: 100px 20%;
                border-radius: 50px;
                background-color: gainsboro;
                background-image: url(https://img.freepik.com/free-vector/login-page-template-glass-style_1017-31854.jpg?w=2000);
            }
            input{
                /* size: 100px; */
                font-size: 40px;
                border-radius: 50px;
            }
            h3{
                font-size: 80px;
                margin: 50px 40px;
                color: blueviolet;
            }
            #submit{
                background-color: blueviolet;
                border: 2px solid blueviolet;
                color: white;
            }
            #submit:hover{
                background-color: blue;
            }
        </style>
    </head>
    <body>
        <center>
            <form action="#" method="post">
                <fieldset>
                    <h3>Login Page</h3>
                    <label for="email">Email Id</label>
                    <input type="email" id="email" name="email" placeholder="Enter email id" onchange="checkEmailUnique()" autofocus require><br><br>
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" placeholder="password" autofocus require><br><br>
                    <input type="submit" value="login" id="submit" name="login">
                </fieldset>
            </form>
        </center>

    </body>

</html>
