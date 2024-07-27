<?php

class car {
    public $carName;
    public $color;

    function  __construct($carName , $color){
        $this-> carName = $carName;
        $this-> color = $color;
    }
    
    function __destruct()
    {
        echo "Car Name is " . $this -> carName . "<br> Car Color is " . $this -> color ;
    }
}

$volvo = new car("valvo" , "red");









?>