<?php
session_start();
require '../connection.php';
$db = connectToDB();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../prove02-Personal_Homepage/personal_homepage.css">
    </link>
    <script src="../functions.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Listing</title>
</head>

<body>

    <?php
    require '../header.php';
    ?>

    <form id="cardListingForm" action="insertListing.php" method="POST">
        <label for="athlete_first_name">Athlete's First Name:</label>
        <input type="text" id="athlete_first_name" name="athlete_first_name"></input>

        </br> </br>

        <lable for="athlete_last_name">Athlete's Last Name:</lable>
        <input type="text" id="athlete_last_name" name="athlete_last_name"></input>

        </br> </br>

        <?php
        $statement = $db->prepare('SELECT condition_id, card_condition FROM conditions');
        $statement->execute();

        try {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $id = $row['condition_id'];
                $condition = $row['card_condition'];

                echo "<input type='checkbox' name='chkTopics[]' id='chkTopics$id' value='$id'>";
                echo "<label for='chkTopics$id'>$name</label><br />";

                echo "\n";
            }
        } catch (PDOException $ex) {
            // Please be aware that you don't want to output the Exception message in
            // a production environment
            echo "Error connecting to DB. Details: $ex";
            die();
        }
        ?>

        <input type="submit" value="Add Listing">

    </form>


</body>