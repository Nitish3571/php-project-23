<center>
<?php


include_once("connection.php");
if(!empty($_POST['update'])){
    // var_dump($_POST);
    $id = $_POST['id'];
    $email = (!empty($_POST['email']) ? $_POST['email'] : '');
    $password = (!empty($_POST['password']) ? $_POST['password'] : '');

    $update = "UPDATE login_master SET email='" . $email . "' , password='" . $password . "' WHERE id='" . $id . "'";

    if ($connection->query($update) === TRUE) {
        echo ('update successfully');
   }
   else {
       echo " error please try again" . $connection->error;
   }
}

?>
<table border="2"
    <thead>
        <th>sr_no</th>
        <th>email id</th>
        <th>password</th>
        <th>id</th>
    </thead>
    <tbody>
        <?php
        $selectQuery = "select * from login_master";
        $result = $connection->query($selectQuery);
        if($result->num_rows> 0 ){
            $indexRecord = 1;
            $loginRecordDetails = mysqli_fetch_all($result , MYSQLI_ASSOC);
            // var_dump($loginRecordDetails);
            if(!empty($loginRecordDetails)){
                foreach($loginRecordDetails as $loginRecordDetail){
                    // var_dump($loginRecordDetail['email']);die;
                    ?>
                    <tr>
                    <td> <?php echo $indexRecord ?></td>
                    <td> <?php echo  (!empty($loginRecordDetail['email']) ? $loginRecordDetail['email'] : '')?></td>
                    <td> <?php echo (!empty($loginRecordDetail['password']) ? $loginRecordDetail['password'] : '')?></td>
                    <td> <?php echo (!empty($loginRecordDetail['id']) ? $loginRecordDetail['id'] : '')?></td>
                    </tr>
                    <?php
                $indexRecord++;
                }
            }
        }
        ?>
    </tbody>
</table>
</center>
