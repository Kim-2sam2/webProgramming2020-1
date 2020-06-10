<?php
    $num = array(10,20,50,40,30,70,80,90,100,60);
    $count = 10;

    echo("정렬 전");
    for($a = 0; $a <10; $a++){
        echo("$num[$a] ");
    }

    echo("<br>");

    for($i = $count-2; $i >= 0; $i--){
        for($j = 0; $j <= $i; $j++){
            if($num[$j]  > $num[$j+1]){
                $tmp = $num[$j];
                $num[$j] = $num[$j+1];
                $num[$j+1] = $tmp;
            }
        }
    }

    echo("버블 정렬(오름차순) 후 : ");
    for($a = 0; $a < 10; $a++){
        echo("$num[$a] ");
    }
?>
