<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../prove02-Personal_Homepage/personal_homepage.css">
    </link>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>

    <?php 
    require '../header.php'; 
    if(isset($_SESSION['current_user_username'])){
        echo '<h1 id=greetingMessage>Welcome ' . $_SESSION['current_user_username'] . '!!!</h1>';
    } else{
        header('Location: sign-in.php');
        die();
    }
    ?>

</body>

</html>