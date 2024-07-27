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
        <tbody>
        <tr>
            <td>1</td>
            <td>Nitish</td>
            <td>CE</td>
            <td>A2</td>
            <td>206</td>
            <td><button class='delete' ><i class="fa fa-remove"></i></button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Kishan</td>
            <td>CE</td>
            <td>A2</td>
            <td>205</td>
            <td><button class='delete' ><i class="fa fa-remove"></i></button></td>
        </tr>
        <tr class='last'>
            <td>3</td>
            <td>Raja</td>
            <td>IT</td>
            <td>A1</td>
            <td>201</td>
            <td><button class='delete' ><i class="fa fa-remove"></i></button></td>
        </tr>
        </tbody>
    </table>
    <button onclick="InsertData()">add</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
     function numberRows() {
      $('.srNO').each(function(i) {
            $(this).val(i + 1);
      });
        }
    numberRows();

    function InsertData(){
        var index = 1;
        index++;
        console.log(index);
        var srNo = 4;
        var insert = "<tr><td>'+index+'</td><td>Ranajee</td><td>IT</td><td>A1</td><td>203</td><td><button class='delete' ><i class='fa fa-remove' onclick='removeData()'></i></button></td></tr>"
        // console.log(srNo);
        $("table").append(insert);
    }
    function removeData(){
    $("table").on('click', '.delete', function () {
        $(this).closest('tr').remove();
    });
}
</script>
</html>






//InsertData 
<!-- //  $("<tr class='delete'><td>4</td><td>Kripanidhi</td><td>IT</td><td>A1</td><td>203</td><td><button><i class='fa fa-remove' onclick='removeData()'></i></button></td></tr>").insertAfter('.last'); -->