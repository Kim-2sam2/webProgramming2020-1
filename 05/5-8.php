<?php
    $comment = "안녕하세요 '아무개'입니다.";
    echo ("addslashes()함수 호출 전 $comment<p>");

    $comment = addslashes($comment);
    echo ("addslashes()함수 호출 후 $comment<p>");

    $comment = stripslashes($comment);
    echo ("stripslashes()함수 호출 후 $comment<p>");

    $a = 18.2;
    $b = 7.4;

    $sum = $a + $b;
    $ext = $a - $b;

    $res = sprintf("%d", $sum);
    echo("$res<br>");

    $res = sprintf("%f", $sum);
    echo("$res<br>");

    $res = sprintf("%04d", $sum);
    echo("$res<br>");

    $res = sprintf("%06.3f", $sum);
    echo("$res<br>");

    $res = sprintf("%03.2f - %0.2f", $sum, $ext);
    echo("$res<br>");

    $res = sprintf("%d - %c", 97, 97);
    echo("$res<br>");


?>