<?php

session_start();

define('SERVER_NAME' , 'localhost');
define('USER_NAME' , 'root');
define('PASSWORD' , '');
define('DB_NAME' , 'voting');


class loginPage{
    public $connection='';
    public function __construct(){
        $connection = new mysqli(SERVER_NAME , USER_NAME , PASSWORD , DB_NAME);
        // if($connection->connect_error){
        //     die("connection failed" . $connection->connect_error);
        // }
        // else{
        //     echo "connection successfully";
        // }
        $this ->connection = $connection;
    }

    public function loginData($tableName , $postData = []){
        if(isset($postData['login'])){
            $email = (!empty($postData['email']) ? $postData['email'] : '');
            $password = (!empty($postData['password']) ? $postData['password'] : '');

            $query = "SELECT * FROM $tableName WHERE email = '$email'";
            // var_dump($query);
            $result = $this->connection->query($query);
            // var_dump($result);
            if($result) {
                if ($result->num_rows > 0) {
                    // echo 'email already exist<br>';
                    $recordDetails = mysqli_fetch_all($result ,MYSQLI_ASSOC );
                    if($recordDetails[0]['password'] == $password){
                        $_SESSION['user_id'] = $recordDetails[0]['id'];
                        // var_dump($_SESSION);die;
                            header('location:list.php');
                    }else{
                        echo 'password incorrect<br><br>';
                    }        
                }else{
                    echo 'email not exist<br><br>';
                }
            }
    }   }
}
$obj = new loginPage();
// $obj->addForm();
// $obj->sessionPart($_POST);


