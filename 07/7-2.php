<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>폼 입력 값으로 계산</title>
</head>
<body>
    <?php
        $unitPrice = $_GET["unitPrice"];
        $quantity = $_GET["quantity"];
        $price = $unitPrice * $quantity;
        $unitPrice = number_format($unitPrice);
        $price = number_format($price);
        echo "단가 {$unitPrice}원 x {$quantity}개는 {$price}원입니다.";
    ?>
</body>
</html>