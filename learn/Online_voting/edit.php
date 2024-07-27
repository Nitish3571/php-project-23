<?php
include_once('connection.php');

$id = $_REQUEST['id'];
$selectQuery = "select * from login_master where id = ". $id;
$result = $connection->query($selectQuery);
$loginRecordDetails = mysqli_fetch_assoc($result);

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
            <form action="update.php" method="post">
                <fieldset>
                    <h3>Login Page</h3>
                    <input type="hidden" name="id" value="<?php echo  $id ?>">
                    <label for="email">Email Id</label>
                    <input type="email" id="email" name="email" placeholder="Enter email id" value="<?php  echo $loginRecordDetails['email']  ?>" autofocus require><br><br>
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" placeholder="password" value="<?php echo $loginRecordDetails['password'] ?>" autofocus require><br><br>
                    <input type="submit" value="update" id="submit" name="update">
                </fieldset>
            </form>
        </center>

    </body>
</html>