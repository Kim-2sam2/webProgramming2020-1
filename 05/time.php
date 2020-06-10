<?php
    $res = mktime(10,11,23,3,20,2019);
    echo("timestamp으로 ${res}은 2019년 3월 20일 10시 11분 23초로 다음과 같이 출력할 수 있습니다.<p>");

    $str = date("년도출력 - Y 또는 y",$res);
    echo("$str<br>");

    $str = date("월출력 - M 또는 m",$res);
    echo("$str<br>");

    $str = date("일출력 - d 또는 j",$res);
    echo("$str<br>");

    $str = date("요일출력 - l 또는 D 또는 w",$res);
    echo("$str<br>");

    $str = date("분출력 - i",$res);
    echo("$str<br>");

    $str = date("초출력 - s",$res);
    echo("$str<br>");
    
    $str = date("분출력 - i",$res);
    echo("$str<br>");
    
    $str = date("2019년의 몇일째 출력 - z",$res);
    echo("$str<br>");
    
    $str = date("Y년 m월 d일 H시 i분 s초 입니다.",$res);
    echo("$str<br>");
    
    $str = date("Y년 m월 d일 H시 i분 s초 입니다.//현재시간");
    echo("$str<br>");
    

    
?>