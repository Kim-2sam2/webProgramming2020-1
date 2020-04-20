<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>이름 배열</title>
</head>
<body>
<pre>
<?php
$member1 = ['name' => '김철수', 'age' => 29];
$member2 = ['name' => '이민우', 'age' => 32];
$member3 = ['name' => '박영배', 'age' => 37];
$member4 = ['name' => '강소라', 'age' => 26];
$member5 = ['name' => '이수지', 'age' => 32];
$teamA = [$member1, $member2, $member3];
$teamB = [$member4, $member5];
echo ("Team A: \n");
print_r($teamA);
echo ("Team B: \n");
print_r($teamB);
?>
</pre>    
</body>
</html>