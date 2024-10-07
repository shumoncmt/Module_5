<?php
//calculator
// function add($number1, $number2){
//     $result = $number1 + $number2;
//     return $result;
// }
// function sub($number1, $number2){
//     $result = $number1 - $number2;
//     return $result;
// }
// function mul($number1, $number2){
//     $result = $number1 * $number2;
//     return $result;
// }

// function div($number1, $number2){
//     $result = $number1 / $number2;
//     return $result;
// }
// function mod($number1, $number2){
//     $result = $number1 % $number2;
//     return $result;
// }
// $summation = add(10, 20);
// echo $summation . "\n";

// $subtraction = sub(10, 20);
// echo $subtraction . "\n";

// $multiplication = mul(10, 20);  
// echo $multiplication . "\n";

// $division = div(10, 20);    
// echo $division . "\n";

// $modulus = mod(10, 20);
// echo $modulus . "\n";      
// $modulus = mod(10, 20);
// echo $modulus .  "\n";   

function add ($num1 , $num2){
    $result =$num1 +$num2;
    return $result;
}

function sub ($num1 , $num2){
    $result = $num1 - $num2;
    return $result;
}

function mul ($num1 , $num2){
    $result = $num1 * $num2;
    return $result;
}
function division ($num1, $num2){
    $result = $num1 / $num2;
    return $result;
}

function mudulass ($num1, $num2){
    $result =  $num1 % $num2;
    return $result;
}
$mudulass = mudulass( 20, 8);
echo "The Modulus is " . $mudulass . "\n";


$divisibleNumber = division (100, 10);
echo "The Division is " . $divisibleNumber . "\n";


$multiplication = mul (100, 100);
echo "The Multiplication is " . $multiplication . "\n";

$subtraction = sub (5000, 500);
echo "The Subtraction is " . $subtraction . "\n";


$summation = add(500, 5001);
echo "The Summation is " .$summation. "\n"; 
