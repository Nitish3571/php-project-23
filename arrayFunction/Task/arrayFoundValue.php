<?php

//find specific value in array then using in_array function

$name = ["Raju" , "Vivek" , "Raushan" , "Aman" , "Ram"];

if(in_array("Vivek" , $name)){
    echo "Vivek exist in array <br>";
}
else{
    echo "Vivek Not exist in array <br>";
    }

    print_r(array_search("Vivek" , $name));
?>