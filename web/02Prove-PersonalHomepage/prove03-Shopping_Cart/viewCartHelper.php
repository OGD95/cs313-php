<?php
session_start();
$itemToRemove = $_REQUEST["item"];

$cart = $_SESSION["cart"];

for($i = 0; $i < count($cart); $i++){
    if($cart[$i] == $itemToRemove){
        unset($cart[$i]);
        $cart = array_values($cart);
        break;
    } else{
        continue;
    }
}

$_SESSION["cart"] = $cart;
?>