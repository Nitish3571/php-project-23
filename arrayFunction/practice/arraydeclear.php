<?php

//array declearation

//index array decleared

$a = array("red" , "blue" , "black" , "white");
echo "<pre>";
print_r($a);
echo "<br><br>";


$a = ["red" , "blue" , "black" , "white"];
echo "<pre>";
print_r($a);

//loop in index array

for($i = 0; $i < count($a); $i++){
    echo $a[$i] . "<br><br>";

}

// foreach loop print with index 
foreach($a as $x => $x_value){
    echo $x . "= " . $x_value . "<br><br>";
}


//Associative array decleared

$b = array("red" => "15 pice" , "blue" => "10 pice" , "black" => "21 pice" , "white" => "50 pice");
echo "<pre>";
print_r($b);
echo "<br><br>";

$b = ["red" => "15 pice" , "blue" => "10 pice" , "black" => "21 pice" , "white" => "50 pice"];
echo "<pre>";
print_r($b);

//loop in associative array

foreach($b as $x => $x_value){
    echo $x . "= " . $x_value . "<br><br>";
}


//Multidimension array declear

$cars = [["bmw" , 25 , 5] , ["volvo" , 15 , 10] ,["tata" , 50 , 15] ,["landrover" , 30 , 2] ];
echo "<pre>";
print_r($cars);

//1st ways for print 
echo "car_name= "  . $cars[0][0] . " Available= " . $cars[0][1] . " sales= " . $cars[0][2] . "<br>" ;
echo "car_name= "  . $cars[1][0] . " Available= " . $cars[1][1] . " sales= " . $cars[1][2] . "<br>";
echo "car_name= "  . $cars[2][0] . " Available= " . $cars[2][1] . " sales= " . $cars[2][2] . "<br>";


print_r(array_filter($cars));
echo "<br><br>";
print_r(array_filter($a));
echo "<br><br>";
print_r(array_filter($b));
echo "<br><br>";
?>