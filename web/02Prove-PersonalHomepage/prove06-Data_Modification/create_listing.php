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
        
    

</body>