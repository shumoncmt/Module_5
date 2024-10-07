<?php
//student array with gender and name

$students = [
    ["Student A", "F"],
    ["Student B", "M"],
    ["Student C", "F"],
    ["Student D", "M"],
    ["Student E", "F"],
    ["Student F", "M"],
    ["Student G", "F"],
    ["Student H", "M"],
    ["Student I", "F"],
    ["Student J", "M"],
    ["Student K", "F"],
    ["Student L", "F"],
    ["Student M", "F"],
];
foreach ($students as $student) {
    // if ($student[1] == "F"){
    //     continue;
    // }
    // echo $student[0] . "\n";
    if ($student [1] == "M"){
        echo $student [0] . "\n";
    }
}