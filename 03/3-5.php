<?php
function countIt(){
    static $i = 0;
    echo("$i");
    $i ++;
}

countIt();
countIt();
countIt();
countIt();
countIt();
?>