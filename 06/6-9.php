<?php

$arr = array("one", "two", "three", "four", "five");

$res = implode("/", $arr);
echo("$res");
echo("<p>");

$str = "이정환:남기범:소주호:임광빈";
$arr2 = explode(":", $str);
#$arr2 = split(':', $str, 4);

foreach ($arr2 as $key => $value) {
    echo("$key : $value <br>");
}

echo("</p>");

$str2 = "안녕?";

if(!strcmp($str2, "안녕?:")){
    echo(" 1번 문자열에 일치합니다. <br>");
}

if ($str2 == "안녕?") {
    echo(" 2번 문자열에 일치합니다. <br>");
}

if (!strcmp("abc", "ABC")) {
    echo(" 3번 문자열에 일치합니다. <br>");
}

?>