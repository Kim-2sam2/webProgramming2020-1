<?php
if(isset($_COOKIE['visitedLog'])){
    $logdata = $_COOKIE['visitedLog'];
    $counter = $logdata["counter"];
    $time = $logdata["time"];
    $lasttime = date("Y년n월j일 A g시i분", $time); 

}else{
    $counter = 0;
    $lasttime = "첫 방문";
}

$result1 = setcookie('visitedLog[counter]', ++$counter, time()+60*60*24);
$result2 = setcookie('visitedLog[time]', time(), time()+60*60*24);
$result = ($result1 && $result2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page1</title>
</head>
<body>
    <div>
        <?php
            if($result){
                echo "이 페이지의 방문은 {$counter}번째 입니다.<br>";
                echo "이전 방문: {$lasttime}<hr>";
                echo "<a href='page2.php'>페이지를 이동한다.</a><br>";
                echo "<a href='reset_log.php'>페이지를 초기화한다.</a><br>";
            }else{
                echo "<span class='error'>쿠키를 사용할 수 없습니다.</span>";
            }
        ?>
    </div>
</body>
</html>