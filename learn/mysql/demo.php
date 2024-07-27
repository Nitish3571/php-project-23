<?php
$query =  "select * from account_master where id = " . $_REQUEST['id'];
$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'mukesh';

$connection = new mysqli($serverName, $userName , $password , $dbName);

$checkRecordInfo  = $connection->query($query);

if( $checkRecordInfo->num_rows > 0 ){
    $getRecordInfo = mysqli_fetch_all($checkRecordInfo, MYSQLI_ASSOC );
    $firstName =  ( isset($getRecordInfo[0]['first_name']) ? $getRecordInfo[0]['first_name'] : '' );
    $lastName =  ( isset($getRecordInfo[0]['last_name']) ? $getRecordInfo[0]['last_name'] : '' );
    $email =  ( isset($getRecordInfo[0]['email']) ? $getRecordInfo[0]['email'] : '' );
    $password =  ( isset($getRecordInfo[0]['password']) ? $getRecordInfo[0]['password'] : '' );
    $gender =  ( isset($getRecordInfo[0]['gender']) ? $getRecordInfo[0]['gender'] : '' );
    $hobbies =  ( isset($getRecordInfo[0]['hobbies']) ? $getRecordInfo[0]['hobbies'] : '' );
    $country =  ( isset($getRecordInfo[0]['country']) ? $getRecordInfo[0]['country'] : '' );
    $id = ( isset($getRecordInfo[0]['id']) ? $getRecordInfo[0]['id'] : '' );
}



// var_dump($firstName);echo "<br><br><br>";
// var_dump($lastName);echo "<br><br><br>";
// var_dump($email);echo "<br><br><br>";
// var_dump($password);echo "<br><br><br>";
// var_dump($gender);echo "<br><br><br>";
// var_dump($hobbies);echo "<br><br><br>";
// var_dump($country);echo "<br><br><br>";



// echo "<br><br>";
// echo "query = " .$query;
// $query =  "select * from account_master where id = " . $_GET['id'];
// echo "<br><br>";
// echo "query = " .$query;



?>

<html>
<head>

</head>
<body>
	<form method="post" action="update.php" >
		<label>First Name</label>
		<input type="text" name="first_name" placeholder="First Name" value="<?php echo ( isset($firstName) ? $firstName : '' ) ?>"><br><br><br>
		<label>Last Name</label>
		<input type="text" name="last_name" placeholder="Last Name" value="<?php echo $lastName ?>"><br><br><br>
		<label>Email</label>
		<input type="email" name="email" placeholder="Email" value="<?php echo $email ?>"><br><br><br>
		<label>Password</label>
		<input type="password" name="password" placeholder="Password" value="<?php echo $password ?>"><br><br><br>
		<label>Gender</label>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="FeMale">FeMale<br><br><br>
		<label>Hobby</label>
		<input type="checkbox" name="hobby[]" value="Cricket">Cricket
		<input type="checkbox" name="hobby[]" value="eee">Chessssss
		<input type="checkbox" name="hobby[]" value="KhoKho">KhoKho<br><br><br>
		<label>Country</label>
		<select name="country">
			<option value="">Select</option>
			<option value="1">India</option>
			<option value="2">Usa</option>
		</select><br><br><br>
        <input type="hidden" name="record_id" value="<?php echo $id ?>">
        <button type="submit">Update</button>
		
	</form>
</body>
</html>