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
        <input type="text" id="athlete_first_name" name="athlete_first_name"></input>
        <label for="athlete_first_name">Athlete's First Name:</label>
        </br> </br>

        <input type="text" id="athlete_last_name" name="athlete_last_name"></input>
        <lable for="athlete_last_name">Athlete's Last Name:</lable>
        </br> </br>

        <input type="submit" value="Add Listing">

    </form>


</body>