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
    <title>Edit Listing</title>
</head>

<body>

    <?php
    require '../header.php';
    require '../connection.php';
    $db = connectToDB();

    $statement = $db->prepare('SELECT a.username, s.sport, c.card_condition, m.manufacturer, cl.athlete_first_name, cl.athlete_last_name, cl.description, cl.listing_id, cl.account_id
    FROM card_listings cl
    INNER JOIN accounts a ON cl.account_id = a.account_id
    INNER JOIN sports s ON cl.sport_id = s.sport_id
    INNER JOIN conditions c ON cl.condition_id = c.condition_id
    INNER JOIN manufacturers m ON cl.manufacturer_id = m.manufacturer_id
    WHERE listing_id = ' . $_GET["listing_id"]);

    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $username = $row['username'];
        $sport = $row['sport'];
        $condition = $row['card_condition'];
        $manufacturer = $row['manufacturer'];
        $athleteFirstName = $row['athlete_first_name'];
        $athleteLastName = $row['athlete_last_name'];
        $description = $row['description'];
        $userId = $row['account_id'];
    }
    ?>

    <form id="editListingForm" action="change_listing.php" method="POST">
        <label for="athlete_first_name">Athlete's First Name:</label>
        </br>
        <input type="text" id="athlete_first_name" name="athlete_first_name"><?php echo $athleteFirstName ?></input>
    </form>


</body>