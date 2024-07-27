<?php

//in array find another array then we are using array intersect function

$a = [2 , 5 , 50 , 62 , 51 , 96 , 85 , 97 , 35];
$b = [2 , 50 , 62 ,1];

echo "<pre>";
$intersect = (array_intersect($a , $b));
print_r($intersect);


//difference find karne ke liye  use array diff function

// echo "<br>";
// print_r(array_diff($a ,$b));
// echo "<br>";
// print_r(array_diff($b ,$a));



?>