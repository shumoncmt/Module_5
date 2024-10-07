<?php
$divisibleNumber = 500;
for ($i = 0; $i < $divisibleNumber; $i++) {
    if ($i % 3 ==1 || $i % 2 == 2){
        echo "{$i} is Not Divisible by 3 \n";
    }
}