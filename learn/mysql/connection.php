<?php

//connection karne ke liye query

$connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');

//connection check karne ka query

// if ($connection->connect_error) {
//     die("Connection failed: " . $connection->connect_error);
//   }
//   echo "Connected successfully";


// Create database

// $sql = "CREATE DATABASE myDB";

// //check database create

// if ($connection->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $connection->error;
// }



// sql to create table

// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     //check create table
//     if ($connection->query($sql) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $connection->error;
//     }


//insert data in database table name myguests

    // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('Nitish', 'Kumar', 'example@example.com')";
    
//check data insert in table

    // if ($connection->query($sql) === TRUE) {
    //   echo "New record created successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . $connection->error;
    // }


//total information in table 

$query = 'select * from MyGuests';
$result = $connection->query($query);
echo "<pre>";
print_r( $result);

// echo $result->field_count;

//one by one row ko array me print karna

if( $result->num_rows > 0 ){
    $data = mysqli_fetch_all($result , MYSQLI_ASSOC);
    echo "<pre>";print_r($data);
    if(!empty($data)){
        foreach($data as $dat){
            echo "last_name = " . $dat['lastname']; 
            echo "<pre> dat ";print_r($dat);
        }
        var_dump($dat);die;
    }  
}  else {
    echo "no record found";
}
?>


<!-- Table form me database ka record print karne ka code here table tag ke inside me hai  -->

<table border="1">
    <thead>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
    </thead>
    <tbody>
        <?php
             $connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');
             $query = 'select * from MyGuests';
             $result = $connection->query($query);
             echo "<br><br><br>";print_r($result);die;

             if( $result->num_rows > 0 ){
                $data = mysqli_fetch_all($result , MYSQLI_ASSOC);
                // echo "<pre>";print_r($data);die;
                if(!empty($data)){
                    foreach($data as $dat){
                        ?>
                        <tr>
                            <td><?php echo (!empty($dat['id'])? $dat['id'] : '') ?></td>
                            <td><?php echo (!empty($dat['firstname'])? $dat['firstname'] : '') ?></td>
                            <td><?php echo (!empty($dat['lastname'])? $dat['lastname'] : '') ?></td>
                            <td><?php echo (!empty($dat['email'])? $dat['email'] : '') ?></td>
                        </tr>
                  <?php  }   
                }  
            }  
            else {
                echo "no record found";
            }
            ?>
    </tbody>
</table>




connection karne ka code below 

<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'college_hostal_asoit';

//connection in database query

$connection = new mysqli($serverName , $userName , $password , $dbName );

// connection check query

if($connection -> connect_error){
    die('connection failed : ' . $connection -> connect_error);
}
else{
    ?>
    <script>
        alert( "connection successfully");
    </script>
    <?php
}



// select table query

// $selectTable = "SELECT * FROM myguests";
// $conn = $connection -> query($selectTable);
// echo "<pre>";
// print_r($conn);
// echo 'field count in table = ' . $conn ->field_count;

// data insert in table ka query

$query = "INSERT INTO myguests(
    firstname , lastname , email) VALUE ('Omprakash' , 'kumar'  , 'op@1234')";

// $resut = $connection-> query($query);
// echo $resut;
//check query for data inserted


// if($connection -> query($query) === TRUE){
//     ?>
<!-- //     <script> -->
<!-- //         alert( "successfully Registed"); -->
<!-- //     </script> -->
       <!-- yaha php open tag write here  -->
<!-- // }
// else {
//     echo "error inserted failed " .  $connection_error;
// } -->
?>