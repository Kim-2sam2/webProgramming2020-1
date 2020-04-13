<?php
    function foo(&$str){
        $str .= "world...";
    }

    function swap(&$a, &$b){
        $temp = $b;
        $b = $a;
        $a = $temp;

    }

    $a = 10;
    $b = 15;
    echo ("\$a : $a - \$b : $b<br>");

    swap($a, $b);

    echo ("AfterSwap>\$a : $a - \$b : $b<br>");

    $str = "안녕";
    echo("$str<br>");

    foo($str);
    echo("$str<br>");
?>