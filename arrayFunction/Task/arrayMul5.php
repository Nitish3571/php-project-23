<?php

//In array all value multiply by 5   =  then using array map function

function multiply($value){
    return ($value*5);
};

$a = [1 , 2 , 3 , 4 , 5 , 6];
echo "<pre>";
print_r(array_map("multiply" , $a)) ;




?>