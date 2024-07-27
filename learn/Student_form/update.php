<?php
// include('edit.php');
echo "<pre>";
// print_r($_POST);die;
if (!empty($_POST)) {

    $id = (!empty($_POST['id']) ? $_POST['id'] : '');
    $fullName =(!empty($_POST['full_name']) ? $_POST['full_name'] : '');
    $email =(!empty($_POST['email']) ? $_POST['email'] : '');
    $codingInterest =(!empty($_POST['coding_interest']) ? $_POST['coding_interest'] : '');
    $language =(!empty($_POST['language']) ? implode(',', $_POST["language"]) : '');
    $semester =(!empty($_POST['semester']) ? $_POST['semester'] : '');
    $profile_pic =(!empty($_POST['profile_pic']) ? $_POST['profile_pic'] : '');
    // echo $profile_pic;die;

    $update = "UPDATE student_form_record SET full_name='" . $fullName . "' , email='" . $email . "' , coding_interest='" . $codingInterest . "' , language='" . $language . "' , semester='" . $semester . "' , profile_pic='" . $profile_pic . "' WHERE id='" . $id . "'";
    $connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');
    $updateRecord = $connection->query($update);
    
    $selectQuery = "SELECT * FROM student_form_record WHERE id = " . $_POST['id'];
    $result = $connection->query($selectQuery);

    // var_dump($updateRecord);die;
    // echo $update;die;
    if ($connection->query($update) === TRUE) {
         echo ('update successfully');
    }
    else {
        echo " error please try again" . $connection->error;
    }
}

?>


<center>
    <h2>Update Record student Form</h2>
<table border="2">
    <thead>
        <th>sr_no</th>
        <th>full_name</th>
        <th>email</th>
        <th>coding_interest</th>
        <th>language</th>
        <th>semester</th>
        <th>id</th>
    </thead>
    <tbody>
        <?php
         $connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');
         $selectQuery = "SELECT * FROM student_form_record";
         $result = $connection -> query($selectQuery);
        //  var_dump($result);
        if($result -> num_rows > 0){
            $recordIndex = 1;
            $recordDetails = mysqli_fetch_all($result , MYSQLI_ASSOC);
                foreach($recordDetails as $recordDetail){
                    // var_dump($recordDetail);die;
                    ?>
                    <tr>
                        <td><?php echo $recordIndex ?></td>
                        <td><?php echo (!empty($recordDetail['full_name']) ? $recordDetail['full_name'] : '')  ?></td>
                        <td><?php echo (!empty($recordDetail['email']) ? $recordDetail['email'] : '')  ?></td>
                        <td><?php echo (!empty($recordDetail['coding_interest']) ? $recordDetail['coding_interest'] : '')  ?></td>
                        <td><?php echo (!empty($recordDetail['language']) ? $recordDetail['language'] : '')  ?></td>
                        <td><?php echo (!empty($recordDetail['semester']) ? $recordDetail['semester'] : '')  ?></td>
                        <td>
                        <?php
                        $filePath ='http://localhost/learn/Student_form/uploads/' . $recordDetail['profile_pic'];
                        // var_dump($filePath);die;?>
                        <img height="100" width="100" src="<?php echo $filePath ?>" >
                        
                    </td>
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