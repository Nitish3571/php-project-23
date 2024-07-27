<?php

echo "Triangle left to right <br><br>"; 
// triangle left to right
for($i = 1; $i <= 5 ; $i++){
    for($j = $i; $j >= 1; $j--){
         echo ' * ' ;
    }
    echo "<br> ";
}

echo "<br><br><br>";
echo "Triangle left to right decreasing<br><br>"; 
// triangle left to right decreasing

for($i=5; $i >=1 ; $i--){
    for($j=$i; $j>=1; $j--){
        echo ' * ' ;
    }
    echo "<br> ";

}


echo "<br><br><br>";
echo "Triangle right to left <br><br>";
// triangle right to left

for($i=1; $i<=5 ; $i++){
    for($j=4; $j>=$i; $j--){
         echo "&nbsp;&nbsp;";
    }
    for($k=1; $k<=$i; $k++){
    echo "*";
}
   echo "<br>";

}


echo "<br><br><br>";
echo "Triangle right to left decreasing<br><br>";
// triangle right to left decreasing

for($i=5; $i >=1 ; $i--){
    for($j=4; $j>=$i; $j--){
        echo "&nbsp;&nbsp;";
    }
    for($k=1; $k<=$i; $k++){
    echo "*";
}
   echo "<br>";

}

echo "<br><br><br>";
echo 'Triangle pyramid <br>';
// triangle pyramid

for($i=1; $i <=5 ; $i++){
     for($j=5; $j>=$i; $j--){
         echo "&nbsp;&nbsp;";
        }
         for($k=1; $k<=$i; $k++){
             echo ' * &nbsp;' ;
            }
            echo "<br>";

}



echo "<br><br><br>";
echo 'Triangle pyramid  decreasing<br>';
// triangle pyramid decreasing

for($i=5; $i >=1 ; $i--){
     for($j=5; $j>=$i; $j--){
         echo "&nbsp;&nbsp;";
        }
         for($k=1; $k<=$i; $k++){
             echo ' * &nbsp;';
            }
            echo "<br>";

}

?>


