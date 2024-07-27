<?php


print_r(range(10 , 20 ,2));

echo "<br>";

// print_r array_combine((range(11 , 15)range(1 , 5)));

$name = ["name" => ["Nitish"] , "Technology" => ["Computer"] , "semester" => ["'2nd"]];
echo "<pre>";
print_r($name);

echo "<br><br>";

$cars = ['volvo' , 'tesla','maruti','BMw','odi','tata'];

echo "<br><br>";
var_dump(array_search('volvo' , $cars));


if(array_search('maruti' , $cars)){
    echo 'match found ';
}
else{
    echo 'match dose not 11 found';
}
?>
