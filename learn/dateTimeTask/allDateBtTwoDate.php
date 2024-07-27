<?php

// <!-- write a function to print all dates between two dates -->

function allDateBetweenTwoDate($date1 = "Y-m" , $date2 = "Y-m" ){
    $startDate = date("Y-m-d" , strtotime( $date1));
    $lastDate = date("Y-m-d" , strtotime( $date2));
    var_dump($date1);  
    var_dump($date2);  

    $startDate = strtotime($startDate);
    $lastDate = strtotime($lastDate);
    $allDaysInMonth = [];
    while($startDate <= $lastDate ){
        echo "<pre>";
        $allDaysInMonth[] = "date - " .date("Y-m-d" , $startDate);
        $startDate = strtotime("+1 day" ,$startDate);
        // $startDate++;
    }
    return $allDaysInMonth;
}
// }
$allDaysInMonth = allDateBetweenTwoDate("1-3-2023" , "20-03-2023"); echo "<br>";
print_r($allDaysInMonth);

?>