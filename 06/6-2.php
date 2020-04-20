<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>이름 목록</title>
</head>
<body>
<pre>
<?php
$teamA = ["김철수", "이민우", "박영배"];
$teamB = ["김소라", "이수지"];
echo $teamA[0], "씨\n";
echo $teamA[1], "씨\n";
echo $teamA[2], "씨\n\n";
$teamA[1] = "김민재";
echo $teamA[0], "씨\n";
echo $teamA[1], "씨\n";
echo $teamA[2], "씨\n\n";
function teamList($teamname, $namelist){
    echo "{$teamname}", "\n";
    for ($i=0; $i < count($namelist); $i++) { 
        echo "<li>", $namelist[$i], "</li>";
    }
}
teamList('A팀', $teamA);
teamList('B팀', $teamB);
?>
</pre>
</body>
</html>