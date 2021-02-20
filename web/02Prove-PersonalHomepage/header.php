<?php 
session_start();
if(!isset($_SESSION['current_user_id']) && !isset($_SESSION['current_user_username']))
{
    header("Location: prove06-Data_Modification/sign-in.php");
}
?>
<body>
    <div class="header">
        <?php echo "<h2>Dylan's CS 313 Homepage</h2>" ?>
        <hr>
    </div>

    <div class="homepage_menu">
        <?php echo '<a id="localLink" href="../prove02-Personal_Homepage/personal_homepage.php" title="Go to Homepage">Homepage</a>' ?>
        <?php echo "|" ?>
        <?php echo '<a id="localLink" href="../prove02-Personal_Homepage/assignments.php" title="Go to Assignments Page">Assignments</a>' ?>
    </div>
</body>    