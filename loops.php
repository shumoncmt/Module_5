<?php
//For loop
for ($x = 0; $x<=10 ; $x++){
    echo "The Number is : $x \n";
}
//Break 
for ($x = 0; $x<= 10; $x++){
    if ($x ==13 ){
        break;
    }
    echo $x ."\n";
}
//continue

for ($x = 0; $x<= 10; $x++){
    if ($x == 13){
        break;
} 
echo $x . "\n";
}