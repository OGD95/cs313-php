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
    <title>Cart Contents</title>
</head>

<body>
    <?php require '../header.php'; ?>

    <?php var_dump($_SESSION["cart"]); ?>

    <button><a href="browse-items.php">Continue Shopping</a></button>
</body>

</html>