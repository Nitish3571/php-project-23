<?php

$str1 = "Good morning sir";
$str2 = "My name is <b>Nitish Kumar</b>";
$str3 = "I want to a fronted developer";

//concat string

echo " $str1  <br>  $str2  <br>  $str3 <br>";  

$num1 = 2;
$char1 = 'after';
$char2 = 'years';
echo  "$str1" . "<br>" . "$str2" . "<br>" . " $str3 " . "$char1" . " $num1". " $char2" ;

//length of scale find out

echo "<br>";
echo "$str1" . " Length = ";
echo strlen($str1);

//string reverse function

echo "<br>";
echo strrev($str1);

//word count in string

echo "<br>";
echo str_word_count($str1);

// echo "<br>";
// echo count($str2);

//letter count in string

echo "<br>";
echo strpos($str1, 'sir');

//word replace in string

echo "<br>";
echo str_replace("sir" , "ma'am" , $str1);

$x = 'ahnf(234)';
var_dump($x);

$y = 500.20;
var_dump(is_null($y));
var_dump(is_bool($y));
var_dump(is_numeric($y));
var_dump(is_numeric($x));

//type casting in string
$z = (int)$y;
echo $z.'<br>';

//  a ? b  : c 

//math function in string

echo sqrt(25)."<br>";
echo (min(10,20,2,01,10,0,352,-50,45).'<br>');
echo (max(10,20,2,01,10,0,352,-50,45).'<br>');
echo round(26).'<br>';
echo round(26.78).'<br>';
echo pi().'<br>';
echo abs(-2.6).'<br>';

//constant function in string

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING . '<br>';
$GREETING = 'Hello';
echo GREETING;

//conditional statement 

$x = 6;
if($x>50){
    echo "Number is more then 50";
}
else {
    echo "Number is less then 50";

}

//else if statement 
// if($x>500){
//     echo "Number is more then 50";
// }
// else if{
//     echo "Number is less then 50";

// }
// else if{
//     echo "Number is less then 50";

// }
// else {
//     echo "Number is less then 50";

// }

echo "<br>";
if($x > 5){
    echo "yes";
}
else{
    echo "No";
}
echo "<br><br>";

$test = (  $x > 5 ? 'yes' : 'no' );

$test = (  $x > 5 ? 'yes' : 'no' );

$test = (  $x < 10 ? "true" : ( $a > 15 ? "higher value" : "false" ) );

echo "test = " . $test; echo "<br><br>";


$first = 2;
$second = 3;

$result = 2 ** 3;

var_dump($result);



?>

