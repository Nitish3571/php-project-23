
<table border="2">
    <thead>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Id</th>
        <th>Reg Date</th>
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

            //table data information

            $select = "SELECT * FROM myguests";
            $result = $connection -> query($select);
            echo "<pre>";
            // print_r($result);

            //object ko print karne ka method

            $noOfRow = $result-> num_rows;
            echo 'No of Row Present in Table = ' . $noOfRow;

            if ($result -> num_rows > 0){
                $recordFound = mysqli_fetch_all($result , MYSQLI_ASSOC);
            //     echo "<pre>";
            // print_r($recordFound);
                if(!empty($recordFound)){
                    foreach($recordFound as $record){
                        ?>
                        <tr>
                            <td><?php echo (!empty($record['id']) ? $record['id'] : '') ?></td>
                            <td><?php echo (!empty($record['firstname']) ? $record['firstname'] : '') ?></td>
                            <td><?php echo (!empty($record['lastname']) ? $record['lastname'] : '') ?></td>
                            <td><?php echo (!empty($record['email']) ? $record['email'] : '') ?></td>
                            <td><?php echo (!empty($record['reg_date']) ? $record['reg_date'] : '') ?></td>
                        </tr>
                        <?php
                    }
                }
                else{
                    echo "No Record Found";
                }

            }
            
            ?>
            
    </tbody>
</table>