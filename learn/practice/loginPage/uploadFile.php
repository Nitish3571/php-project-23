<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp, 'upload.php');
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
			
      </form>
      
   </body>
</html>