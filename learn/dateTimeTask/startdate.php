<?php

//write a function to print start date of given date

// 1st method 

function startDate($myDate){
    $startDate = date_create($myDate);
    $startDate= "First day in month = " . date_format($startDate , "Y-m-01");
    return $startDate;
}
$startDate = startDate("12-01-2023"); echo "<br>";
print_r($startDate);

// echo "<br><br>";
// 2nd method 


function startDatePrint($myDate){
    $startDate = date_create($myDate);
    $startDate1=  "First day in month = " . date("Y-m-01" , strtotime($myDate)) . "<br>";
    return $startDate1;
    
}
$startDate =  startDatePrint("24-05-2022");echo "<br>";
$startDate1 =  startDatePrint("27-08-2022");echo "<br>";
print_r($startDate);
print_r($startDate1);




function secondFourthSaturday ($date1 , $date2){
    $startdate = date("Y-m-d" , strtotime($date1));
    $lastdate = date("Y-m-d" , strtotime($date2));

    var_dump($startdate);
    var_dump($lastdate);

    $startdate = strtotime($startdate);
    $lastdate = strtotime($lastdate);
    $saturday = [];
    // echo  date("Y-m-d",strtotime("second saturday of".date("Y-m-d","1680912000")));die;
    while($startdate <= $lastdate){
        if (date("N" , $startdate) == 6){
            if(date("Y-m-d",$startdate) == date("Y-m-d",strtotime("second saturday of".date("Y-m-d",$startdate))) || date("Y-m-d",$startdate) == date("Y-m-d",strtotime("fourth saturday of".date("Y-m-d",$startdate))))
             {
                echo "<pre>";
                $saturday[] =date("Y-m-d",$startdate)."<br>";
            }
        }
        $startdate = strtotime("+1 day" ,  $startdate);
    }
        return $saturday;
}

 $x = secondFourthSaturday("02-04-2023" , "18-05-2023");
 echo "<pre>"; print_r($x);

?>