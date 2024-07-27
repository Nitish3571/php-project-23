<?php


?>
<center>
<table border="2">
    <thead>
        <th>sr_no</th>
        <th>full_name</th>
        <th>email</th>
        <th>coding_interest</th>
        <th>language</th>
        <th>semester</th>
        <th>profile_pic</th>
        <th>id</th>
        <th>Edit</th>
        <th>delete</th>
    </thead>
    <tbody>
        <?php
        $connection = new mysqli('localhost', 'root', '', 'college_hostal_asoit');
        $selectQuery = "SELECT * FROM student_form_record";
        $result = $connection->query($selectQuery);
        //  var_dump($result);
        if ($result->num_rows > 0) {
            $recordIndex = 1;
            $recordDetails = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($recordDetails as $recordDetail) {
                // var_dump($recordDetail);die;
        ?>
                <tr>
                    <td><?php echo $recordIndex ?></td>
                    <td><?php echo (!empty($recordDetail['full_name']) ? $recordDetail['full_name'] : '')?></td>
                    <td><?php echo (!empty($recordDetail['email']) ? $recordDetail['email'] : '')?></td>
                    <td><?php echo (!empty($recordDetail['coding_interest']) ? $recordDetail['coding_interest'] : '')?></td>
                    <td><?php echo (!empty($recordDetail['language']) ? $recordDetail['language'] : '')?></td>
                    <td><?php echo (!empty($recordDetail['semester']) ? $recordDetail['semester'] : '')?></td>
                    <td>
                        <?php
                        $filePath ='http://localhost/learn/Student_form/uploads/' . $recordDetail['profile_pic'];
                        // var_dump($filePath);die;?>
                        <img height="100" width="100" src="<?php echo $filePath ?>" >
                        
                    </td>
                    <td><?php echo (!empty($recordDetail['id']) ? $recordDetail['id'] : '') ?></td>
                    <td><a href="edit.php?id=<?php echo $recordDetail['id'] ?>">Edit</a> </td>
                    <td><a href="delete.php?id=<?php echo $recordDetail['id'] ?>">delete</a></td>
                </tr>
        <?php
                $recordIndex++;
            }
        }

        ?>
    </tbody>
</table>
</center>