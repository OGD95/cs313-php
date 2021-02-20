<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../prove02-Personal_Homepage/personal_homepage.css">
    </link>
    <script src="../functions.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php require '../header.php'; ?>

    <form action="verify_info.php" method="POST">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username"></input><br>

        <label for="password">Password: </label>
        <input type="password" id="password" name="password"></input><br><br>

        <input type="submit" value="Sign-in">
    </form>

</body>