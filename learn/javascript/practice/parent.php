<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container"> div container 
        <div class="body">div body 
            <p>paragraph tag </p>
                <span>Hello Guys</span>
                <p>inside paragraph tag </p>
                <h3>heading 3</h3>
                <small>small tag</small>
            
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('h3').parents().css({"border":"2px solid red"})
    })
</script>

</html>