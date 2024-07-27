<?php

include('connection.php');

$id = $_REQUEST['dataId'];
// echo $id;die;
$selectQuery = "select * from $tableName where id = " . $id;
$result = $connection->query($selectQuery);
$loginRecordDetails = mysqli_fetch_assoc($result);



$id = $loginRecordDetails['id'];
$name = $loginRecordDetails['name'];
$email = $loginRecordDetails['email'];
$mobile = $loginRecordDetails['mobile'];


$result = '
<form name="student-form" id="student-form" action="modalBoxList.php" method="post">
    <label>Name</label>
    <input type="text" name="name" class="name" placeholder="Enter the name" value ="'.$name .'"><br><br>
    <label>Email Id</label>
    <input type="email" name="email" class="email" placeholder="Enter the email id" value ="'.$email .'"> <br><br>
    <label>Mobile</label>
    <input type="text" name="mobile" class="mobile" placeholder="Enter the mobile no" value ="'.$mobile .'"><br><br>
    <input type="hidden" name="id" class="id" value ="'.$id .'"><br><br>
    <input type="button" id="update" value="update" title="update" onclick="updateform()">
</form>
                
';
print_r($result);

?>
