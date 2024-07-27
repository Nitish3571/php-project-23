

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            background-color:  rgb(251, 197, 49);
        }
        input{
            margin: 10px;
            width: 200px;
            height: 40px;
            color: black;
            background-color: white;
            border-radius: 10px;
            border: 2px solid black;
        }

        button{
            background-color: blue;
            color: white;
            margin-top: 40px;
            margin-bottom: 20px;
            padding: 5px 20px;
            border-radius: 10px;
            border: 2px solid black;
        }
        div{
            border: 2px solid black;
            display: inline;
            padding: 30px 50px;
            margin: 20px;
            width: 50px;
        }
        select{
            padding: 10px 70px;
            background-color: white;
            color: black;
        }
        #add{
            width: 430px;
        }
        button:hover{
            background-color: blueviolet;
            color: black;
        }
        @media only screen and (max-width: 600px) {
           
            input{
                width: 316px;
            }
            #add{
                width: 316px;
            }
            #upload{
                width: 150px;
                height: 30px;
            }
            div{
                border: 2px solid black;
                display: inline;
                padding: 20px 20px;
                margin: -122px;
        }
        select{
            padding: 0px 10px;
            background-color: white;
            color: black;
            width: 150px;
            height: 30px;
            margin-left: 10px;
        }
    }
    
    </style>
</head>
<body>
    <form action="registrationRecord.php" id='votingForm' name="student-form" method="post">
        <center>
            <h1 style="text-align: center;">Online Voting System</h1>
            <hr>
            <h3 style="text-align: center;">Registration</h3>
            <input type="text" placeholder="Name" name="name" required>
            <input type="text" placeholder="Mobile" name="mobile_no" required><br>
            <input type="password" placeholder="password" name="password" required>
            <input type="password" placeholder="Conform password" name="cpassword" required><br>
            <input id="add" type="text" placeholder="Address" name="address" required><br><br><br>
            <div> Upload Image: <input type="file" id='upload'  name="photo"></div><br><br><br>
            <div> Select your role: 
            <select required name="select">
                <option value=" voter" required>voter</option>
                <option value=" admin" required>admin</option>
            </select></div><br>
            <button name="register" onclick="checkValidation()">Register</button><br>
            Already user? <a href="loginpage.php">Login here</a>
        </center>
</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

<script>
    $("#votingForm").validate({
  rules: {
    name: {
      required: true,
      minlength: 3,
      number:false,
    },
    mobile: {
      required: true,
      maxlength: 10,
      number:true
    },
    password:{
        required:true,
        minlength:8
    }
  },
  messages: {
    name: ("Please specify your name (only letters atleast 3 char allowed)"),
    mobile: "Please enter 10 digit number",
    password: "Please enter atleast 8 digit password"
  }
});
</script>
</html>

<?php
//  include("registrationRecord.php");
?>