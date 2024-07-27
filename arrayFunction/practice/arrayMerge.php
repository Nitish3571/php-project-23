<?php

$a = array("red" , "blue" , "black" , "white");
$b = array("shirt" , "pant" , "blezer" , "cap");
echo "<pre>";
print_r(array_merge($a , $b));


echo "<br><br><br><br>";

$x = array("red" => "15 pice" , "blue" => "10 pice" , "black" => "21 pice" , "white" => "50 pice");
$y = array("pant" => "15 pice" , "shirt" => "10 pice" , "blezer" => "21 pice" , "cap" => "50 pice");
$z = array("jkhg" => "15 pice" , "jh" => "10 pice" , "oijh" => "21 pice" , "calpp" => "50 pice");
echo "<pre>";
print_r(array_merge($x , $y , $z));




?>