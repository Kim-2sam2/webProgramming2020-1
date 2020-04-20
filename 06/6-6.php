<?php
$myArray = ["a", "b", "c", "d", "e"];
echo '실행 전 : $myArray', "<br>";
print_r($myArray);

$removed = array_splice($myArray, 1, 2);
echo '<br>실행 후 : $myArray', "<br>";
print_r ($myArray);

echo '<br>반환 : $removed', "<br>";
print_r ($removed);

echo "<br><br>";

$myArray2 = ["a" => 10, "b" => 20, "c" => 30, "d" => 40, "e" => 50];
echo '<br>실행 전 : $myArray2', "<br>";
print_r($myArray2);

$removed2 = array_splice($myArray2, 1, 2);
echo '<br>실행 후 : $myArray2', "<br>";
print_r($myArray2);
echo '<br>반환 : $removed', "<br>";
print_r($removed2);

?>
