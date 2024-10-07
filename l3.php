<?php
$divisibleNumber = 25;
for ($i = 0; $i < $divisibleNumber; $i++) {
    if ($i % 3 ==1 || $i % 3 == 2){
        echo "{$i} is Not Divisible by 3 \n";
    }
}

//  5 divisible Num list

for ($i = 0; $i < $divisibleNumber; $i++) {
    if ($i % 5 ==0 ){
        echo "$i Divisible Number \n";
    }
}