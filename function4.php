<?php
    function evenOrOdd($number){
        if ($number % 2 == 0){
            return "Even";
        }
        return "Odd";
    }
$n=1;
$result = evenOrOdd($n);
echo "The Number $n is $result \n";

echo "\n";

function allNumber($number){
    if ($number % 2 == 0){
        return "Even";
    }
    return "Odd";
}
$n=50;
$result = allNumber($n);
echo "The Number $n is $result \n";

echo "This is Heading All Number This Is Checking ";

