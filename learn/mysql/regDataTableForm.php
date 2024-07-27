
<table border="2px solid black" style="text-align: center;">
    <thead>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>User Name</th>
        <th>Passwod</th>
        <th>Conform password</th>
        <th>ip</th>
        <th>create_id</th>
        <th>created_at</th>
    </thead>
    <tbody>
        <?php
        $connection = new mysqli('localhost' , 'root' , '' ,'college_hostal_asoit' );
        $query = "SELECT * FROM registration_details";
        $result = $connection->query($query);

        if ($result->num_rows > 0){
            $data = mysqli_fetch_all($result , MYSQLI_ASSOC);
            if(!empty($data)){
                foreach($data as $studentData){
                    ?>
                    <tr>
                        <td style="font-weight: bold;"><?php echo (!empty($studentData['id']) ? $studentData['id'] : '' ) ?></td>
                        <td><?php echo (!empty($studentData['first_name']) ? $studentData['first_name'] : '' ) ?></td>
                        <td><?php echo (!empty($studentData['last_name']) ? $studentData['last_name'] : '' ) ?></td>
                        <td><?php echo (!empty($studentData['email']) ? $studentData['email'] : '' ) ?></td>
                        <td><?php echo (!empty($studentData['username']) ? $studentData['username'] : '' ) ?></td>
                        <td><?php echo (!empty($studentData['password']) ? $studentData['password'] : '' ) ?></td>
                        <td><?php echo (!empty($studentData['conform_password']) ? $studentData['conform_password'] : '' ) ?></td>
                        <td><?php echo (!empty($studentData['ip']) ? $studentData['ip'] : '' ) ?></td>
                        <td><?php echo (!empty($studentData['create_id']) ? $studentData['create_id'] : '' ) ?></td>
                        <td><?php echo (!empty($studentData['created_at']) ? $studentData['created_at'] : '' ) ?></td>
                    </tr>
                    <?php
                }
            }
        } 
        else{
            echo "No Record Found";
        }?>
    </tbody>
</table>
