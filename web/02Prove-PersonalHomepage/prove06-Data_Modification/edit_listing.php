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
        $card_sport = $row['sport'];
        $card_condition = $row['card_condition'];
        $card_manufacturer = $row['manufacturer'];
        $athleteFirstName = $row['athlete_first_name'];
        $athleteLastName = $row['athlete_last_name'];
        $description = $row['description'];
        $userId = $row['account_id'];
    }
    ?>

    <form id="editListingForm" action="change_listing.php" method="POST">
        <label for="athlete_first_name">Athlete's First Name:</label>
        </br>
        <input type="text" id="athlete_first_name" name="athlete_first_name" value="<?php echo $athleteFirstName ?>"></input>

        </br> </br>

        <lable for="athlete_last_name">Athlete's Last Name:</lable>
        </br>
        <input type="text" id="athlete_last_name" name="athlete_last_name" value="<?php echo $athleteLastName ?>"></input>

        </br> </br>

        <?php
        $statement = $db->prepare('SELECT condition_id, card_condition FROM conditions');
        $statement->execute();
        echo "Card's Condition:";
        echo "</br>";

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['condition_id'];
            $condition = $row['card_condition'];

            echo "<input type='radio' name='radioCondition' ";
            if ($condition == $card_condition) {
                echo "checked ='checked'";
            }
            echo "id='radioCondition$id' value='$id'>";
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

            echo "<input type='radio' name='radioSport' ";
            if ($sport == $card_sport) {
                echo "checked ='checked'";
            }
            echo "id='radioSport$id' value='$id'>";
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

            echo "<input type='radio' name='radioManufacturer' ";
            if ($manufacturer == $card_manufacturer) {
                echo "checked = 'checked'";
            }
            echo "id='radioManufacturer$id' value='$id'>";
            echo "<label for='radioManufacturer$id'>$manufacturer</label><br />";

            echo "\n";
        }
        ?>

        </br> </br>

        <label for="seller">Sellers Username:</label>
        </br>
        <input type="text" id="seller" name="seller" value="<?php echo $username ?>"></input>

        </br> </br>

        <label for="listingDescription">Listing Description:</label>
        </br>
        <textarea id="listingDescription" name="listingDescription" rows="4" cols="50"><?php echo $description ?></textarea>

        </br> </br>
        <input hidden id="listingId" name="listingId" value="<?php $_GET['listing_id'] ?>"></input>

        <input type="submit" value="Edit Listing">

    </form>


</body>