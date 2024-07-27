<?php

include_once('constant.php');
class student {
    public $connection = '';
     public $tableColumn;
     public $tableValues;
     public $tableName;
     public $postData;
     public $recordDetails;
     public $editRecords;

    public function __construct(){

        $connection = new mysqli(SERVER_NAME , USER_NAME , PASSWORD , DB_NAME);
        $this ->connection = $connection;
        // if($connection->connect_error){
        //     die("connection failed" . $connection->connect_error);
        // }else{
        //     echo 'connection successfully';
        // }
    }

    public function addForm(){

        include('add-form.php');
    }

    public function insertDataForm($tableName , $postData = []){
        $this->tableName = $tableName;
        $postData['full_name'] = (!empty($postData['full_name']) ? $postData['full_name'] : '');
        $postData['email'] = (!empty($postData['email']) ? $postData['email'] : '');
        $postData['coding_interest'] = (!empty($postData['coding_interest']) ? $postData['coding_interest'] : '');
        $postData['language'] = (!empty($postData['language']) ? implode(',' , $postData['language']) : '');
        $postData['semester'] = (!empty($postData['semester']) ? $postData['semester'] : '');

        if(!empty($postData)){
            $tableColumn = array_pop($postData);
            $tableColumn = (!empty($postData) ? implode(',' ,array_keys($postData)) : '');
            $tableValues = (!empty($postData) ? implode("','" ,array_values($postData)) : '');

            // var_dump($tableColumn);
            // var_dump($tableValues);
            $this->tableColumn = $tableColumn;
            $this->tableValues = $tableValues;

            $insertQuery = "insert into $tableName ($tableColumn) VALUES ('" . $tableValues ."')";
            $sql = $this->connection->query($insertQuery);

            if(!empty($sql)){
                header('location:list.php');
            }else{
                echo 'error'. $this->connection->error;
            } 
        }
    }

    public function listData($tableName){

        $connection = $this->connection;
        $selectQuery = "SELECT * FROM $tableName";
        $result = $connection->query($selectQuery);
        $recordDetails =[];
        if ($result->num_rows > 0) {
            $recordDetails = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
        }
        return $recordDetails;
    }

    public function editData($tableName){
        $connection = $this->connection;
        $id = $_REQUEST['id'];
        $selectQuery = "SELECT * FROM $tableName WHERE id = " . $id;
        $result = $connection->query($selectQuery); 
        $editRecords = mysqli_fetch_assoc($result);
        // var_dump($editRecords);
        return $editRecords;
        $editRecords = $this->editRecords;
    }

    public function updateData($tableName , $updateData =[] , $updateId){
        $updateData = [];
        // $updateId =[];
        if(!empty($updateData)){
            $updateDataInfo['id'] =(!empty($updateData['id']) ? $updateData['id'] : '');
            $updateDataInfo['full_name'] =(!empty($updateData['full_name']) ? $updateData['full_name'] : '');
            $updateDataInfo['email'] =(!empty($updateData['email']) ? $updateData['email'] : '');
            $updateDataInfo['coding_interest'] =(!empty($updateData['coding_interest']) ? $updateData['coding_interest'] : '');
            $updateDataInfo['language'] =(!empty($updateData['language']) ? implode(',' , $updateData['language'] ): '');
            $updateDataInfo['semester'] =(!empty($updateData['semester']) ? $updateData['semester'] : '');
        
        //     $update = "UPDATE $tableName SET full_name='" . $updateData['full_name'] . "' , email='" . $updateData['email'] . "' , coding_interest='" . $updateData['coding_interest'] . "' , language='" . $updateData['language'] . "' , semester='" . $updateData['semester'] . "' WHERE id='" . $updateData['id'] . "'";
        //     $connection = $this->connection;
        //     $updateRecord = $connection->query($update);
            
        //     $selectQuery = "SELECT * FROM $tableName WHERE id = " . $updateData['id'];
        //     $result = $connection->query($selectQuery);
        //     if ($connection->query($update) === TRUE) {
        //          echo ('update successfully');
        //          header('location:list.php');
        //     }else {
        //         echo " error please try again" . $connection->error;
        //     }

            $updateQuery = "update $tableName set";
            foreach($updateDataInfo as $key=>$updateData){
                $updateQuery .= " $key = '$updateData'" . ",";
            }
            $updateQuery = rtrim($updateQuery , ',');
            if(!empty($updateId)){
                $updateQuery .= "where id = $updateId";
            }
            echo '<pre>';
            echo $updateQuery;


            if($this->connection->query($updateQuery) === true){
                return $updateQuery;
            }
            else{
                echo "error".$this->connection->error;
            }


        }

         

    }
}

$obj = new student();
if(isset($_POST['register']) && $_POST['register']  = 'add'){
    $obj->insertDataForm('student_form_record' , $_POST);
}
// $obj -> listData('student_form_record');
// $obj -> updateData($_POST);

?>