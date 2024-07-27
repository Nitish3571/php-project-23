<?php

echo "hello";

//date check validation

var_dump( checkdate(2 , 10 , 2004));

//date add function - day month and year ko existing date me add karne ke liye 

$date = date_create(" 02-12-2023");
date_add($date , date_interval_create_from_date_string("20days , 12months , 2years"));

echo date_format($date , "d-m-y");
// print_r($date);
echo "<br> ";

$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"m-d-Y");

echo "<br> ";
//date create with format 

$date = date_create_from_format("d-m-Y","24-03-2023");
echo date_format($date,"Y-F-d");
var_dump($date);


//date create function  

echo "<br> ";
$date=date_create("2013-03-15");
echo date_format($date,"Y-F-d");

//date set function - date set karta hai
echo "<br> ";

$date = date_create();
date_date_set($date , 2023, 02, 23);
echo date_format($date , "y-m-d");

//date difference  - Find difference between two date 
echo "<br> ";

$date1 = date_create("01-01-2023");
$date2 = date_create("24-04-2023");
$diff = date_diff($date1 , $date2);
echo $diff -> format("%R%a days");
echo "<pre>";
print_r($diff);


echo "<br> ";
echo "<br> ";
//date_parse_from_format 

$date = date_parse_from_format("ddmmyyyy" , 05212023);

print_r($date);

echo "<br> ";
echo "<br> ";
//date parse format - associative array return karta hai 

print_r(date_parse("05-07-2023 12:20:25.5"));


//sunrise and sunset function 
echo "<br> ";
print_r(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
echo (date_sunrise(time() , SUNFUNCS_RET_STRING , 38.4 , -9 , 90 , 1));

echo "<br> ";
//date time set function  - Time set karne ke liye use karte hai

$date = date_create("02-10-2023");
date_time_set($date , 15 , 12 , 30);
echo date_format($date , "Y-m-d H:i:s") ;echo "<br> ";
$date = date_create();
echo date_format($date , "Y-m-d H:i:s") ;

//using date function 

echo "<br> ";
echo date("l");   //current day print 
echo date("w");   // current day numeric value like 1-mon 2-tue
echo date("wday"); 
//getdate function

echo "<br><br><br> ";
$mydate = getdate(date("U"));
echo "weekday = $mydate[weekday] <br> month = $mydate[month] <br> mday = $mydate[mday] <br>  year = $mydate[year] <br> yday = $mydate[yday] <br> mon = $mydate[mon] <br> wday = $mydate[wday] <br> hours = $mydate[hours] <br> minutes = $mydate[minutes] <br> seconds = $mydate[seconds]";

echo "<br><br><br> ";


?>