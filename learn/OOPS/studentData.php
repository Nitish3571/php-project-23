<?php

include_once('constant.php');
class student {
    public $connection = '';
     
    public function __construct(){

        $connection = new mysqli(SERVER_NAME , USER_NAME , PASSWORD , DB_NAME);
        if($connection->connect_error){
                die("connection failed" . $connection->connect_error);
            }
            else{
                ?>
                <script>alert('connection successfully')</script>
                <?php
            }
        
    }
    public function addForm(){

        include('add-form.php');
    }
    public function insertDataForm(){

        // var_dump($_POST);  
        $insertQuery = "insert into  student_form_record";
        $column = array_pop(($_POST));
        // var_dump($column);
        $column = implode(',' , array_keys($_POST));
        $values = implode("','" , array_values($_POST));
        // var_dump($column);
        // var_dump($values);
        $result = $insertQuery ." ($column) VALUES  ('" . $values ."')";
        // var_dump($result);
        // $insert = "insert into student_form_record (full_name , email , coding_interest , semester) values ('Rana Jee' , 'ranajee@gmail.com' , 'No' , 'sem-5')";
        $connection = new mysqli(SERVER_NAME , USER_NAME , PASSWORD , DB_NAME);

        if($connection-> query( $result)){
            ?>
            <script>alert('inserted successfully')</script>
            <?php
            header("location:list.php");
        }
        else{
            echo "error please try again" . $connection->error;
        }
    }
}

$obj = new student();
// $obj -> addForm();
if(isset($_POST['register']) && $_POST['register']  = 'add'){
    $obj -> insertDataForm($_POST);
}

?>