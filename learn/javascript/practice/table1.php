<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <table border="2px solid black">
        <thead>
            <tr>
                <th class="srNO">Sr.no</th>
                <th>Name</th>
                <th>Branch</th>
                <th>Class</th>
                <th>Roll no</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="table-data">
            <tr>
                <td align="center">1</td>
                <td>Nitish</td>
                <td>CE</td>
                <td>A2</td>
                <td>206</td>
                <td><button class='delete' onclick="removeData(this)"><i class="fa fa-remove"></i></button></td>
            </tr>
        </tbody>
    </table>
    <button onclick="InsertData()">add</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    

    function InsertData() {

        var count_row_tr = $('.table-data').find('tr').length;
        var index = count_row_tr+1;
        // console.log(count_row_tr);

        var html = '';
        html += '<tr>';
        html += '<td class="sr-no" align="center">' + index + '</td>';
        html += '<td>Ranajee ' + index +'</td>';
        html += '<td>IT ' + index +'</td>';
        html += '<td>A1 ' + index +'</td>';
        html += '<td>203 ' + index +'</td>';
        html += '<td><button class="delete" onclick="removeData(this)"><i class="fa fa-remove" ></i></button></td>';
        html += '</tr>';

        if (count_row_tr > 0) {
            $.trim($(html).insertAfter($('.table-data').find('tr:last')));
        }else {
            $('.table-data').html(html);
        }
    }

    function removeData(thisitem) {
        newIndex = 1;

        $(thisitem).parents('tr').remove();
        $(thisitem).parents('tr').find('.sr-no').html();
        $(".table-data tr").each(function() {
            // if(deleteRowIndex < index){
            $(this).find('.sr-no').html(newIndex++);
            // }
        });

    }
</script>

</html>





