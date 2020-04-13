<?php
    $timeinfo = getdate(time());

    foreach($timeinfo as $key => $value){
        echo("$key : $value <br>");
    }

    echo("<br>");
    echo($timeinfo["year"]." - ". $timeinfo["month"]." - ". $timeinfo["mday"]." - ". $timeinfo["weekday"]);
?>