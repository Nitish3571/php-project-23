<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Insert any word after any tag then using insertAfter</h3>
    <button>click</button>
    <p>Lorem ipsum dolor sit amet. </p>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    //insertAfter element 
    $(document).ready(function(){
        $('button').click(function(){
            $('<span>Hello Guys</span>').insertAfter('p');
        });
    });

// insertBefore element 
    $(document).ready(function(){
        $('button').click(function(){
            $('<span>Hello Guys</span>').insertBefore('p');
        });
    });
</script>
</html>