<?php
session_start();

require_once "../Base/dB.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
}
$user = $b -> get_user($username,$pass);
if($user == []){
    header("Location: ../admin.php?error=wronglogin");
}else{
    $id=$user[0]['id'];
    $_SESSION['user_id']=$id;
   header("Location: ../panel.php");
}



