<?php
$a = 100;

Function Test(){
    global $a;
    echo ("변수 \$a의 값은 ${a}입니다.");
}

Test();
?>