<?php

function computeMaxGong($x, $y)
{
    if($x > $y)
    {
        $small = $y;
    } else {
        $small = $x;
    }

    for($i = 1; $i<=$small; $i++){
        if($x % $i == 0 and $y % $i == 0){
            $result = $i;
        }
    }

    return $result;
}

$num1 = 10;
$num2 = 15;

$max_gong = computeMaxGong($num1, $num2);

echo "{$num1}과 {$num2}의 최대공약수 : {$max_gong}";
?>