<?php

class person {
    public $name;
    public $age;

    public function __construct($name ,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getInfo (){
        echo "Person Name <b>" . $this -> name . "</b> <br> Age - " . $this -> age;
    }
}

class getMessage extends person {
    public function sentMessage (){
        echo "<br> He is a good person.";
    }
}


$getMessage = new getMessage("Nitish kumar" , 20);
$getMessage -> getInfo();
$getMessage -> sentMessage();
var_dump($getMessage instanceof getMessage);









?>