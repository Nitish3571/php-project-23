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
    <p>hello</p>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    function removeValue(arr){
        var removeArr = arr.splice(2,1);
        console.log(arr);
        return removeArr;
    }
    var array = ['Nitish' , 'kishan' , 'RanaJee' , 'vishal' , 'Kripanidhi' , 'virat' , 'harsh'];
    console.log(removeValue(array));
</script>
</html>