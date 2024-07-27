<center>
    <h2>Student Record Details</h2>
<table border="2">
    <thead>
        <th>id</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>father_name</th>
        <th>mother_name</th>
        <th>date_of_birth</th>
        <th>gender</th>
        <th>address</th>
        <th>hobbies</th>
        <th>city</th>
        <th>country</th>
        <th>edit</th>
        <th>delete</th>
    </thead>
    <tbody>
        <?php
            $connection =new mysqli ('localhost' , 'root' , '' , 'college_hostal_asoit');
            if ($connection -> connect_error){
                die("connection failed" . $connection-> connect_error);
            }
            else{
                ?>
                <script>
                    alert( "connection successfully");
                </script>
                <?php
            }
            $select = "SELECT * FROM demo_form";
            // $result = $connection -> query($select);
            $result = mysqli_query($connection,$select);
            // echo "<pre>";
            if ($result -> num_rows > 0){
                $recordFound = mysqli_fetch_all($result , MYSQLI_ASSOC);
                if(!empty($recordFound)){
                    foreach($recordFound as $record){
                        //$recordSr_no = 1;
                        ?>
                        <tr>
                            <td><?php echo (!empty($record['id']) ? $record['id'] : '') ?></td>
                            <td><?php echo (!empty($record['first_name']) ? $record['first_name'] : '') ?></td>
                            <td><?php echo (!empty($record['last_name']) ? $record['last_name'] : '') ?></td>
                            <td><?php echo (!empty($record['father_name']) ? $record['father_name'] : '') ?></td>
                            <td><?php echo (!empty($record['mother_name']) ? $record['mother_name'] : '') ?></td>
                            <td><?php echo (!empty($record['date_of_birth']) ? $record['date_of_birth'] : '') ?></td>
                            <td><?php echo (!empty($record['gender']) ? $record['gender'] : '') ?></td>
                            <td><?php echo (!empty($record['address']) ? $record['address'] : '') ?></td>
                            <td><?php echo (!empty($record['hobbies']) ? $record['hobbies'] : '') ?></td>
                            <td><?php echo (!empty($record['city']) ? $record['city'] : '') ?></td>
                            <td><?php echo (!empty($record['country']) ? $record['country'] : '') ?></td>
                            <td><a href="edit.php?id=<?php echo $record["id"]; ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?php echo $record["id"]; ?>">Delete</a></td>
                        </tr>
                        <?php
                    }
                  //  $recordSr_no++;
                }
                else{
                    echo "No Record Found";
                }
            }
            ?>
    </tbody>
</table>
</center>