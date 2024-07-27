<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Student form</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">open form</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" title="close" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-align: center;">Student Form</h4>
                    </div>
                    <div class="modal-body">
                        <form name="student-form" id="student-form" action="modalBoxList.php" method="post">
                            <label>Name</label>
                            <input type="text" name="name" class="name" placeholder="Enter the name"><br><br>
                            <label>Email Id</label>
                            <input type="email" name="email" class="email" placeholder="Enter the email id"> <br><br>
                            <label>Mobile</label>
                            <input type="text" name="mobile" class="mobile" placeholder="Enter the mobile no"><br><br>
                            <input type="button" value="submit" title="submit" onclick="checkValidation()">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    var flag = false;

    function checkValidation() {

        if ($("[name='student-form']").valid() != true) {
            return false;
        }

        var name = $.trim($('[name="name"]').val());
        var email = $.trim($('[name="email"]').val());
        var mobile = $.trim($('[name="mobile"]').val());

        $.ajax({
            url: "http://localhost/learn/javascript/practice/insertAjax-modalBox.php",
            type: "post",
            data: {
                "name": name,
                "email": email,
                "mobile": mobile
            },
            success: function(response) {
                console.log("response = " + response);
                if (response == true) {
                    flag = true;
                }
            },
            error: function(responceError) {

            }
        });

        if (flag == false) {
            alert('insert successfully');
            // include(modalBoxList.php);
        }
    }


    $("[name='student-form']").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                number:false
            },
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                minlength: 10,
                number: true
            },
        },
        messages: {
            name: {
                required: "Please * fill the field ",
                minlength: "Please enter atleast 3 charecter",
                number: "Please only charecters allow."
            },
            email: {
                required: "Please * fill the field ",
                email: "Please added special charecter like @ "
            },
            mobile: {
                required: "Please * fill the field ",
                minlength: "Please enter atleast 10 digit password",
                number: "Please only digit allow."
            }
        }
    });
</script>

</html>