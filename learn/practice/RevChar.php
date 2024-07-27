<?php

//Reverse charecter using charecter value
echo '<h1>Reverse charecter using charecter value</h1> ';
echo "Charecter value A to E  <br>";
for($i = 'A'; $i <= 'E'; $i++){
    echo $i;
}

echo "<br><br>";
echo "Charecter value A to E Reverse <br><br>";
for($i = 'E'; $i <= 'A'; $i--){
    echo $i;
}


//Reverse charecter using ascii 
echo ' <h1>Reverse charecter using ascii</h1>';
echo "Charecter value A to E  <br>";
for($i = 65; $i < 70; $i++){
    echo chr($i);
}

echo "<br><br>";
echo "Charecter value A to E Reverse <br>";
for($i = 69; $i >= 65; $i--){
    echo chr($i);
}

?>