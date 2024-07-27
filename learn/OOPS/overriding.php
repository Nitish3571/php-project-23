<?php

class student {
    public $name;
    public $age;
    function setDetails ($name , $age){
        $this-> name = $name;
        $this -> age = $age;
    }
    function getDatails (){
        echo "Hello Guys";
        return $this->name . $this ->age;
    }
}
class batch extends student{
    function setDetails ($id , $mob){
        $this-> id = $id;
        $this -> mob = $mob;
    }
    function getDatails (){
        return "function is override";
    }
}

$obj = new batch();
$obj -> setDetails("Raj kumar" , 12);
echo $obj -> getDatails();









// $obj = new student();
// $obj -> setDetails("Nitish kumar" , 19);
// echo $obj ->getDatails();









?>