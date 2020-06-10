<?php
    $subject = array("파이썬", "PHP", "자바스크립트", "사진", "영화감상");
    $name = array("김", "이", "정", "황", "이", "최", "함", "도", "강");

    $score = array(array(80, 79, 90, 89, 100, 87, 85, 83, 96, 99),
                        array(70, 88, 70, 85, 60, 95, 77, 89, 82, 93),
                        array(80, 79, 90, 89, 100, 87, 85, 83, 96, 99),
                        array(70, 88, 70, 85, 60, 95, 77, 89, 82, 93),
                        array(85, 66, 80, 88, 90, 86, 85, 93, 88, 79));

    for($i = 0; $i <= 4; $i++){
        $sum = 0;
        for($j = 0; $j <= 4; $j++){
            $sum = $sum + $score[$j][$i];
        }

        $avg = $sum / 5;
        echo("{$name[$i]}의 합계 : $sum, 평균 : $avg<br>");
    }
?>  