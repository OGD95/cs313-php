<?php
session_start();
$itemToRemove = $_REQUEST["item"];

$cart = $_SESSION["cart"];

foreach($cart as $item)
{
    if($item == $itemToRemove){
        unset($item);
        return;
    } else{
        continue;
    }
}

for($i = 0; $i < count($cart); $i++){
    if($cart[$i] == $itemToRemove){
        unset($cart[$i]);
    } else{
        continue;
    }
}

$_SESSION["cart"] = $cart;
?>
