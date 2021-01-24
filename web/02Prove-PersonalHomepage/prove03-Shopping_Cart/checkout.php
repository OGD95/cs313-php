<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../prove02-Personal_Homepage/personal_homepage.css">
    </link>
    <script src="../functions.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<body>
    <?php require '../header.php'; ?>

    <form method="POST" action="confirmationPage.php">
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" placeholder="e.g. 123 Nowhere Ave."><br>
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city" placeholder="e.g. Rexburg"><br>
        <label for="state">State:</label><br>
        <input type="text" id="state" name="state" placeholder="e.g. ID"><br>
        <label for="zip">Zip Code:</label><br>
        <input type="text" id="zip" name="zip" placeholder="e.g. 83440"><br>
        <input type="submit" value="completePurchase">
    </form>
    <button><a href="viewCart.php">Return to Cart</a></button>
</body>

</html>