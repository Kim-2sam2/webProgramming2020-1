<?php
$goods = [
    "id" => "R56",
    "size" => "M",
    "price" => 2340
];

print_r($goods);

echo "<br><br>";
echo "id: " . $goods['id'] . "<br>";
echo "size: " . $goods['size'] . "<br>";
echo "price: " . $goods['price'] . "<br>";

$user = [];
$user['name'] = "수지";
$user['address'] = "서울";
$user['age'] = 23;

print_r($user);
?>