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
    <title>Listing View</title>
</head>

<body>

    <?php
    require '../header.php';
    require '../connection.php';
    ?>

    <?php

    $db = connectToDB();

    foreach ($db->query('SELECT a.username, s.sport, c.card_condition, m.manufacturer, cl.athlete_first_name, cl.athlete_last_name, cl.description, cl.listing_id, cl.account_id
                        FROM card_listings cl
                        INNER JOIN accounts a ON cl.account_id = a.account_id
                        INNER JOIN sports s ON cl.sport_id = s.sport_id
                        INNER JOIN conditions c ON cl.condition_id = c.condition_id
                        INNER JOIN manufacturers m ON cl.manufacturer_id = m.manufacturer_id
                        WHERE listing_id = ' . $_GET["listing_id"]) as $row) {
            echo ' Seller: ' . '<a href="user_info.php?user=' . $row['account_id'] . '">' . $row['username'] . '<a>';
            echo '<br/>';
            echo ' Sport: ' . $row['sport'];
            echo '<br/>';
            echo ' Card Condition: ' . $row['card_condition'];
            echo '<br/>';
            echo ' Manufacturer: ' . $row['manufacturer'];
            echo '<br/>';
            echo ' Athlete Name: ' . $row['athlete_first_name'] . ' ' . $row['athlete_last_name'];
            echo '<br/>';
            echo ' Description: ' . $row['description'];
            echo '<br/>';

            echo '<img src="../images/insertimagehere.jpg" alt="Image Placeholder">';
        }
        '<a href="user_info.php?user=' . $row['account_id'] . '">' . $row['last_name'] . ', ' . $row['first_name'] . '<a>';
    ?>

</body>