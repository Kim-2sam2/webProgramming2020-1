<?php
$a = 12;
$b = 5.2;

$res = $a + $b;
echo("더하기 결과 : $res<br>");

$res = $a - $b;
echo("빼기 결과 : $res<br>");

$res = $a * $b;
echo("곱하기 결과 : $res<br>");

$res = $a % $b;
echo("나머지 계산 결과 : $res<br>");

if($a < $b){
    echo("\$b 는 \$a 보다 크다.<br>");
} else {
    echo("\$a 는 \$b 보다 크다.<br>");
}

$a = "5";
echo "$a<br>";
$a += "8";
echo("$a<br>");
$a -= "4";
echo("$a<br>");
?>