<center>
    <?php

    include('connection.php');

    ?>

    <body>
        <table border="2" <thead>
            <th>sr_no</th>
            <th>name</th>
            <th>email id</th>
            <th>mobile</th>
            <th>Edit</th>
            <th>delete</th>
            </thead>
            <tbody>
                <?php
                $selectQuery = "select * from $tableName";
                $result = $connection->query($selectQuery);
                if ($result->num_rows > 0) {
                    $indexRecord = 1;
                    $loginRecordDetails = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    // var_dump($loginRecordDetails);
                    if (!empty($loginRecordDetails)) {
                        foreach ($loginRecordDetails as $loginRecordDetail) {
                            // var_dump($loginRecordDetail['email']);die;
                ?>
                            <tr>
                                <td> <?php echo $indexRecord ?></td>
                                <td> <?php echo (!empty($loginRecordDetail['name']) ? $loginRecordDetail['name'] : '') ?></td>
                                <td> <?php echo (!empty($loginRecordDetail['email']) ? $loginRecordDetail['email'] : '') ?></td>
                                <td> <?php echo (!empty($loginRecordDetail['mobile']) ? $loginRecordDetail['mobile'] : '') ?></td>
                                <td><button type="button" data-id="<?php echo $loginRecordDetail['id'] ?>" onclick="editData(this)">Edit</button></td>
                                <td><button type="button" data-id="<?php echo $loginRecordDetail['id'] ?>" onclick="deleteData(this)">delete</button></td>
                            </tr>
                <?php
                            $indexRecord++;
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </body>

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" title="close" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center;">Student Form</h4>
                </div>
                <div class="modal-body">

                    <!-- modal-body  -->

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        //edit form using ajax //

        function editData(thisFun) {

            var name = $.trim($('[name="name"]').val());
            var email = $.trim($('[name="email"]').val());
            var mobile = $.trim($('[name="mobile"]').val());
            var id = $.trim($(thisFun).attr('data-id'));

            console.log(id);
            $.ajax({
                url: "http://localhost/learn/javascript/practice/edit-modalBox.php",
                type: "post",
                data: {
                    "dataId": id
                },
                success: function(response) {
                    console.log(response);
                    $('.modal-body').html(response);
                    $('#myModal').modal('show');
                },
                error: function(responceError) {

                }
            });
        }

        //update form using ajax//

        function updateform() {

            if ($("[name='student-form']").valid() != true) {
                return false;

            }

            var name = $.trim($('[name="name"]').val());
            var email = $.trim($('[name="email"]').val());
            var mobile = $.trim($('[name="mobile"]').val());
            var postId = $.trim($('[name="id"]').val());

            $.ajax({
                url: "http://localhost/learn/javascript/practice/update-modalBox.php",
                type: "post",
                data: {
                    "name": name,
                    "email": email,
                    "mobile": mobile,
                    "id": postId
                },
                success: function(response) {
                    console.log(response);
                    alert('update successfully');
                },
                error: function(responceError) {

                }
            });
        }


        $("[name='student-form']").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3,
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
                    minlength: "Please enter atleast 10 digit password",
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

                                     //delete form data //

        function deleteData(thisFun) {

            var id = $.trim($(thisFun).attr('data-id'));

            console.log(id);
            $.ajax({
                url: "http://localhost/learn/javascript/practice/delete-modalBoxData.php",
                type: "post",
                data: {
                    "dataId": id
                },
                success: function(response) {
                    console.log(response);
                    confirm('Are you sure to delete?');
                },
                error: function(responceError) {

                }
            });
        }
    </script>
</center>