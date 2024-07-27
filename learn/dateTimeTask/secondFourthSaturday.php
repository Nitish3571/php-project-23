<?php

// write a function to print all second Saturday and fourth Saturday of given input month ( input would be in "m-Y" Format)

// function secondForthSaturday ($date1 ="Y-m"){
//     $secondSaturday = date("Y-m-d" , strtotime("second saturday Y m" . $date1));
//     $ForthSaturday = date("Y-m-d" , strtotime("fourth saturday Y m" . $date1));
    
//     $x ="Second Saturday - " . $secondSaturday . "<br>" . "Fourth Saturday - " . $ForthSaturday;
//     return $x;
// }

//    $x = secondForthSaturday("2023-04");
//    print_r($x);




function secondFourthSaturday ($date1 , $date2){
    $startdate = date("Y-m-d" , strtotime($date1));
    $lastdate = date("Y-m-d" , strtotime($date2));

    var_dump($startdate);
    var_dump($lastdate);

    $startdate = strtotime($startdate);
    $lastdate = strtotime($lastdate);
    // var_dump($lastdate);die;
    $saturday = [];
    // echo  date("Y-m-d",strtotime("second saturday of".date("Y-m-d","1680912000")));die;
    while($startdate <= $lastdate){
        if (date("N" , $startdate) == 6){
            // var_dump($startdate);die;
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

$x = secondFourthSaturday("02-04-2023" , "30-09-2023");
print_r($x);




echo "<br><br><br>";







// function sunday($date1 ,$date2){
//     $start = date("Y-m-d",strtotime('01-'.$date1));
//     $end = date("Y-m-t",strtotime('01-'.$date2));
// var_dump($start);
// var_dump($end);
//     $start = strtotime($start);
//     $end = strtotime($end);
//     $array = [];
//       while($start <= $end){
// $day = date("N",($start));
// if($day == 6)
// {
//    if(date("Y-m-d",$start) == date("Y-m-d",strtotime("second saturday of".date("Y-m-d",$start))) || date("Y-m-d",$start) == date("Y-m-d",strtotime("fourth saturday of".date("Y-m-d",$start))))
//    {
//       $array[] = date("Y-m-d",$start)."<br>";
//    }

// }
// $start = strtotime("+1 day", $start);
// }
// var_dump($start);
// var_dump($end);
// return $array;
// }
// $date1 ="02-2023";
// $date2 ="06-2023";
// $array1 = sunday($date1,$date2);
// echo "<pre>"; print_r($array1);
// 

?>

