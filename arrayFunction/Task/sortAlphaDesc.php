<?php

//value print in descending order then we are using rsort array function

$name = ["Raju" , "Vivek" , "OmPrakash" , "Aman" , "Monu" , "Dinesh"];

rsort($name);

echo "Value descending order = > <br>";
foreach($name as $value){
    echo "<pre>";
    echo $value; 
}

?>