<?php

$a = ["ram" , "shyam" , "sita" , "ram" , "shyam" , "gita" , 50 ,50 ,50 ,50];
echo '<pre>';
print_r(array_count_values($a));        
echo "<br><br>";


$a = ["ram" , "shyam" , "sita" , "ram" , "shyam" , "gita" , "gita", "gita" ,50 ,50 ,50];
echo '<pre>';
print_r(array_count_values($a));

print_r(array_filter($a));



?>