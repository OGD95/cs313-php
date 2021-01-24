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
    <title>Purchase Confirmation</title>
</head>

<body>
    <?php require '../header.php' ?>

    <?php

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $_SESSION["address"] = test_input($_POST["address"]);
    //     $_SESSION["city"] = test_input($_POST["city"]);
    //     $_SESSION["state"] = test_input($_POST["state"]);
    //     $_SESSION["zip"] = test_input($_POST["zip"]);
    // }

    // function test_input($data)
    // {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }
    ?>

    <h2 class="centerText">Congradulations! Your Items are on Their Way</h2>
    <p class="notice">*Please allow 5 to 7 days for Shipping and Handeling</p>


</body>

</html>