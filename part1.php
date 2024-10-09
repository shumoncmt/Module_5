<?php 
//Local Variable
/*
function greet1 (){
    $massage = "Hello  PHP 1 \n";  
      echo $massage;                                                                                           
}
function greet2 (){
    $massage = "Hello PHP 2 \n";
    echo $massage;
}
greet1();
greet2();
*/

//Global Variable
$a=10;
$b =20;
$c = 50;
function addTwo (){
   global $a, $b;
    echo $a+$b;
    echo "\n";
}

function addThree(){
    global $a, $b ;
    echo $a+$b+10;
    echo "\n";
}

function addFour(){
    global $a, $b , $c;
     echo $a+$b+$c+100;
     echo "\n";

}
function addfive(){
  global $a, $b , $c;
    echo $a +$b +$c +10 +50;
}
addTwo();
addThree();
addFour();
addfive();