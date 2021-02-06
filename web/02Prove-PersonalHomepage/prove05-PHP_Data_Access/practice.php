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

    $db = connectToDB();

    foreach ($db->query('SELECT athlete_first_name, athlete_last_name FROM card_listings') as $row) {
        echo 'Athlete first name: ' . $row['athlete_first_name'];
        echo ' Athlete last name: ' . $row['athlete_last_name'];
        echo '<br/>';
    }
    ?>

</body>

</html>