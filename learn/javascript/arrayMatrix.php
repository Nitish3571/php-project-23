<?php


function matrix($row , $coloumn){

    $arr = [];
    for($i=0; $i<$row ; $i++){
        for($j=0; $j<$coloumn; $j++){
            $arr[$i][$j] = rand(1,100);
        }
    }
    echo '<pre>';print_r($arr);
    
    for($i = 0; $i < $row; $i++) {
        $sumRow[] = array_sum($arr[$i]);
    }
    echo '<pre>  Row sum = ';print_r($sumRow);
    
    $maxRowValue = max($sumRow);
    echo 'Max value Row = '. $maxRowValue;
    
    

}  


matrix(2,3);
