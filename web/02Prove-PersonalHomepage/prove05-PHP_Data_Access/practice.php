<?php
require '../connection.php';
?>
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
    ?>

    <?php

    $db = connectToDB();

    echo 'got here';

    foreach ($db->query('SELECT username, password FROM accounts') as $row) {
        echo 'user: ' . $row['username'];
        echo ' password: ' . $row['password'];
        echo '<br/>';
    }

    echo 'im here now';
    ?>

</body>

</html>