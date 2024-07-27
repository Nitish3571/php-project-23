<?php

include ('connection_marksheet.php');

if(isset($_POST['submit'])){
    $enrollement_no = (!empty($_POST['enrollement_no']) ? $_POST['enrollement_no'] : '');
    $semester = (!empty($_POST['semester']) ? $_POST['semester'] : '');

    // $selectQuery = "select * from user_login_master where enrollement_no =".$enrollement_no;
    // $result = $connection->query($selectQuery);
    // if($result-> num_rows > 0){
    //     $recordDetail = mysqli_fetch_all($result , MYSQLI_ASSOC);
    // }else{
    //     header("Location:user_form.php");
    //     echo 'Record not found';
        
    // }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marksheet </title>
    <style>
        /* *{
            margin: 0px;
            padding: 0px;
        } */
        body{
            background-color: lightblue;
        }
        .container{
            /* margin: 50px 30%; */
            margin-left: 20px;
        }
         fieldset{
            margin-left: 500px;
            margin-right: 500px;
            margin-top: 100px;
            background-color: white;
        }
        .lower{
            margin-top: 20px;
        }
        center h2{
            margin: 0;
        }
        #sign{
            height;30px;
            width:100px;
        }
        h1{
            text-align:center;
            text-transform:uppercase;
            font-size:40px;
        }


        @media only screen and (max-width: 600px) {
            .container{
            margin-left: 20px;
        }
        fieldset{
            margin-left: 0px;
            margin-top: 20px;
            background-color: white;
        }
        h1{
            text-align:center;
            text-transform:uppercase;
            font-size:30px;
            margin-left:30%;
        }
        }
   
    </style>
