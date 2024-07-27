<?php

//print value even number as well as divided by 5
echo '<h3>print value even number as well as divided by 5</h3>';
function evenNumber($a, $b)
{
    for ($i = $a; $i <= $b; $i++) {
        if ($i % 2 == 0 && $i % 5 == 0) {
            echo "$i <br>";
        }
    }
}
//function call
echo evenNumber(1, 100),"<br>";

$a = 10;
$b = 20;
echo $a.$b."<br>";
echo "hello","Guys ", $a ,'&nbsp;' , $b ," number","<br>";
echo "hello"."Guys"."$a $b"."number"."<br>";
echo (min(10,20,-20,520,-520,50,40)."<br>");
define("digit",100);
define("diGit",200);
echo digit;
?>
