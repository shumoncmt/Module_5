<?php
//User Login 
// function loginUser($userName, $password) {
//     if (validUserName($userName)){
//         echo "Fail User Name";

//     } else if (validPassword($password)){
//         echo "Fail Password";
//     } else if (!matching ($userName, $password)){
//         echo "Fail Matching";
//     }else {
//         login();
//     }

// }

// function validUserName($userName){
//     if (empty($userName)){
//         return true;

//     }else {
//         return false;
//     }
// }
// function validPassword($password){
//     if (empty($password)){
//         return true;

//     }else{
//         return false;
//     }
// }

// function matching ($userName, $password){
//     if ($userName == "abc" && $password == "123"){
//         return true;

//     }else {
//         return false;
//     }
// }


// function login(){
//     echo "Login successful";
// }
// loginUser("abc", "123");

// Password validation


function loginUser2($userName1, $password1){
    if (validUserName1($userName1)){
        echo "Fall Login";

    }  else if (ValidPassword1($password1)){
        echo "Fall Password";
    } else if(!matching1($userName1, $password1)) {
        echo "Fall Matching";

    } else {
        login2();
    }

}
function validUserName1($userName1){
    if (empty($userName1)){
        return true;

    }else{
        return false;
    }
}
function ValidPassword1($password1){
    if (empty($password1)){
        return true;

    } else {
        return false;
    }
}
function matching1($userName1, $Password1){
    if ($userName1 == "abc" && $Password1 == "123"){
        return true;
    } else {
        return false;
    }
}

function login2(){
    echo "Login Successful";
}
loginUser2 ("abc", "123");

