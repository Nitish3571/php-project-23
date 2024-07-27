<?php

$_serverName = "localhost";
$_userName = 'root';
$password = "";
$dbName = "college_hostal_asoit";

$connection = new mysqli($_serverName , $_userName , $password , $dbName);
if($connection->connect_error){
?>
    <script>
        die("connection failed :");
    </script>
<?php
}
else{
    ?>
    <script>
        alert( "connection successfully");
    </script>
<?php
}

//insert data in database table name myguests

//     $sql = "INSERT INTO myguests (firstname, lastname, email)
//     VALUES ('Rajesh', 'Kumar', 'rajesh@gmail.com')";
    
// // check data insert in table

//     if ($connection->query($sql) === TRUE) {
// ?>
//     <script>
//         alert( "New record created successfully");
//     </script>
// <?php
//     } 
//     else {
//       echo "Error: " . $sql . "<br>" . $connection->error;
//     }
// ?>

<table border="2px solid black" style="text-align: center;">
    <thead>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>Reg Date</th>
    </thead>
    <tbody>
            <?php
            $connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');
            $query = "SELECT * FROM myguests";
            $result = $connection->query($query);
            echo "<pre>";
            print_r($result);

            if($result->num_rows > 0){
                $studentData = mysqli_fetch_all($result , MYSQLI_ASSOC);
                if(!empty($studentData)){
                    foreach($studentData as $data){
                        ?>
                        <tr>
                            <td style="font-weight: bold;"><?php echo (!empty($data['id'])? $data['id'] : '') ?></td>
                            <td><?php echo (!empty($data['firstname'])? $data['firstname'] : '')?></td>
                            <td><?php echo (!empty($data['lastname'])? $data['lastname'] : '')?></td>
                            <td><?php echo (!empty($data['email'])? $data['email'] : '')?></td>
                            <td><?php echo (!empty($data['reg_date'])? $data['reg_date'] : '')?></td>
                        </tr>
                    <?php
                    }
                }
            }
            else{
                echo "No Record";
            }
                ?>
    </tbody>
</table>