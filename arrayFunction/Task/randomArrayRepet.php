<?php


$y = [1 , 2, 5 ,8 ,4 , 3 , 7];
$random1 = array_rand($y, 4);
$random2 = array_rand($y, 4);
$random3 = array_rand($y, 4);
$random4 = array_rand($y, 4);
$random5 = array_rand($y, 4);

$allRandomArray = array_merge($random1 , $random2 , $random3 , $random4 , $random5);
echo "<pre>";
print_r($allRandomArray);
echo "<br><br>";

$countValue = array_count_values($allRandomArray);
echo "<pre>";
print_r($countValue);


//using function 

function repeationValue ($repet){
    $result = 1;
    switch($repet){
        case 1:
            $result = 1;
            break;
        case 2:
            $result = 1.5;
            break;
        case 3:
            $result = 2.25;
            break;
        case 4:
            $result = 2.5;
          break;
        default:
            $result = (  ( ( $repet-4) * 0.25 ) + 2.5  );
            break;
    }
    return $result;
}

foreach($countValue as $x => $y){
    echo "weightage value repetation of " . $x . " = " . repeationValue($y) . "<br><br>";
}




// //using foreach loop
echo "<h2>weightage value of repetation using function</h2>";

echo "<br><br><br>";

echo "<h2>weightage value of repetation using switch</h2>";
foreach($countValue as $x => $y){
switch($y){
    case 1 :
        echo "weightage value repetation of " . $y . " = " . 1 . "<br>";
        break;
    case 2:
        echo "weightage value repetation of " . $y . " = " . 1.5 . "<br>";
        break;
    case 3:
        echo "weightage value repetation of " . $y . " = " . 2.25 . "<br>";
        break;
    case 4:
        echo "weightage value repetation of " . $y . " = " . 2.5 . "<br>";
        break;
    default :
    echo "weightage value repetation of " . $y . " = " . ($y-4) * 0.25 +2.5 . "<br>";


}
}

?>