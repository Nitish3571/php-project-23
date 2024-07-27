<?php


include 'Login.php';

if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
    header('location:list.php');
}

if(isset($_POST['login']) && $_POST['login']  == 'login'){
    $obj->loginData('login_master' , $_POST);
}

?>

<html>
    <head>
        <title>login form</title>
    </head>
    <body>
        <form action="#" method="post">
            <label>Email</label>
            <input type="email" placeholder="enter eamil id" name="email" ><br><br>
            <label>password</label>
            <input type="password" placeholder="enter password" name="password" ><br><br>
            <!-- <label>role</label>
            <select name="role">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select><br><br> -->
            <input type="submit" value="login" name="login">
        </form>
    </body>

</html>