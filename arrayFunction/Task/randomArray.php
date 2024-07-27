<?php

$x = array_fill(1 , 36 , " ");
echo "<pre>";
// print_r(arr(0 , 36 , 2)); 
$random = array_rand($x , 20);
print_r($random);


$row1 = range(1 , 36 , 3);
$row2 = range(2 , 36 , 3);
$row3 = range(3 , 36 , 3);

// $rowValue1 = [1 , 4 , 7 , 10 , 13 , 16 , 19 , 22 , 25 ,28 , 31 , 34];
// $rowValue2 = [2 , 5 , 8 , 11 , 14 , 17 , 20 , 23 , 26 , 29 , 32 , 35];
// $rowValue3 = [3 , 6 , 9 , 12 , 15 , 18 , 21 , 24 , 27 , 30 , 33 , 36];

echo "<br><br>";
$diff1 = array_intersect($random , $row1);
// print_r($diff);
$ValueCountRow1 = count($diff1);
echo $ValueCountRow1;
 
echo "<br><br>";

$diff2 = array_intersect($random , $row2);
// print_r($diff);
$ValueCountRow2 = count($diff2);
echo $ValueCountRow2;

echo "<br><br>";

$diff3 = array_intersect($random , $row3);
// print_r($diff);
$ValueCountRow3 = count($diff3);
echo $ValueCountRow3;

echo "<br><br>";

// if($row1>$row2){
    
    //     echo "row1 is greater value";
    // }
    
    //     else if($row1>$row3){
        //         echo "row2 is greater value";
        //     }
        
        //     else{
            //         if($row2>$row3){
                //     echo "row3 is greater value ";
                //      }
                //  }   
                
                
                
                if ($ValueCountRow1>$ValueCountRow2){
                    if($ValueCountRow1>$ValueCountRow3){
                        echo "row1 is greater value";
                    }
                    else{
                        echo "row3 is greater value";
                    }
                }
                else{
                    if($ValueCountRow2>$ValueCountRow3){
                        echo "row2 is greater value ";
                    }
                    else{
                        echo "row3 is greater value";
                    }
                    
                }
                
                
                //Reverse array 
                echo "<br><br>";

                

      //row reverse ke liye  
                
                // $reverserow1 = array_reverse($diff1);
                // print_r( $reverserow1);
                // $rowValueLeast1 = $reverserow1[0];
                // echo $rowValueLeast1;
                // echo "<br><br>";
                
                // $reverserow2 = array_reverse($diff2);
                // print_r( $reverserow2);
                // $rowValueLeast2 = $reverserow2[0];
                // echo $rowValueLeast2;
                // echo "<br><br>";
                
                // $reverserow3 = array_reverse($diff3);
                // print_r( $reverserow3);
                // $rowValueLeast3 = $reverserow3[0];
                // echo $rowValueLeast3;
                // echo "<br><br>";


// if ($ValueCountRow1 == $ValueCountRow2 && $rowValueLeast1 > $rowValueLeast2){
//     echo "row1 is greater value";
// }
//    else if($ValueCountRow1 == $ValueCountRow3 && $rowValueLeast2 > $rowValueLeast3){
//        echo "row2 is greater value ";
//     }
//     else if($ValueCountRow2 == $ValueCountRow3 && $rowValueLeast1 > $rowValueLeast3){
//         echo "row3 is greater value";
//     }
//     else{
//     echo "Not found ";
// }


//match find in rowValueLeast and ValueCountRow1

// if ($ValueCountRow1 == $ValueCountRow2 && array_intersect($rowValueLeast1 , $rowValueLeast2)){
//     if($ValueCountRow1 == $ValueCountRow3 && array_intersect($rowValueLeast1 , $rowValueLeast3)){
//         echo "row1 is greater value";
//     }
//     else{
//         echo "row3 is greater value";
//     }
// }
// else{
//     if($ValueCountRow2 == $ValueCountRow3 && array_intersect($rowValueLeast2 , $rowValueLeast3)){
//         echo "row2 is greater value ";
//     }
//     else{
//         echo "row3 is greater value";
//     }
    
// }

 
$reverseRandomArray = array_reverse( $random);
print_r($reverseRandomArray) ;

foreach($reverseRandomArray as $rev){
    // echo array_shift($rev);
    echo "<pre>";
    print_r($rev);

}




?>