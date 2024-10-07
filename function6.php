<?php
function addFiveNumber($num1, $num2, $num3, $num4, $num5){
        $sum = $num1 + $num2 + $num3 + $num4 + $num5;
        return $sum;
}
$sum = addFiveNumber(10,10,10,10,10);
echo "The Sum of  10,10,10,10,10 is= " . $sum. "\n";