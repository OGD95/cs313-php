<?php
session_start();
if (!isset($_SESSION['current_user_id']) && !isset($_SESSION['current_user_username']) && substr($_SERVER['REQUEST_URI'], -11) != 'sign-in.php' && substr($_SERVER['REQUEST_URI'], -11) != 'sign-up.php') {
    header("Location: ../prove06-Data_Modification/sign-in.php");
    die();
}
?>

<body>

    <div class="header">
        <?php
        if (isset($_SESSION['current_user_id']) && isset($_SESSION['current_user_username'])) {
            echo '<button id="logoutButton"><a id="logoutLink" href="../prove06-Data_Modification/signout.php">Logout</a></button>';
        }
        ?>
        <?php echo "<h2>Dylan's CS 313 Homepage</h2>" ?>
        <hr>
    </div>

    <div class="homepage_menu">
        <?php echo '<a id="localLink" href="../prove02-Personal_Homepage/personal_homepage.php" title="Go to Homepage">Homepage</a>' ?>
        <?php echo "|" ?>
        <?php echo '<a id="localLink" href="../prove02-Personal_Homepage/assignments.php" title="Go to Assignments Page">Assignments</a>' ?>
    </div>
</body>