<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ea.</p>
    <button id="btn1">Append </button>
    <ol>
        <li>Nitish</li>
        <li>Kishan</li>
        <li>Rajesh</li>
    </ol>
    <button id="btn2">Append list</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    // append ka use kishi element ke last me add karne ke liye use karte hai
    $(document).ready(function(){
        $('#btn1').click(function(){
            $('p').append('<b>Hello guys</b>');
        });
    });


    // append ka use kishi element ke last me add karne ke liye use karte hai
    $(document).ready(function(){
        $('#btn2').click(function(){
            $('ol').append('<li>Raja</li>');
        });
    });
</script>
</html>