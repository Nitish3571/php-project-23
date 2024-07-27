<table border="2">
    <thead>
        <tr>
            <th>Sr_no</th>
            <th>first_name</th>
            <th>second_name</th>
            <th>last_name</th>
            <th>father_name</th>
            <th>mother_name</th>
            <th>gender</th>
            <th>date of birth</th>
            <th>mobile</th>
            <th>email</th>
            <th>Address</th>
            <th>hobbies</th>
            <th>city</th>
            <th>country</th>
            <th>id</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
            <?php
                $connection = new mysqli('localhost' , 'root' , '' , 'college_hostal_asoit');

                $query = "select * from student_master";
                $result  = $connection->query($query);

                if($result->num_rows > 0){
                    $recordDetails = mysqli_fetch_all($result , MYSQLI_ASSOC);
                    $recordIndex = 1;
                // echo "<pre>";print_r($result);die;
                
                foreach($recordDetails as $data){
                 ?>
                <tr>
                    <td><?php echo  $recordIndex ?></td>
                    <td><?php echo (!empty($data['first_name']) ? $data['first_name'] : '') ?></td>
                    <td><?php echo (!empty($data['second_name']) ? $data['second_name'] : '') ?></td>
                    <td><?php echo (!empty($data['last_name']) ? $data['last_name'] : '') ?></td>
                    <td><?php echo (!empty($data['father_name']) ? $data['father_name'] : '') ?></td>
                    <td><?php echo (!empty($data['mother_name']) ? $data['mother_name'] : '') ?></td>
                    <td><?php echo (!empty($data['gender']) ? $data['gender'] : '') ?></td>
                    <td><?php echo (!empty($data['date_of_birth']) ? $data['date_of_birth'] : '') ?></td>
                    <td><?php echo (!empty($data['mobile']) ? $data['mobile'] : '') ?></td>
                    <td><?php echo (!empty($data['email']) ? $data['email'] : '') ?></td>
                    <td><?php echo (!empty($data['address']) ? $data['address'] : '') ?></td>
                    <td><?php echo (!empty($data['hobbies']) ? $data['hobbies'] : '') ?></td>
                    <td><?php echo (!empty($data['city']) ? $data['city'] : '') ?></td>
                    <td><?php echo (!empty($data['country']) ? $data['country'] : '') ?></td>
                    <td><?php echo (!empty($data['id']) ? $data['id'] : '') ?></td>
                    <td><a href="studentLoginFormEdit.php?id=<?php echo $data['id'] ?> ">Edit</a></td>
                    <td><a href="studentLoginFormdelete.php?id=<?php echo $data['id'] ?> ">delete</a></td>
                </tr> 
            <?php    
                 $recordIndex++;    
                }   
            } 
        ?>
    </tbody>
</table>