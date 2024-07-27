<?php

//sort array funtion 

echo "<b>sort array function</b><br>";
// $array = ['phy' => 60 , 'math' => 180 , 'chem' => 99];
$array = ['phy','math' , 'chem'];

sort($array);
print_r($array);   echo "<br>";
for($x = 0; $x < count($array); $x++){
    echo $array[$x] . "&nbsp;";
    echo "<br>";
}
echo "<br><br><br>";


//rsort array function

echo "<b>rsort array function</b> <br>";
$array = ['phy','math' , 'chem'];

rsort($array);
print_r($array);   echo "<br>";
for($x = 0; $x < count($array); $x++){
    echo $array[$x] . "&nbsp;";
    echo "<br>";
}

//ksort array funtion 

echo "<b>ksort array function</b><br>";
$array = ['phy' => 60 , 'math' => 180 , 'chem' => 99];

ksort($array);
print_r($array);   echo "<br>";
foreach($array as $x => $x_value){
    echo $x . " = &nbsp;" . $x_value;
    echo "<br>";
}
echo "<br><br><br>";


//krsort array funtion 

echo "<b>krsort array function</b><br>";
$array = ['phy' => 60 , 'math' => 180 , 'chem' => 99];

krsort($array);
print_r($array);   echo "<br>";
foreach($array as $x => $x_value){
    echo $x . " = &nbsp;" . $x_value;
    echo "<br>";
}
echo "<br><br><br>";


//asort array function 

echo "<b>asort array function</b> <br>";
$fname  = ["Nitish" => 19 , "Raju" =>20 , "Vivek" => 25 , "Rajiv" =>32 , "Omprakash" => 22];
 asort($fname);
 print_r($fname);   echo "<br>";
 foreach($fname as $y => $y_age){
    echo " Student Name - " . $y . "&nbsp;&nbsp; Age - " . $y_age . "<br>";
 }
 echo "<br><br><br>";


//arsort array function 

echo "<b>arsort array function</b> <br>";
$fname  = ["Nitish" => 19 , "Raju" =>20 , "Vivek" => 25 , "Rajiv" =>32 , "Omprakash" => 22];
 arsort($fname);
 print_r($fname);   echo "<br>";
 foreach($fname as $y => $y_age){
    echo " Student Name - " . $y . "&nbsp;&nbsp; Age - " . $y_age . "<br>";
 }
 echo "<br><br><br>";

?>