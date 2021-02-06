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

    <form action="#">
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last Name: </label>
        <input type="text" id="lname" name="lname"><br>
        <label for="username">Username: </label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password: </label>
        <input type="text" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>