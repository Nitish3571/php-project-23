<center>
    <h1>LOGIN DATA</h1>
<table border="2">
    <thead>
        <th>Id</th>
        <th>Mobile No</th>
        <th>Password</th>
        <th>select voter/admin</th>
        <th>create_id</th>
        <th>created_at</th>
        <th>ip</th>
    </thead>
    <tbody>
        <?php
        $connection = new mysqli('localhost' , 'root' , '' , 'voting');
        if($connection -> connect_error){
            die("connection failed : " . $connection -> connect_error);
        }
        else{
            ?>
            <script>
                alert("connection successfully");
            </script>
            <?php
        }
        $select = "SELECT * FROM login_data";
        $connLogin = $connection -> query($select);
        
        if($connLogin -> num_rows > 0){
              $loginData = mysqli_fetch_all($connLogin , MYSQLI_ASSOC);
            if(!empty($loginData)){
                foreach($loginData as $data){
                    ?>
                    <tr>
                        <td style="font-weight: bold;"><?php echo (!empty($data['id']) ? $data['id'] : '') ?></td>
                        <td><?php echo (!empty($data['mobile_no']) ? $data['mobile_no'] : '') ?></td>
                        <td><?php echo (!empty($data['password']) ? $data['password'] : '') ?></td>
                        <td><?php echo (!empty($data['select_voter']) ? $data['select_voter'] : '') ?></td>
                        <td><?php echo (!empty($data['created_id']) ? $data['created_id'] : '') ?></td>
                        <td><?php echo (!empty($data['created_at']) ? $data['created_at'] : '') ?></td>
                        <td><?php echo (!empty($data['ip']) ? $data['ip'] : '') ?></td>
                    </tr>
                    <?php
                }
            }
            else{
                echo "No Data found";
            }
        }
        ?>
    </tbody>
</table>
</center>