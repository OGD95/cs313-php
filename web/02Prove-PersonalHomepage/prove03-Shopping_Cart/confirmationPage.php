<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["address"] = test_input($_POST["completePurchase"]["address"]);
    $_SESSION["city"] = test_input($_POST["completePurchase"]["city"]);
    $_SESSION["state"] = test_input($_POST["completePurchase"]["state"]);
    $_SESSION["zip"] = test_input($_POST["completePurchase"]["zip"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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

    <h2 class="centerText">Congradulations! Your Items are on Their Way</h2>
    <p class="notice">*Please allow 5 to 7 days for Shipping and Handeling</p>

    <p>The Following Items will be sent to <?php$_SESSION["address"]?>, <?php$_SESSION["city"]?>, <?php$_SESSION["state"]?> <?php$_SESSION["zip"]?>

</body>
</html>