</head>
<body>
    
    <?php
    $selectQuery = "select * from login_master as lm join  user_login_master as ulm on ulm.login_id=lm.id 
            join mid_sem_result_master as msrm on msrm.user_login_id=ulm.id  join marks_master as mm on mm.id=msrm.marks_id 
           join end_sem_result_master as esrm on esrm.id=msrm.id where enrollement_no =".$enrollement_no;
          // var_dump($selectQuery);
    $result = $connection->query($selectQuery);
    if($result-> num_rows > 0){
        $recordDetails = mysqli_fetch_all($result , MYSQLI_ASSOC);
             // var_dump($recordDetails);
    }else{
        header("Location:user_form.php");
        echo 'Record not found';
        
    }

    ?>
    <h1>Marksheet 2023</h1>
    <!-- <form action="#"> -->
        <fieldset>
            <center>
                <h2>Aditya silver oak intitute of technology gota Ahmedabad </h2>
                <h2> B.Tech (CE) 2 <sup>nd</sup> Result 2023</h2>
            </center>
            <div class="container">
        <div class="upper">
            <div>Name : <span><?php echo $recordDetails[0]['name']  ?></span></div>
            <div>Father Name : <span><?php echo $recordDetails[0]['father_name']  ?></span></div>
            <div>Mother Name : <span><?php echo $recordDetails[0]['mother_name']  ?></span></div>
            <div>Enrollement No : <span><?php echo $recordDetails[0]['enrollement_no']  ?></span></div>
        </div>

        <div class="lower">
            <table border="2">
                <thead>
                <tr>
                    <th rowspan="2">Subject Name</th>
                    <th colspan="2">Mid exam</th>
                    <th rowspan="2">Total Marks</th>
                    <th colspan="2">End exam</th>
                    <th rowspan="2">Total Marks</th>
                    <th rowspan="2">Result</th>
                </tr>
                <tr>
                    <th>Theory</th>
                    <th>Practical</th>
                    <th>Theory</th>
                    <th>Practical</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($recordDetails as $recordDetail){
                ?>
                <tr>
                    <td><?php echo (!empty($recordDetail['subject']) ? $recordDetail['subject'] : '') ?></td>
                    <td><?php echo (!empty($recordDetail['theory_marks']) ? $recordDetail['theory_marks'] : '') ?></td>
                    <td><?php echo (!empty($recordDetail['practicle_marks']) ? $recordDetail['practicle_marks'] : '') ?></td>
                    <td><?php echo (!empty($recordDetail['obtained_marks']) ? $recordDetail['obtained_marks'] : '') ?></td>
                    <td><?php echo (!empty($recordDetail['theory_marks(e)']) ? $recordDetail['theory_marks(e)'] : '') ?></td>
                    <td><?php echo (!empty($recordDetail['practicle_marks(e)']) ? $recordDetail['practicle_marks(e)'] : '') ?></td>
                    <td><?php echo (!empty($recordDetail['obtained_marks(e)']) ? $recordDetail['obtained_marks(e)'] : '') ?></td>
                    <td>
                        <?php if($recordDetail['obtained_marks'] == 'O' && $recordDetail['obtained_marks(e)'] == 'O'){
                                echo 'O';
                            } 
                                elseif($recordDetail['obtained_marks'] == 'O' && $recordDetail['obtained_marks(e)'] == 'A+'){
                                echo 'O';
                            }
                                elseif($recordDetail['obtained_marks'] == 'A+' && $recordDetail['obtained_marks(e)'] == 'O'){
                                echo 'O';
                            }
                                elseif($recordDetail['obtained_marks'] == 'A+' && $recordDetail['obtained_marks(e)'] == 'A+'){
                                echo 'A+';
                            }
                                elseif($recordDetail['obtained_marks'] == 'A+' && $recordDetail['obtained_marks(e)'] == 'A'){
                                echo 'A';
                            }
                                elseif($recordDetail['obtained_marks'] == 'A' && $recordDetail['obtained_marks(e)'] == 'A+'){
                                echo 'A';
                            }
                                elseif($recordDetail['obtained_marks'] == 'A' && $recordDetail['obtained_marks(e)'] == 'A'){
                                echo 'A';
                            }
                                elseif($recordDetail['obtained_marks'] == 'B+' && $recordDetail['obtained_marks(e)'] == 'A'){
                                echo 'A';
                            }
                                elseif($recordDetail['obtained_marks'] == 'B+' && $recordDetail['obtained_marks(e)'] == 'B+'){
                                echo 'B+';
                            }
                                elseif($recordDetail['obtained_marks'] == 'B' && $recordDetail['obtained_marks(e)'] == 'B'){
                                echo 'B';
                            }
                                elseif($recordDetail['obtained_marks'] == 'O' && $recordDetail['obtained_marks(e)'] == 'B'){
                                echo 'A';
                            }
                                elseif($recordDetail['obtained_marks'] == 'O' && $recordDetail['obtained_marks(e)'] == 'A'){
                                echo 'A+';
                            }
                                elseif($recordDetail['obtained_marks'] == 'O' && $recordDetail['obtained_marks(e)'] == 'A+'){
                                echo 'O';
                            }
                                elseif($recordDetail['obtained_marks'] == 'O' && $recordDetail['obtained_marks(e)'] == 'B+'){
                                echo 'A';
                            }
                                elseif($recordDetail['obtained_marks'] == ' ' && $recordDetail['obtained_marks(e)'] == ' '){
                                echo ' ';
                            }
                            else{
                                echo 'P';
                            }
                        
                        ?>
                    </td>
    
                </tr>
            <?php
            }
            ?>
            
            
            </tbody>
        </table>
            <div style="margin-left: 50%;">
                Result : <b>Pass</b>&nbsp;&nbsp;&nbsp;&nbsp;
                Cgpa : <b>
                    <?php
                        $array = ['6.50' , '7.50' , '6.85' , '7.35' , '7.90' , '7.80' . '7.85' , '8.50' , '8.32' , '8.35' , '8.45' ,' 8.78' , '8.90' , '9.20' , '9.22' , '9.55' , '9.87' , '9.65' , '9.45' , '9.63' , '9.85' , '9.40'];
                        $arr = $array[array_rand($array)];
                        echo $arr;
                    ?>
                  </b>
            </div>
        </div>
    </div><br>
        <footer>
            <b>Instraction :</b><span>Marksheet is a documentary proof of appearing for an examination and scoring certain marks. Transcripts are essential records of the considerable number of assessments embraced in a combined recorded document kept up by the educational institute.
</span>
        </footer>
        <div style="text-align: right;">
            <img id='sign' src="img.png" alt="not signed"><br>
            <b>HOD Signature</b> 
        </div>
        </fieldset>
    <!-- </form> -->
</body>
</html>