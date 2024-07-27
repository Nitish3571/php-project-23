<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
</head>
<body>
<form class="cmxform" id="commentForm" method="get" action="table.php">
  <fieldset>
    <legend>Please provide your name, email address (won't be published) and a comment</legend>
    <p>
      <label>Name (required, at least 3 characters)</label>
      <input name="name" type="text" >
    </p>
    <p>
      <label>Mobile No</label>
      <input name="mobile" type="text" >
    </p>
    <p>
      <label>E-Mail (required)</label>
      <input type="email" name="email" >
    </p>
    <p>
      <label>Password</label>
      <input type="password" name="password" >
    </p>
    <p>
      <label>Your comment </label>
      <textarea name="comment" ></textarea>
    </p>
    <p>
      <input type="submit" value="Submit" id="submit">
    </p>
  </fieldset>
</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script>
// $("#commentForm").validate();

//check validation in form  which element. 
// var validator = $( "#commentForm" ).validate();
// validator.form();   

// $("#commentForm").validate({
//   submitHandler: function(form) {
//     form.submit();
// }
// });


// jQuery.validator.setDefaults({
//   debug: true,
//   success: "valid"
// });
// var form = $( "#commentForm" );
// form.validate();
// $( ".submit" ).click(function() {
//   alert( "Valid: " + form.valid() );
// });

console.log($('.error').val());
//rule method
$("#commentForm").validate({
  rules: {
    name: {
      required: true,
      minlength: 3,
    },
    mobile: {
      required: true,
      minlength: 10,
      maxlength: 12,
      number:true
    },
    email: {
      required: true,
      email: true
    },
    password:{
        required:true,
        minlength:8
    }
  },
  messages: {
    name: ("Please specify your name (only letters atleast 3 char allowed)"),
    email: "Please specify a valid email address",
    password: "Please enter atleast 8 digit password"
  }
//   submitHandler: function(form) {
//     form.submit();
//   }
});

</script>
</html>