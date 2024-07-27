<html>
    <head>
        <title>calculator</title>
        <style>
            .container{
                text-align: center;
                height: 450px;
                width: 300px;
                margin-left: 40%;
                margin-top: 10%;
                border: 2px solid black;
            }
            div.screen {
                width: 85%;
                text-align: right;
                font-size: 2em;
                margin-left: 0.5em;
                padding-right: 0.5em;
                border: 1px solid #888;
            }
            div{
                height: auto;
                width: 300;
            }
            input{
                font-size: 20px;
                height: 50px;
                border: 2px solid black;
                
            }
            .btn1{
                margin-top: 5px;
            }
            .btn{
                margin: 5px 10px;
                font-size: 30px;
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2 style="text-transform:uppercase; font-size:35px; margin:5px 0px " >calculator</h2>
            <div class="result">
                <input type="text" class="screen">
                <!-- <div class="screen">0123456789</div> -->
            </div>
            <div class="btn1">
                <button class="btn" value="7">7</button>
                <button class="btn" value="8">8</button>
                <button class="btn" value="9">9</button>
                <button class="btn" value="/">/</button>
            </div>
            <div class="btn1">
                <button class="btn" value="4">4</button>
                <button class="btn" value="5">5</button>
                <button class="btn" value="6">6</button>
                <button class="btn" value="*">*</button>
            </div>
            <div class="btn1">
                <button class="btn" value="1">1</button>
                <button class="btn" value="2">2</button>
                <button class="btn" value="3">3</button>
                <button class="btn" value="-">-</button>
            </div>
            <div class="btn1">
                <button class="btn" value=".">.</button>
                <button class="btn" value="0">0</button>
                <button class="btn" value="=">=</button>
                <button class="btn" value="+">+</button>
            </div>
        </div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>

$("button").click(function(){
var buttonPressed = $(this).html();
  console.log(buttonPressed);
  $('.screen').val(buttonPressed);
//   if(buttonPressed == '+'){
//     alert('addition button press');
//   }
});

    </script>
</html>



// function submitValue(){
//     var checkValidationFlag= true;
//     $('.value').each(function(){
//        if(($('.value').val() == '' || $('.value').val() == null)){
//         alert('please enter input field');
//         $('.value').focus();
//         return 0;
//     }
//     checkValidationFlag = false;
//     });
    
// }