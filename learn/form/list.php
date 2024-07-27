<?php

include 'Login.php';
// var_dump($_SESSION);die;
include('../login_page/connection.php');

if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){

    // header('location:../Online_voting/list.php');
    $selectQuery = "select * from login_master" ;
        
}else{

    $selectQuery = "select * from login_master where id = '" . $_SESSION['user_id'] ."'" ;
//    $selectQuery = "SELECT lm.id , lm.email , lm.password  , sm.mobile  FROM `login_master` as lm
// JOIN student_master as sm ON lm.id=sm.created_id
// WHERE lm.id= '" . $_SESSION['user_id'] ."'" ;

}

$result = $connection->query($selectQuery);
        if($result->num_rows> 0 ){
            $loginRecordDetails = mysqli_fetch_all($result);
            var_dump($loginRecordDetails);
        }else{
            header('location:form.php');
        }
?>