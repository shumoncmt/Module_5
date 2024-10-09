<?php
//User Login 
function loginUser($userName, $password) {
    if (validUserName($userName)){
        echo "Fail User Name";

    } else if (validPassword($password)){
        echo "Fail Password";
    } else if (!matching ($userName, $password)){
        echo "Fail Matching";
    }else {
        login();
    }

}

function validUserName($userName){
    if (empty($userName)){
        return true;

    }else {
        return false;
    }
}
function validPassword($password){
    if (empty($password)){
        return true;

    }else{
        return false;
    }
}

function matching ($userName, $password){
    if ($userName == "abc" && $password == "123"){
        return true;

    }else {
        return false;
    }
}


function login(){
    echo "Login successful";
}
loginUser("", "");

