<?php

$namelist = ["공유", "박보검", "송중기"];

foreach ($namelist as $value) {
    echo $value, "<br>";
}

echo "==================================<br>";

for($i = 0; $i <count($namelist); $i++){
    echo "$namelist[$i] <br>";
}

echo "==================================<br>";

$data = ["ID" => "abc", "상품명" => "초콜릿", "가격" => 3800];

foreach ($data as $key => $value) {
    echo "<li>", $key, ": ", $value, "</li>";
}

?>