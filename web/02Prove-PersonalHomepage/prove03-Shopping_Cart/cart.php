<?php
session_start();

$item = $_REQUEST["item"];



if(!isset($_SESSION["cart"])){
    $_SESSION["cart"] = [];
}

$cart = $_SESSION["cart"];

array_push($cart, $item);

$_SESSION["cart"] = $cart;
var_dump($_SESSION["cart"]);
?>