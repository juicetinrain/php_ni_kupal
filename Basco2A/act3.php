<?php
$product1_price = 150;
$product1_qty = 2;
$product2_price = 75;
$product2_qty = 4;
$product3_price = 250;
$product3_qty = 5;

$total = ($product1_price*$product1_qty) + ($product2_price*$product2_qty) + ($product3_price*$product3_qty);

if ($total >= 1000 && $total <= 1999.99) {
    $discount = $total * 0.1;
    $FinalTotal = $total - $discount;
} elseif ($total >= 2000 && $total <= 2999.99) {
    $discount = total * 0.15;
    $FinalTotal = $total - $discount;
} elseif ($total >= 3000) {
    $discount = total * 0.2;
    $FinalTotal = $total - $discount;
} else {
    $discount = 0;
}
echo "Total amount: ".$total;
echo "<br>Discount amount: ".$discount;
echo "<br>Final total after discount: ".$FinalTotal;
?>