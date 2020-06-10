<?php
    echo "<html>
                <head><title>20160705 김현우</title></head>
                <body></body>
            </html>";

    for($i=2; $i<10; $i++){
        echo "{$i}단<br>";
        for($j=1; $j<10; $j++){
            echo"$i * $j = ", $i * $j, " | ";
        }
        echo "<br>";   
    }
    $s = "*";
    for($i=1; $i<11; $i++){
        echo "$s<br>";
        $s .= "*";
    }
?>