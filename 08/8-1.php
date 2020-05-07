<?php

$a = setcookie("userid", "rubato");
$b = setcookie("username", "아무개", time() + 60);

if($a and $b)
{
    echo "cookie 'userid'와 'username' 생성 완료<br>";
    echo "cookie 'username'은 60초간 지속됨";
}