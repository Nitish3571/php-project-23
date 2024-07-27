<?php

// write a function to print end date of given date

// 1st method 

function endDateGiveMonth($myDate){
    $newArray = date_create($myDate);
    $newArray = "last day in month = " . date_format($newArray , "Y-m-t") . "<br>";
    return $newArray;
}
$endDate = endDateGiveMonth("12-01-2023"); 
$endDate2 = endDateGiveMonth("15-03-2020"); 
print_r($endDate);
print_r($endDate2);

echo "<br><br>";
   // 2nd method 

function endDateGivenMonth($myDate){
    $newArray = date_create($myDate);
    $newArray = "last day in month = " . date("Y-m-t" , strtotime($myDate)) . "<br>";
    return $newArray;
}

$endDate3 = endDateGivenMonth("20-6-2007");
$endDate4 = endDateGivenMonth("02-9-2023"); 
$endDate5 = endDateGivenMonth("15-09-2021"); 

print_r($endDate3);
print_r($endDate4);
print_r($endDate5);



?>