<?php

echo "<pre>";
print_r(array_map(fn($value): int => $value * 2, range(1, 5)));
 echo "<br><br>";
 
 function square($v)
 {
     return($v*$v);
    }
    echo "<pre>";
    $a = [2 , 3 , 5 ,10 ,20 ,6 ,7];
    print_r(array_map("square" , $a));


    echo "<br><br>";


    function cube($v)
    {
  return($v*$v*$v);
}
echo "<pre>";
$a = [2 , 3 , 5 ,10 ,20 ,6 ,7];
print_r(array_map("cube" , $a));
?>      