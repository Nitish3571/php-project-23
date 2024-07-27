<?php

$x = array_fill(1, 36, " ");
echo "<pre>";
// print_r(arr(0 , 36 , 2)); 
$random = array_rand($x, 20);
print_r($random);


$row1 = range(1, 36, 3);
$row2 = range(2, 36, 3);
$row3 = range(3, 36, 3);

// $rowValue1 = [1 , 4 , 7 , 10 , 13 , 16 , 19 , 22 , 25 ,28 , 31 , 34];
// $rowValue2 = [2 , 5 , 8 , 11 , 14 , 17 , 20 , 23 , 26 , 29 , 32 , 35];
// $rowValue3 = [3 , 6 , 9 , 12 , 15 , 18 , 21 , 24 , 27 , 30 , 33 , 36];

echo "<br><br>";
$diff1 = array_intersect($random, $row1);
// print_r($diff);
$valueCountRow1 = count($diff1);
echo $valueCountRow1;

echo "<br><br>";

$diff2 = array_intersect($random, $row2);
// print_r($diff);
$valueCountRow2 = count($diff2);
echo $valueCountRow2;

echo "<br><br>";

$diff3 = array_intersect($random, $row3);
// print_r($diff);
$valueCountRow3 = count($diff3);
echo $valueCountRow3;

echo "<br><br>";


if ($valueCountRow1 > $valueCountRow2) {
    if ($valueCountRow1 > $valueCountRow3) {
        echo "row1 is greater value";
    } else {
        echo "row3 is greater value";
    }
} else {
    if ($valueCountRow2 > $valueCountRow3) {
        echo "row2 is greater value ";
    } else {
        echo "row3 is greater value";
    }
}

//Reverse array 
echo "<br><br>";

$reverseRandomArray = array_reverse($random);

echo "<pre>reverese ";print_r($reverseRandomArray);


// $maxElementFound = false; 

foreach ($reverseRandomArray as $rev) {
    if( $valueCountRow1 == $valueCountRow2 &&  in_array( $rev , $row1) > in_array( $rev , $row2)){
            echo "row1 has amx"; 
            $maxElementFound = true; 
        }
        if( $valueCountRow2 == $valueCountRow3 && in_array( $rev , $row2) > in_array( $rev , $row3)){
            echo "row2 has amx";
            $maxElementFound = true; 
        }
        if( $valueCountRow1 == $valueCountRow3 && in_array( $rev , $row3) >  in_array( $rev , $row1)){
            echo "row3 has amx"; 
            $maxElementFound = true; 
    }
}

   
 

