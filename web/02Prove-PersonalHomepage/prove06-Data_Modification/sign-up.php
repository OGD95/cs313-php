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
    <title>Account Creation</title>
</head>

<body>

    <?php require '../header.php'; ?>

    <h1 id="greetingMessage">Create Account Here</h1>

    <form action="register_user.php" method="POST">
        <label for="fname">First Name: </label><br>
        <input type="text" id="firstName" name="firstName"></input><br>

        <label for="lname">Last Name: </label><br>
        <input type="text" id="lastName" name="lastName"></input><br>

        <label for="username">Username: </label><br>
        <input type="text" id="username" name="username"></input><br>

        <label for="shippingAddress">Shipping Address: </label><br>
        <input type="text" id="shippingAddress" name="shippingAddress"></input><br>

        <label for="password">Password: </label><br>
        <input type="password" id="password" name="password"></input><br><br>

        <input type="submit" value="Create Account">
    </form>

</body>