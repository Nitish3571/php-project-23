<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sendEmail.php" method="post">
    <h2>Sending Email messages</h2>
    <label>Full Name</label>
    <input type="text" placeholder="Enter full name" name="fname"><br><br>
    <label>Message</label><br>
    <textarea name="message" cols="50" rows="10"></textarea><br><br>
    <button name="submit">send</button>
    </form>
</body>
</html>