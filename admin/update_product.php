<?php
include_once "../Base/dB.php";
if(isset($_GET['submit'])){

    $id = $_GET['id'];
    $name= $b -> conn -> real_escape_string($_GET['name']);
    $short_desc=$b -> conn -> real_escape_string($_GET['short_desc']);
    $main_desc=$b -> conn -> real_escape_string($_GET['main_desc']);
    $footer_desc=$b -> conn -> real_escape_string($_GET['footer_desc']);
    $image=$_GET['image'];
    $price=$b -> conn -> real_escape_string($_GET['price']);
    $quantity=$b -> conn -> real_escape_string($_GET['quantity']);

    $b -> update_product($id,$name,$short_desc,$main_desc,$footer_desc,$image,$price,$quantity);
    header("Location: ../panel.php?update=successful#msg");
}