<?php

$a = [["fname" => "Nitish" , "lname" => "Kumar" , "id" => 01 ] , ["fname" => "Raj" , "lname" => "Kumar" , "id" => 20] , ["fname" => "Vivek" , "lname" => "Kumar" , "id" => 02]];

echo "<pre>";
print_r($a);

echo "<br><br><br>";

echo "only last name of all student = " ;
print_r(array_column( $a , "lname" , "id")) ;

echo "<br><br><br>";


$b = ["fname" => "Nitish" , "lname" => "Kumar" , "id" => 01 ];
foreach($b as $x => $x_value){
    echo $x . " => ";
    echo $x_value . "<br><br>";
}

// $curve_names = openssl_get_curve_names();
// print_r($curve_names);


?>