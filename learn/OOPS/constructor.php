<?php

// constructor is a special type of variable which is use to automatically calling function and create the object

// $x = 43;
// $y = "Nitish kumar";

// echo "Hello <b> " . $y . "</b> How are you";die;


class car {
    public $carName;
    public $color;

    function  __construct($carName , $color){
        $this-> carName = $carName;
        $this-> color = $color;
    }
    
    function getCarName(){
        return $this -> carName;
    }
    function getColor(){
        return $this -> color;
    }
}

$volvo = new car("valvo" , "red");
var_dump($volvo);

echo "Car Name is <b>" . $volvo -> getCarName() . ". </b> <br>";
echo "Car Color is <b>" . $volvo -> getColor() . ". </b>";









?>