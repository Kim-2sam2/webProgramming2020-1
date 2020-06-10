<?php
    function price ($unitPrice, $quantity){
        $shippingfee = 2500;
        $deleveryfee = $unitPrice * $quantity;

        if($deleveryfee < 10000){
            $deleveryfee += $shippingfee;
        }
        
        return $deleveryfee;
    }
?>

<!DOCTYPE html>
<html>
<body>
4000원 짜리를 2개 구입할 때의 금액은
    <?php
        $price1 = price(4000, 2);
        echo "{$price1}원 <br>";
    ?>
2500원 짜리를 5개 구입할 때의 금액은
    <?php
        $price2 = price(2500, 5);
        echo "{$price2}원 <br>";
    ?>
</body>
</html>