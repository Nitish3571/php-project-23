<?php

include("connection.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>sr.no</th>
                <th>first Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>gender</th>
                <th>Phone</th>
                <th>Second phone</th>
                <th>Language</th>
                <th>state</th>
                <th>image</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $selectQuery = "select * from $tableName";
                $result = $connection->query($selectQuery);
                var_dump($result);
                if($result->num_rows > 0 ){
                    $index = 1;
                    $recordDetails = mysqli_fetch_all($result , MYSQLI_ASSOC);
                    foreach($recordDetails as $recordDetail){
                        ?>
                        <tr>
                            <td><?php echo $index  ?></td>
                            <td><?php echo (!empty($recordDetail['fname']) ? $recordDetail['fname'] : '') ?></td>
                            <td><?php echo (!empty($recordDetail['lname']) ? $recordDetail['lname'] : '') ?></td>
                            <td><?php echo (!empty($recordDetail['email']) ? $recordDetail['email'] : '') ?></td>
                            <td><?php echo (!empty($recordDetail['gender']) ? $recordDetail['gender'] : '') ?></td>
                            <td><?php echo (!empty($recordDetail['phone']) ? $recordDetail['phone'] : '') ?></td>
                            <td><?php echo (!empty($recordDetail['phoneno']) ? $recordDetail['phoneno'] : '') ?></td>
                            <td><?php echo (!empty($recordDetail['language']) ? $recordDetail['language'] : '') ?></td>
                            <td><?php echo (!empty($recordDetail['state']) ? $recordDetail['state'] : '') ?></td>
                            <td><?php 
                            $filepath = "http://localhost/marksheet/demo/image/".$recordDetail['image'];
                            ?>
                            <img src="<?php echo $filepath ?>" alt="Not found" height="100" weight="100">
                            </td>
                            <td><a href="edit.php?id=<?php echo $recordDetail['id'] ?>">Edit</a> </td>
                            <td><a href="delete.php?id=<?php echo $recordDetail['id'] ?>">delete</a> </td>
                        </tr>
                        <?php
                        $index++;
                    }
                }else{
                    echo "Record not found";
                }
            ?>
        </tbody>
    </table>
</body>
</html>