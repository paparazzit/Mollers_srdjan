<?php
session_start();
include "dB.php";

$user = $b-> get_user($user,$pass);

function empty_input($username,$password){
    $result = false;
    if(empty($username)|| empty($password))
        $result = true;

return $result;
}

