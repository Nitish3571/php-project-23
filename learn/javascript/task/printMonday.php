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
    <h2>Moment</h2>
    <input type="date" name="date_name" id="date" onchange="printMonday();">
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
       <script>
        function printMonday(){
            var date1 = ($("[name='date_name']").val());

            var mon = moment(date1).day('Monday').format('LL');
            console.log(mon);

        }

    </script>
</html>