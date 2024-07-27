<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Convert to second to hour , minute , second</h4>
    <label>Total second:</label>
    <input type='number' name="second" placeholder="enter second"><button onclick="convertToHMS()">click</button><br><br>

    <label>Result :</label>
    <input type="text" name="hms" size="30">
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    function convertToHMS(){
        var second = $('[name="second"]').val();
        var hours = Math.floor(second / 3600);
        var minutes = Math.floor((second % 3600) / 60);
        var restSecond = Math.floor(second % 60);

        var hDisplay = hours > 0 ? ( hours+ " hours: ") : "";
        var mDisplay = minutes > 0 ? ( minutes+ " minutes: ") : "";
        var sDisplay = restSecond > 0 ? ( restSecond+ " seconds: ") : "";

            var result = hDisplay + mDisplay + sDisplay;
            $('[name="hms"]').val(result);  

        return result;
    }
</script>
</html>