<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$n3 = $_POST['num3'];
$n4 = $_POST['num4'];
$sum = $n1+$n2;
$diff = $n4-$n3;
$prod = $n1*$n3;
$quo = $n2/$n3;

echo "The sum of $n1 and $n2 is $sum";
echo "<br>The difference of $n4 and $n3 is $diff";
echo "<br>The product of $n1 and $n3 is ".round($prod, 2);
echo "<br>The quotient $n2 and $n3 is ".round($quo, 2);
?>