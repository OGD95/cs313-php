<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../prove02-Personal_Homepage/personal_homepage.css">
    </link>
    <script src="../functions.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Practice</title>
</head>

<body>

    <?php
    require '../header.php';
    require '../connection.php';
    ?>

    <?php

    $db = connectToDB();

    foreach ($db->query('SELECT a.first_name, s.sport, c.card_condition, m.manufacturer, cl.athlete_first_name, cl.athlete_last_name, cl.description
	                    FROM card_listings cl
	                    INNER JOIN accounts a ON cl.account_id = a.account_id
	                    INNER JOIN sports s ON cl.sport_id = s.sport_id
	                    INNER JOIN conditions c ON cl.condition_id = c.condition_id
	                    INNER JOIN manufacturers m ON cl.manufacturer_id = m.manufacturer_id
                        ORDER BY first_name;') as $row) {
        echo 'Seller: ' . $row['first_name'];
        echo ' Sport: ' . $row['sport'];
        echo ' Card Condition: ' . $row['card_condition'];
        echo ' Manufacturer: ' . $row['manufacturer'];
        echo ' Player First Name: ' . $row['athlete_first_name'];
        echo ' Player Last Name: ' . $row['athlete_last_name'];
        echo '<br/>';
    }
    ?>

</body>

</html>