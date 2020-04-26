<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>확인페이지</title>
</head>
<body>
    <div>
        <?php
            if(isset($_SESSION["coupon"])){
                $coupon = $_SESSION["coupon"];
                $couponList = ["ABC123", "XYZ999"];
                if(in_array($coupon, $couponList)){
                    echo"{$coupon}는 사용할 수 있는 쿠폰 코드입니다.";
                } else{
                    echo"{$coupon}는 사용할 수 없는 쿠폰 코드입니다.";
                }
            } else{
                echo "세션 오류입니다.";
            }
        ?>
    </div>
</body>
</html>