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
    <title>Browse Listings</title>
</head>

<body>

    <?php
    require '../header.php';
    require '../connection.php';
    ?>

    <?php

    $db = connectToDB();

    foreach ($db->query('SELECT first_name , last_name FROM accounts ORDER BY last_name, first_name') as $row) {
        echo 'Seller: ' . '<a href="user_info.php?lname=' . $row['last_name'] . '&fname=' . $row['first_name'] . '"';
        echo '<br/>';
    }

    ?>
<a href="user_info.php?fname="></a>
</body>