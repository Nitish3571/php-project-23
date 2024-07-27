<?php

// write a program in which print previous month day and next month day 


function previousAndNextMonthDate($date1="Y-m"){
 
    $previousMonthDate = date("Y-m-t" , strtotime(" previous month ".$date1));
    $nextMonthDate = date("Y-m-01" , strtotime("Next month " . $date1));

    $previousNextMonthDay = "previous month day - " . $previousMonthDate . "<br> Next month day - " . $nextMonthDate ;
    var_dump($previousMonthDate);  
    return $previousNextMonthDay;
}
$previousNextMonthDay =  previousAndNextMonthDate("2022-01-12"); echo "<br>";
print_r($previousNextMonthDay);






?>