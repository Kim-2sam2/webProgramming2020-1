<?php
$data = [23, 16, 8, 42, 15, 4];
echo (" <br> sort 정렬 전: ");
print_r($data);
echo(" <br> sort 정렬 후: ");
sort($data);
print_r($data);

print_r(" <br> rsort 정렬 후: ");
rsort($data);
print_r($data);
echo "<br>";

$users = array("iii" => "box",
                    "bcd" => "apple",
                    "baa" => "cow");

echo(" <br> asort 정렬 전: ");
print_r($users);
echo(" <br> asort 정렬 후: ");
asort($users);
print_r($users);
echo(" <br> arsort 정렬 후: ");
arsort($users);
print_r($users);


?>