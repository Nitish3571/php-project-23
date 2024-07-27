<?php

class student {
    public $name;
    public $age;
    function setDetails($name ,$age){
        $this -> name =$name;
        $this -> age = $age;
    }    
    public static function getDetails(){
        echo  "This is a static function";
    }
}










?>