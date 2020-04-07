<?php
    $res = 1;
    $num = 1;

    while($num <= 10){
        $res *= $num;
        echo "{$num}! = $res<br>";
        $num ++;
    }
?>