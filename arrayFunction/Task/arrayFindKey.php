<?php

//search key in array using value of array   then we are using array_search function

$name = ["Raju" => 20, "Vivek" => 50 , "Monu" => 600, "Aman" => 402, "OmPrakash" => 200];
echo "<pre>";


print_r( array_search("50" , $name));
echo " <br>";
// print_r( array_count_values( $name)) ;


$name = ["Raju" , "Vivek", "Ram" , "Raushan" , "Aman" , "Ram"];
echo "<pre>";
print_r( array_search("Ram" , $name)) ;
print_r( array_count_values( $name)) ;


foreach (range(0, 100, 2) as $number) {
    echo $number;
}
?>