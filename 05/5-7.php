<?php
    $var1 = "apple";
    $$var1 = "juice";

    echo("\$var1 = $var1 / \$\$var1 = ${$var1}<br>");
    echo("\$var1 = $var1 / \$apple = $apple");
?>