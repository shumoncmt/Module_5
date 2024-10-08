<?php


// function allFunction()
// {   
//     function sayHello(){
//         echo "Hello PHP Function ";
    
//     }
//     sayHello();
// }

// allFunction();

//PHP Arguments

function argumentsPs($name, $age){
    echo "Hello $name  and $age\n";
}
argumentsPs("Abir", "52");
argumentsPs("Shakil", "20");
argumentsPs("Shumon", "66");
argumentsPs("Rajib", "63");

// PHP Call By Reference

function adder (& $str2){
    $str2 = "Call BY Reference";
}
$str = "Hello";
adder($str);
echo $str;
echo "\n";
//Default Argument Value

function hello ($name= "Sonoo"){
    echo "Hello $name \n";

}
hello ("Rajesh");
hello();
hello("shakil");
echo "\n";

//Returning Value
function cube ($n){
    return $n*$n*$n;
}
echo "Cube of 10 is " . cube(10);