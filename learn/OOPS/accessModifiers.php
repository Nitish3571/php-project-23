<?php


class person {
    public $name ;
    public $age ;

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
// var_dump($person);die;

$student = new person('' , '');
$teacher = new person('' , '');

$student -> setName('Nitish');
$student -> setAge(19);
$teacher -> setName('Ram');
$teacher -> setAge(25);

echo $student -> getName() . " - ";
echo $student -> getAge();

?>