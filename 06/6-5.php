<?php

$data = "사과, 배, 귤, 포도";
$delimiter = ",";
$namelist = explode($delimiter, $data);
print_r($namelist);

echo "<br><br>";

$data = ["김철수", "이민우", "박영배"];
$plus = "씨, ";
$nameList = implode($plus, $data);
$nameList .= "씨"; #last index
echo($nameList);

?>