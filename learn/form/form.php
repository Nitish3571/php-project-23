<?php


// include 'Login.php';

// if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
//     header('location:list.php');
// }

// if(isset($_POST['login']) && $_POST['login']  == 'login'){
//     $obj->loginData('login_master' , $_POST);
// }

?>

<html>

<head>
    <title>login form</title>
</head>

<body>
    <form action="#" method="post">
        <label>Email</label>
        <input type="email" placeholder="enter eamil id" onchange="checkEmailUnique()" name="email"><br><br>
        <label>password</label>
        <input type="password" placeholder="enter password" name="password"><br><br>
        <button type="button" name="submit" onclick="submitData()">login</button>
    </form>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

    var responseData = false;
    
    function checkEmailUnique() {

        var email = $('[name="email"]').val();

        $.ajax({
            url: "http://localhost/learn/form/ajax.php",
            type: "post",
            data: { "email": email },
            success: function(response) {
                // console.log(response);
                if (response == true) {
                    ($('[name="email"]').html(alert('Email already exist')));
                    responseData = true;
                }
            },
            error: function(responceError) {

            }
        })
    }
   

    function submitData() {

        // console.log(responseData);
        if (responseData == false) {
            console.log("submitData successfully");
        }else{
            ($('[name="email"]').html(alert('Email already exist')));
        }
            
        }
</script>

</html>