<?php

// <!-- write a function to print all sunday in a month -->
function allSundayInMonth($date1){
    $startDate = date("Y-m-01" , strtotime($date1));
    $lastDate = date("Y-m-t" , strtotime($startDate));
    var_dump($startDate);  
    var_dump($lastDate);  

    $startDate = strtotime($startDate);
    $lastDate = strtotime($lastDate);
    $allSunday = [];
    while($startDate <= $lastDate){
        if(date('N' , $startDate) == 7){
            echo "<pre>";
             $allSunday[] = "sunday - " . date("Y-m-d" , $startDate);
        }
        $startDate = strtotime("+1 day" , $startDate);
    }
             return $allSunday;
}
$allSunday =  allSundayInMonth("15-09-2016"); echo "<br>";
print_r($allSunday)
?>

