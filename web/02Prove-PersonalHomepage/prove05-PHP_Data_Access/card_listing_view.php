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

    <div id="card_listings">

        <script type="text/javascript">
            document.getElementById('options').value = "<?php echo $_GET['sort_option']; ?>";
        </script>

        <form action="">
            <label for="cars">Sort By:</label>
            <select name="sort_option" id="options">
                <option <?php if ($_GET['sort_option'] == "username") echo "selected"; ?> value="username">Seller</option>
                <option <?php if ($_GET['sort_option'] == "sport") echo "selected"; ?> value="sport">Sport</option>
                <option <?php if ($_GET['sort_option'] == "card_condition") echo "selected"; ?> value="card_condition">Condition</option>
                <option <?php if ($_GET['sort_option'] == "manufacturer") echo "selected"; ?> value="manufacturer">Manufacturer</option>
                <option <?php if ($_GET['sort_option'] == "athlete_first_name") echo "selected"; ?> value="athlete_first_name">Athlete First Name</option>
                <option <?php if ($_GET['sort_option'] == "athlete_last_name") echo "selected"; ?> value="athlete_last_name">Athlete Last Name</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">
        </form>



        <?php

        $db = connectToDB();

        foreach ($db->query('SELECT a.username, s.sport, c.card_condition, m.manufacturer, cl.athlete_first_name, cl.athlete_last_name, cl.description
                        FROM card_listings cl
                        INNER JOIN accounts a ON cl.account_id = a.account_id
                        INNER JOIN sports s ON cl.sport_id = s.sport_id
                        INNER JOIN conditions c ON cl.condition_id = c.condition_id
                        INNER JOIN manufacturers m ON cl.manufacturer_id = m.manufacturer_id
                        ORDER BY ' . $_GET["sort_option"]) as $row) {
            echo ' Seller: ' . $row['username'];
            echo '<br/>';
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
    </div>

</body>