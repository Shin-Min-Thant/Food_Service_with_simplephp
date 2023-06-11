<?php 
include_once("dbconnect.php");
function RegisterUser($name,$address,$email,$password){
    if(CheckuserName($name) && CheckAddress($address) && CheckEmail($email) && CheckPassword($password)){
        return insertUser($name,$address,$email,$password);
    }else{
        return "Fail";

    }
}

function LoginName($email,$password){
    if(CheckEmail($email) && CheckPassword($password)){
        return loginUser($email,$password);
    }else{
        return "Fail";

    }
}
function CheckuserName($name){
    if(strlen($name) >= 5){
        $bol = preg_match("/^[a-zA-Z]+$/",$name);
        return $bol;
    }else{
        echo "Username must have numbers and word character";
    }
}

function CheckAddress($address){
    if(strlen($address) >= 2){
        $bol = preg_match("/^[a-zA-Z]+$/",$address);
       return $bol;
    }else{
        echo "Address Fail";
    }
}


function CheckEmail($email){
    if(strlen($email) >= 13){
        $bol = preg_match("/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,5}+$/",$email);
        return $bol;
    }else{
        echo "Email must have numbers and word character";
    }
}

// $bol = CheckPassword("Kyaw123@.");
// echo $bol ? "true" : "false";

function CheckPassword($password){
    if(strlen($password) >= 5){
        $bol = preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/",$password);
        return $bol;
    }else{
        echo "Password must have numbers,word characters and special character.";
    }
}




?>