<?php


?>

<html>
    <head>
        <title>welcome to moment js</title>
    </head>
    <body>
        <h2>Moment</h2>
        <input type="date" name="date_name" id="date" onchange="dateChange();">

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
       <script>
        function dateChange(){
            var date1 = ($("[name='date_name']").val());
            // var date =  (moment().subtract(1 , day));
            console.log('Previous date = ' + moment(date1).subtract(1, 'days').format('LL'));
            console.log('Start date = ' + moment(date1).startOf('month').format('LL'));
            console.log( 'End date = ' + moment(date1).endOf('month').format('LL'));
            console.log( 'weekday date Monday = ' + moment(date1).day('Monday').format('LLLL'));
            // console.log( 'weekday date all Monday =' + moment(date1).weekday('Monday').format('LLLL'));
            // console.log( 'weekday date all Monday =' + moment(date1).date('Monday').format('LLLL'));
            // moment().weekday('Monday');
        }
    </script>
</html>