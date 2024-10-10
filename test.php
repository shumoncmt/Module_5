<?php
// $number = [15, 65, 80, 89, 30, 89, 658, 11110, 02];
// $largest = max($number);
// echo " The Largest Element is  $largest";


function Largest ($x , $y, $z){
    $max = $x;
    if ($x>= $y && $x <= $z)
    $max = $x;
 if ($y>= $y && $y <= $z)
 $max = $y;

if ($x>= $y && $x <= $z)
$max = $x;
echo "Largest  Number among $x, $y and $z is : $max \n";
}
Largest(100, 101, 25);
Largest(520, 521, 262 );
echo "\n";
