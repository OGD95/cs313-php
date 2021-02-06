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

    foreach ($db->query('SELECT first_name, last_name, username, date(created_on) AS created_on FROM accounts WHERE account_id = ' . $_GET['user'] . 'ORDER BY last_name, first_name') as $row) {
        echo '<h2>User Information</h2>';
        echo 'User ' . $row['username'] . ' has been a member since ' . $row['created_on'];
        echo '<br/>';
    }
    ?>

    <h3>Items for Sale:</h3><br\>

    <?php
    foreach ($db->query('SELECT s.sport, c.card_condition, m.manufacturer, cl.athlete_first_name, cl.athlete_last_name, cl.description
                        FROM card_listings cl
                        INNER JOIN sports s ON cl.sport_id = s.sport_id
                        INNER JOIN conditions c ON cl.condition_id = c.condition_id
                        INNER JOIN manufacturers m ON cl.manufacturer_id = m.manufacturer_id
                        WHERE cl.account_id = ' . $_GET['user']) as $row) {
        echo ' Sport: ' . $row['sport'];
        echo '<br/>';
        echo ' Card Condition: ' . $row['card_condition'];
        echo '<br/>';
        echo ' Manufacturer: ' . $row['manufacturer'];
        echo '<br/>';
        echo ' Athlete Name: ' . $row['athlete_first_name'] . ' ' . $row['athlete_last_name'];
        echo '<br/>';
        echo '<hr>';

    }

    ?>



</body>