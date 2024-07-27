<?php

$severName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'voting';
$tableName = 'registration_master';

$connection =new mysqli($severName , $userName , $password , $dbName);
if ($connection -> connect_error){
    die("connection failed: " . $connection -> connect_error);
}
else{
    ?>
    <script>
        alert("connection successfully");
    </script>
    <?php
}

if(isset($_POST['register'])){
    echo '<pre>';print_r($_POST);
    $name = (!empty($_POST['name']) ? $_POST['name'] : '');
    $mobile_no = (!empty($_POST['mobile_no']) ? $_POST['mobile_no'] : '');
    $password = (!empty($_POST['password']) ? $_POST['password'] : '');
    $cpassword = (!empty($_POST['cpassword']) ? $_POST['cpassword'] : '');
    $address = (!empty($_POST['address']) ? $_POST['address'] : '');
    $role = (!empty($_POST['select']) ? $_POST['select'] : '');
    $photo =(!empty($_FILES['photo']) ? $_FILES['photo'] : '');
    // var_dump($_FILES['$photo']['name']);
    var_dump($photo);
    print_r($photo);
    echo '<pre>';print_r($_FILES);
    
}


// ?>
// <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
// <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
// <script>

// function checkValidation() {

// if ($("[name='student-form']").valid() != true) {
//     return false;
// }

// var name = $.trim($('[name="name"]').val());
// var email = $.trim($('[name="email"]').val());
// var mobile = $.trim($('[name="mobile"]').val());

// $.ajax({
//     url: "http://localhost/learn/javascript/practice/insertAjax-modalBox.php",
//     type: "post",
//     data: {
//         "name": name,
//         "email": email,
//         "mobile": mobile
//     },
//     success: function(response) {
//         console.log("response = " + response);
//         if (response == true) {
//             flag = true;
//         }
//     },
//     error: function(responceError) {

//     }
// });

// if (flag == false) {
//     alert('insert successfully');
//     // include(modalBoxList.php);
// }
// }


// $("[name='student-form']").validate({
// rules: {
//     name: {
//         required: true,
//         minlength: 3,
//         number:false
//     },
//     email: {
//         required: true,
//         email: true
//     },
//     mobile: {
//         required: true,
//         minlength: 10,
//         number: true
//     },
// },
// messages: {
//     name: {
//         required: "Please * fill the field ",
//         minlength: "Please enter atleast 3 charecter",
//         number: "Please only charecters allow."
//     },
//     email: {
//         required: "Please * fill the field ",
//         email: "Please added special charecter like @ "
//     },
//     mobile: {
//         required: "Please * fill the field ",
//         minlength: "Please enter atleast 10 digit password",
//         number: "Please only digit allow."
//     }
// }
// });



// $insertQuery = "insert into $tableName (name , mobile_no , password	 , cpassword , address , photo , role ) VALUES ('$name' , '$mobile_no' , '$password' , '$cpassword' , '$address'  , '$photo' , '$role')";

// if($connection->query($insertQuery) == true){
//     alert('registration successfully');
// }else{
//     alert( "error please try again");
// }
</script>
