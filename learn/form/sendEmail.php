<?php

// echo "Hello";

ini_set("SMTP","localhost");
ini_set("smtp_port","25");
ini_set("sendmail_from","00000@gmail.com");
ini_set("sendmail_path", "C:\wamp\bin\sendmail.exe -t");
echo "<pre>";
$message = print_r($_REQUEST);
// $message = $_REQUEST;
mail('nitishkumar4042004@gmail.com' , 'MyMessage' , $message);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>send message successfully on email </h2>
    <p>thanks you!</p>
</body>
</html>