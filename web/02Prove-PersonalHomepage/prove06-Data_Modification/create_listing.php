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
        </br>
        <input type="text" id="athlete_first_name" name="athlete_first_name"></input>

        </br> </br>

        <lable for="athlete_last_name">Athlete's Last Name:</lable>
        </br>
        <input type="text" id="athlete_last_name" name="athlete_last_name"></input>

        </br> </br>

        <?php
        $statement = $db->prepare('SELECT condition_id, card_condition FROM conditions');
        $statement->execute();
        echo "Card's Condition:";
        echo "</br>";

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['condition_id'];
            $condition = $row['card_condition'];

            echo "<input type='radio' name='radioCondition[]' id='radioCondition$id' value='$id'>";
            echo "<label for='radioCondition$id'>$condition</label><br />";

            echo "\n";
        }
        ?>

        </br> </br>

        <?php
        $statement = $db->prepare('SELECT sport_id, sport FROM sports');
        $statement->execute();
        echo "Sport:";
        echo "</br>";

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['sport_id'];
            $sport = $row['sport'];

            echo "<input type='radio' name='radioSport[]' id='radioSport$id' value='$id'>";
            echo "<label for='radioSport$id'>$sport</label><br />";

            echo "\n";
        }
        ?>

        </br> </br>

        <?php
        $statement = $db->prepare('SELECT manufacturer_id, manufacturer FROM manufacturers');
        $statement->execute();
        echo "Manufacturer:";
        echo "</br>";

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['manufacturer_id'];
            $manufacturer = $row['manufacturer'];

            echo "<input type='radio' name='radioManufacturer[]' id='radioManufacturer$id' value='$id'>";
            echo "<label for='radioManufacturer$id'>$manufacturer</label><br />";

            echo "\n";
        }
        ?>

        </br> </br>

        <label for="seller">Sellers Username:</label>
        <input type="text" id="seller" name="seller"></input>

        </br> </br>

        <label for="listingDescription">Listing Description:</label>
        <textarea id="listingDescription" name="listingDescription"></textarea>

        </br> </br>

        <input type="submit" value="Add Listing">

    </form>


</body>