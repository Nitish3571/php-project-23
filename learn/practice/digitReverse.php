<?php

$i=123456;
while($i>1)
{
    $rev = $i % 10;
    echo "$rev";
    $revNo = ($rev * 10) + $rev;
    $i = (int)$i / 10;
}

?>