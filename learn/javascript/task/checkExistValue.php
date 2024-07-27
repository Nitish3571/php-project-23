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
    <p>Welcome to js</p>
    <input type="text" placeholder="Enter any name" name='arrName' ><button onclick="checkArrayValueExist()">checkValue</button>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

    function checkArrayValueExist(){
        const array = ['Nitish' , 'kishan' , 'vivek' , 'Rana'];
        var arr = $("[name='arrName']").val();
        // for(let x in array){
        //     if(array[x] == arr){
        //         console.log('value exist inside array');
        //         return 0;
        //     }
        //     // else{
        //     //     console.log('value not exist inside array');
        //     //     return 0;
        //     // }
        // }

        // var arr = 'Nitish';
        var checkValueInsideExist = array.includes(arr);
        // // var checkValueInsideExist = in_array( 'Niitsh' , array );
        console.log(checkValueInsideExist);
        return checkValueInsideExist;
    }
    console.log(checkArrayValueExist(arr));



</script>

</html>