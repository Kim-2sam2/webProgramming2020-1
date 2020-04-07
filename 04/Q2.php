<?php
    $count = 0;
    
    for ($num = 100; $num < 501; $num++){
        if(($num % 2) == 0){
            echo "$num ";
            $count ++;
            
            if(($count % 2) == 0){
                echo "<br>";
            }
        }
        
    }
?>