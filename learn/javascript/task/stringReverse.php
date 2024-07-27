<?php


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
    <p id="demo"></p>
    <label>String</label>
    <input type="text" placeholder="input string" name="string"><button onclick="stringReverse()">Reverse</button><br><br>
    <label>Reverse String</label>
    <input type="text" placeholder="reverse string" name="reverseString">
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

    function stringReverse() {
        var str = $('[name="string"]').val();
        var stringSplit = str.split(" ");
        var stringReverse = stringSplit.reverse();
        var joinStr = stringReverse.join(" ");

        $('[name="reverseString"]').val(joinStr);
        return joinStr;
    }
// var arr = 'Hello Guys How Are You?';
// console.log(stringReverse('Hello Guys How Are You?'));



</script>

</html>