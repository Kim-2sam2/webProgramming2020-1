<?php
    function countIt(){
        static $i = 0;
        $i++;
        echo("$i");
    }
    countIt();
    countIt();
    countIt();
    countIt();
    
?>