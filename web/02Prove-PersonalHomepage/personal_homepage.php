<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="personal_homepage.css">
    </link>
    <script src="functions.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="pageTitle">Homepage</title>
</head>

<body>
    <p id="test"></p>

    <div class="header">
        <h2 id="title">Dylan's CS 313 </h2>
        <hr>
    </div>

    <?php require 'header.php'; ?>

    <button onclick="changePageName()">click me</button>

    <div class="image_description">
        <img class="weddingPhoto" src="wedding photo.jpg" alt="Wedding Photo">
        <div class="text">
            <p>Wedding photo with myself, my wife, and my wifes grandmother: Taken 12/21/2019</p>
        </div>
    </div>

    <div class="image_description">
        <img class="weddingPhoto" src="topps-logo.png" alt="Topps' Logo">
        <div class="text">
            <p>One of my passions is collecting baseball cards. Topps is the main seller of
                licensed baseball cards in the United States</p>
        </div>
    </div>

    <div class="image_description">
        <img class="weddingPhoto" src="panini-logo-small.jpg" alt="Panini America's Logo">
        <div class="text">
            <p>I also enjoy collecting football and basketball cards which are sold mainly by
                Panini America</p>
        </div>
    </div>

</body>

</html>