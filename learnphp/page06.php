<?php

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

// $str = $_GET["str"];

$user = $_GET["user"];
$pass = $_GET["pass"];

$user1 = "victor";
$pass1 = "rodriguez";

if($user == $user1 && $pass == $pass1){
    echo "Access Granted. Hello $user1";
}

elseif($user == "" || $pass == ""){
    echo "you fucked up son";
}

else {
    echo"access denied";
}

?>