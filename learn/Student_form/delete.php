<?php

$connection = new mysqli('localhost', 'root', '', 'college_hostal_asoit');

$deleteQuery = "DELETE FROM student_form_record where id = " . $_REQUEST['id'];
if ($connection->query($deleteQuery) === TRUE) {
    echo "deleted successfully";

} else {
    echo "not deleted please try again" . $connection->error;
}
?>
<center>
    <h2>Student Record</h2>
    <table border="2">
        <thead>
            <th>Sr_no</th>
            <th>full_name</th>
            <th>email</th>
            <th>coding_interest</th>
            <th>language</th>
            <th>semester</th>
            <th>id</th>
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
                        <td><?php echo (!empty($recordDetail['full_name']) ? $recordDetail['full_name'] : '')  ?></td>
                        <td><?php echo (!empty($recordDetail['email']) ? $recordDetail['email'] : '')  ?></td>
                        <td><?php echo (!empty($recordDetail['coding_interest']) ? $recordDetail['coding_interest'] : '')  ?></td>
                        <td><?php echo (!empty($recordDetail['language']) ? $recordDetail['language'] : '')  ?></td>
                        <td><?php echo (!empty($recordDetail['semester']) ? $recordDetail['semester'] : '')  ?></td>
                        <td><?php echo (!empty($recordDetail['id']) ? $recordDetail['id'] : '')  ?></td>
                    </tr>
            <?php
                    $recordIndex++;
                }
            }
            ?>
        </tbody>
    </table>
</center>