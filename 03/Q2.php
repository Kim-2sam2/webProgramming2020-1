<?php
    $month = 12;

    if($month >= 3){
        $season = "봄";
        echo "{$month}월은 {$season}입니다.<br>";
    } elseif($month >= 6 && $month <=8){
        $season = "여름";
        echo "{$month}월은 {$season}입니다.<br>";
    } elseif($month >= 9 && $month <=11){
        $season = "가을";
        echo "{$month}월은 {$season}입니다.<br>";
    } elseif ($month == 12 || $month == 1 || $month == 2){
        $season = "겨울";
        echo "{$month}월은 {$season}입니다.<br>";
    } else {
        echo "잘못 입력되었습니다!<br>";
        
    }
?>