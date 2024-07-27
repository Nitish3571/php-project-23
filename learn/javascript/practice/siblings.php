<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="find">
        <div>
            <p>paragraph 1</p>
            <h2>heading 2</h2>
            <h4>heading 4</h4>
            <p>p (child)
    <span>span (grandchild)</span>   
  </p>
            <p>paragraph 2</p>
            <span>span tag</span>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    // //siblings se selected all element in parent element 
    // $(document).ready(function(){
    //     $('h4').siblings().css({"color": "red", "border": "2px solid red"});
    // });

    // //siblings se selected only next element in parent element 
    // $(document).ready(function(){
    //     $('h4').next().css({"color": "red", "border": "2px solid red"});
    // });

    // //siblings se selected next all element in parent element 
    // $(document).ready(function(){
    //     $('h4').nextAll().css({"color": "red", "border": "2px solid red"});
    // });

    //siblings se selected range between two element in parent element 
    $(document).ready(function(){
        $('h4').nextUntil('span').css({"color": "red", "border": "2px solid red"});
    });
</script>
</html>