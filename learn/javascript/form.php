<?php
?>

<html>
    <head>
        <title>login form</title>
    </head>
    <body>
        <form  method="get">
            <label>User Name</label>
            <input type="text" id="userName"  placeholder="enter user name" name="userName" class="form_field"><br><br>
            <label>Email</label>
            <input type="email" id="email"  placeholder="enter eamil id" name="email" class="form_field"><br><br>
            <label>password</label>
            <input type="password" id="password" placeholder="enter password" name="password" class="form_field"><br><br>
            <input type="button" onclick="validationCheck()" id="login" value="login" name="login">
        </form>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        
//using if condition

            // var submitbtn = 1;
        //     function validationCheck(){
        //     if($('#email').val() == '' || $('#email').val() == null){
        //         alert('please enter email');
        //         $('#email').focus();
        //         return 0;
                
        //     }
        // }
        //     // if($('#password').val() == '' || $('#password').val() == null){
            //         alert('please enter password');
            //         $('#password').focus();
            //         return 0;
            // }
            //     $('form').submit();
            // }   


// using each loop 

         function validationCheck(){
            var checkValidationFlag= true;
            $('.form_field').each(function(index){
                console.log(index + " = " + $.trim($(this).val()));

            if(($(this).val() == '' || $(this).val() == null)){
                alert( 'please enter * field');
                $(this).focus();
                checkValidationFlag = false;
                return checkValidationFlag;
            }
            });
            // if(checkValidationFlag == true){
            //     $('form').submit();
            // }
        }



//practice 

        // function validationCheck(){
        //     // var checkValidationFlag= true;
        //     $('.form_field').each(function(index){
        //         console.log(index);
        //     });
        // }

    </script>
</html>