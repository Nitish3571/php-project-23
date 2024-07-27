<?php
$connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
</head>
<body>
<div class="form">
<h2 style="text-align: center;">View Records</h2>
<table width="100%" border="1">
<thead>
<tr>
<th><strong>id</strong></th>
<th><strong>first_name</strong></th>
<th><strong>last_name</strong></th>
<th><strong>father_name</strong></th>
<th><strong>mother_name</strong></th>
<th><strong>date_of_birth</strong></th>
<th><strong>address</strong></th>
<th><strong>hobbies</strong></th>
<th><strong>city</strong></th>
<th><strong>country</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$sel_query="Select * from demo_form ";
$result = mysqli_query($connection,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
    ?>
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td align="center"><?php echo $row["father_name"]; ?></td>
<td align="center"><?php echo $row["mother_name"]; ?></td>
<td align="center"><?php echo $row["date_of_birth"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["hobbies"]; ?></td>
<td align="center"><?php echo $row["city"]; ?></td>
<td align="center"><?php echo $row["country"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php  } 
?>
</tbody>
</table>
</div>
</body>
</html>