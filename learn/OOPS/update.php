<?php

// var_dump($_POST);
include_once('student.php');
// var_dump($_POST);die;
$updateDataInfo =[];
 $id =(!empty($_REQUEST['id']) ? $_REQUEST['id'] : '');
    $updateDataInfo['full_name'] =(!empty($_REQUEST['full_name']) ? $_REQUEST['full_name'] : '');
    $updateDataInfo['email'] =(!empty($_REQUEST['email']) ? $_REQUEST['email'] : '');
    $updateDataInfo['coding_interest'] =(!empty($_REQUEST['coding_interest']) ? $_REQUEST['coding_interest'] : '');
    $updateDataInfo['language'] =(!empty($_REQUEST['language']) ? implode(',' , $_REQUEST['language'] ): '');
    $updateDataInfo['semester'] =(!empty($_REQUEST['semester']) ? $_REQUEST['semester'] : '');

// }

// var_dump($id);
$obj->updateData('student_form_record' , $id  , $updateDataInfo);

?>
        