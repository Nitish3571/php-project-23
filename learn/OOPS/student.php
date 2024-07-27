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
        $postDataInfo['full_name'] = (!empty($postData['full_name']) ? $postData['full_name'] : '');
        $postDataInfo['email'] = (!empty($postData['email']) ? $postData['email'] : '');
        $postDataInfo['coding_interest'] = (!empty($postData['coding_interest']) ? $postData['coding_interest'] : '');
        $postDataInfo['language'] = (!empty($postData['language']) ? implode(',' , $postData['language']) : '');
        $postDataInfo['semester'] = (!empty($postData['semester']) ? $postData['semester'] : '');

        // var_dump($postData);die;
        if(!empty($postDataInfo)){
            // $tableColumn = array_pop($postDataInfo);
            $tableColumn = (!empty($postDataInfo) ? implode(',' ,array_keys($postDataInfo)) : '');
            $tableValues = (!empty($postDataInfo) ? implode("','" ,array_values($postDataInfo)) : '');

            var_dump($tableColumn);
            var_dump($tableValues);
            // $this->tableColumn = $tableColumn;
            // $this->tableValues = $tableValues;die;

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
        // $editRecords = $this->editRecords;
    }
    public function updateData( $tableName , $id , $updateDataInfo=[]){
        // var_dump($updateDataInfo);
        // var_dump($id);
        // var_dump($tableName);die;
        $updateDataRecord = [];
        if(!empty($updateDataInfo)){

            $updateQuery = "update $tableName set";
            foreach($updateDataInfo as $key=>$updateData){
                $updateQuery .= " $key = '$updateData'" . ",";
            }
            $updateQuery = rtrim($updateQuery , ',');
            if(!empty($id)){
                $updateQuery .= "where id = $id ";
            }

            if($this->connection->query($updateQuery) === true){
                header('location:list.php');
                return $updateDataRecord;
            }
            else{
                echo "error".$this->connection->error;
            }
        }

    }

    public function deleteQuery(){
        $deleteQuery = "DELETE FROM student_form_record where id = " . $_REQUEST['id'];
        if ($this->connection->query($deleteQuery) === TRUE) {
            echo "deleted successfully";

        } else {
            echo "not deleted please try again" . $this->connection->error;
        }
    }
}

$obj = new student();
if(isset($_POST['register']) && $_POST['register']  = 'add'){
    $obj->insertDataForm('student_form_record' , $_POST);
}
?>