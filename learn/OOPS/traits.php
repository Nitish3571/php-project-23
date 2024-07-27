<?php

trait message{
    public function msg(){
        echo "Hello Guys ";
    }
}   

trait message1{
    public function msg1(){
        echo "How are you?";
    }
}   
class welcome {
    use message , message1;
}
$obj = new welcome();
$obj -> msg();
$obj -> msg1();

// inside the die we can passed message 
die("further code will be not executed");


SELECT sm.student_name , msk.marks ,sub.subject_name , cm.class_name FROM student_master AS sm
	JOIN marks_master as msk ON msk.student_id=sm.id 
	JOIN subject_master as sub ON sub.id=msk.subject_id
	JOIN class_master as cm ON sm.class_id= cm.id 
	WHERE sub.subject_name IN('Maths' , 'Science') AND msk.marks>35 AND cm.class_name IN ('1st' , '2nd');



    SELECT sm.student_name , msk.marks ,sub.subject_name , cm.class_name FROM student_master AS sm 
	JOIN marks_master as msk ON msk.student_id=sm.id 
	JOIN subject_master as sub ON sub.id=msk.subject_id 
	JOIN class_master as cm ON sm.class_id= cm.id 
	WHERE sub.subject_name IN('Maths' , 'Hindi') AND msk.marks<35 AND cm.class_name IN ('1st' , '3rd');






?>