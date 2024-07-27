<?php
session_start();

define('SERVER_NAME' , 'localhost');
define('USER_NAME' , 'root');
define('PASSWORD' , '');
define('DB_NAME' , 'voting');


class Login{
    public $connection='';

    public function __construct(){

        $connection = new mysqli(SERVER_NAME , USER_NAME , PASSWORD , DB_NAME);
        $this ->connection = $connection;
    }

    public function loginData($tableName , $postData = []){

        if(isset($postData['login'])){
            $email = (!empty($postData['email']) ? $postData['email'] : '');
            $password = (!empty($postData['password']) ? $postData['password'] : '');
            $role = (!empty($postData['role']) ? $postData['role'] : '');

            $query = "SELECT * FROM $tableName WHERE email = '$email'";
            // var_dump($query);
            $result = $this->connection->query($query);
            // var_dump($result);
            if($result) {
                if ($result->num_rows > 0) {
                    // echo 'email already exist<br>';
                    $recordDetails = mysqli_fetch_all($result , MYSQLI_ASSOC);
                    if($recordDetails[0]['password'] == $password ){
                        $_SESSION['user_id'] = $recordDetails[0]['id'];
                        $_SESSION['role'] = $recordDetails[0]['role'];
                            header('location:list.php');
                    }else{
                        echo 'password incorrect <br><br>';
                    }        
                }else{
                    echo 'email not exist<br><br>';
                }
            }
        }  
    }

    

}
$obj = new Login();
// $obj->addForm();
// $obj->sessionPart($_POST);


