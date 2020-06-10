<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>세션 시작 페이지</title>
</head>
<body>
    <div>
        이 페이지에서 구입하면 쿠폰 할인이 적용됩니다. <br>
        <?php
        $_SESSION["coupon"] = "ABC123";
        ?>
        <a href="7-4.php">다음페이지로</a>
    </div>
</body>
</html>