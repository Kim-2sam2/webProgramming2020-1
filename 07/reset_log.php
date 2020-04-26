<?php
$result1 = setcookie('visitedLog[conter]', '', time()-3600);
$result2 = setcookie('visitedLog[time]', '', time()-3600);
$result = ($result1 && $result2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>초기화 페이지</title>
</head>
<body>
    <div>
        <?php
            if($result){
                echo "방문 로그의 쿠키를 파기했습니다. <hr>";
                echo "<a href='page1.php'>Page 1로 돌아간다</a>";
            } else {
                echo "<span class='error'>쿠키 파기에 오류 발생 </span>";
            }
        ?>
    </div>
</body>
</html>