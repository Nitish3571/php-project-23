<?php

require_once('student.php');
// $obj -> listData('student_form_record');


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
        <th>id</th>
        <th>Edit</th>
        <th>delete</th>
    </thead>
    <tbody>
<?php
            $recordIndex = 1;
             $recordDetails = $obj->listData('student_form_record');
            if(!empty ($recordDetails)){
                foreach ($recordDetails as $recordDetail) {
?>
                    <tr>
                        <td><?php echo $recordIndex ?></td>
                        <td><?php echo (!empty($recordDetail['full_name']) ? $recordDetail['full_name'] : '')?></td>
                        <td><?php echo (!empty($recordDetail['email']) ? $recordDetail['email'] : '')?></td>
                        <td><?php echo (!empty($recordDetail['coding_interest']) ? $recordDetail['coding_interest'] : '')?></td>
                        <td><?php echo (!empty($recordDetail['language']) ? $recordDetail['language'] : '')?></td>
                        <td><?php echo (!empty($recordDetail['semester']) ? $recordDetail['semester'] : '')?></td>
                        <td><?php echo (!empty($recordDetail['id']) ? $recordDetail['id'] : '') ?></td>
                        <td><a href="edit.php?id=<?php echo $recordDetail['id'] ?>">Edit</a></td>
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