<?php
session_start();
$itemToRemove = $_REQUEST["item"];

$cart = $_SESSION["cart"];

for($i = 0; $i < count($cart); $i++){
    if($cart[$i] == $itemToRemove){
        unset($cart[$i]);
    } else{
        continue;
    }
}

$_SESSION["cart"] = $cart;

$item1Count = 0;
    $item2Count = 0;
    foreach($_SESSION["cart"] as $item){
        if($item == "optic_mega_box"){
            $item1Count += 1;
        }else{
            $item2Count += 1;
        }
    };
