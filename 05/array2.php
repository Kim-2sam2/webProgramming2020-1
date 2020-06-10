<?php
    $scores = array(10,20,30,40,50,60,70,80,10,100);

    $sum = 0;

    for($a = 0; $a<10; $a++){
        $sum = $sum + $scores[$a];
    }

    $avg = $sum/10;
    echo("합계 : $sum, 평균 : $avg<br>");
?>