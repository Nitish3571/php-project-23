<?php

class person {
    public $name;
    public $age;

    function setName ($name){
        $this->name = $name;
    }
    function getName (){
        return $this -> name;
    }
    function setAge ($age){
        $this->age = $age;
    }
    function getAge (){
        return $this -> age;
    }
}

$person1 = new person(' ' , ' ');
$person1 -> setName('Nitish');
echo "Person1's Name - " . $person1 -> getName();


/*
$person2 = new person();

$person1 -> setName('Nitish');
$person1 -> setAge(19);
$person2 -> setName('Ram');
$person2 -> setAge(25);
echo "Person1's Name - " . $person1 -> getName();
echo "<br> Person1's Age - " . $person1 -> getAge();
echo "<br><br>";
echo "Person1's Name - " . $person2 -> getName();
echo  "<br> Person1's Age - " . $person2 -> getAge();
*/
?>