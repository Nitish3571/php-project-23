<?php

?>

<html>
    <label>FirstNumber</label>
    <input type="number" class="fNum" name="fNum" ><br><br>
    <label>Operator</label>
    <input type="text" class="operator" onblur="checkValidation()" name="operator"><br><br>
    <label>SecondNumber</label>
    <input type="number" class="secNum" name="secNum"><br><br>
    <p id="value"></p>
    <input type="button" value="value" onclick="submitValue()" class="btn">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>

function submitValue(){
    var result = '';
    var fNum = $('[name="fNum"]').val();
    var operator = $('[name="operator"]').val();
    var checkValidationOperator = (operator === '+' || operator === '-' || operator === '*' || operator === '/');
    var  secNum = $('[name="secNum"]').val();

    if(checkValidationOperator == true){
            if(operator === '+'){
              result =parseFloat(fNum) + parseFloat(secNum);

            }
            if(operator === '-'){
               result = fNum - secNum;

            }
            if(operator === '*'){
                result = fNum * secNum;
                
            }
            if(operator === '/'){
                result = fNum / secNum;

            }
        }else{
            result = 'Invailed Operator';
        }
        // alert('Result = ' + result)
        document.getElementById('value').innerHTML = 'Result = ' + result;
}

    </script>
</html>