<?php 
session_start();

unset($_SESSION['current_user_id'], $_SESSION['current_user_username']);

header("Location: sign-in.php");
die();
?>