<?php

// write a function to print all date of given date format m-Y

function allDateInGivenMonth($myDate){
    $startDate = date("Y-m-01" , strtotime($myDate));
    $lastDate = date("Y-m-t" , strtotime($startDate));
    var_dump($startDate);  
    var_dump($lastDate);
    
    $startDate = strtotime($startDate);
    $lastDate = strtotime($lastDate);
    $allDates = [];
    while($startDate <= $lastDate){
        echo "<pre>";
        $allDates[] =  date("Y-m-d" , $startDate);
        $startDate = strtotime("+1 day" ,$startDate);
    }
        return $allDates;
}
$printAllDates = allDateInGivenMonth("15-01-2023"); echo "<br>";
$printAllDates2 = allDateInGivenMonth("2-02-2020"); echo "<br>";

print_r($printAllDates);
print_r($printAllDates2);
?>