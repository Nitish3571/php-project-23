<center>
<?php

include 'loginPage.php';
include_once('connection.php');
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
    // header('location:list.php');
?>

<table border="2"
    <thead>
        <th>sr_no</th>
        <th>email id</th>
        <th>password</th>
        <th>id</th>
        <!-- <th>Edit</th> -->
        <!-- <th>Delete</th> -->
    </thead>
    <tbody>
        <?php
        $selectQuery = "select * from login_master";
        $result = $connection->query($selectQuery);
        if($result->num_rows> 0 ){
            $indexRecord = 1;
            $loginRecordDetails = mysqli_fetch_all($result , MYSQLI_ASSOC);
            if(!empty($loginRecordDetails)){
                foreach($loginRecordDetails as $loginRecordDetail){
                    ?>
                    <tr>
                    <td> <?php echo $indexRecord ?></td>
                    <td> <?php echo  (!empty($loginRecordDetail['email']) ? $loginRecordDetail['email'] : '')?></td>
                    <td> <?php echo (!empty($loginRecordDetail['password']) ? $loginRecordDetail['password'] : '')?></td>
                    <td> <?php echo (!empty($loginRecordDetail['id']) ? $loginRecordDetail['id'] : '')?></td>
                    <!-- <td><a href="edit.php?id=<?php echo (!empty($loginRecordDetail['id']) ? $loginRecordDetail['id'] : '') ?>"> Edit</a></td> -->
                    <!-- <td><a href="delete.php?id=<?php echo (!empty($loginRecordDetail['id']) ? $loginRecordDetail['id'] : '') ?>"> delete</a></td> -->
                    </tr>
                    <?php
                $indexRecord++;
                }
            }
        }
        ?>
    </tbody>
</table>
<?php
}else{
    header('location:login_form.php');
}
?>
</center>
