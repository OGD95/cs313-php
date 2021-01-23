<?php
session_start();
$itemToRemove = $_REQUEST["item"];
foreach($_SESSION["cart"] as $item)
{
    if($item == $itemToRemove){
        unset($item);
        return;
    } else{
        continue;
    }
}
?>
