<?php
session_start();
$_SESSION["cart"] = [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../prove02-Personal_Homepage/personal_homepage.css">
    </link>
    <script src="../functions.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Items</title>
</head>

<body>
    <?php require '../header.php'; ?>

    <div class="image_description">
        <img class="photo" src="../images/optic_mega_box.jpg" alt="Panini Fanatics Optic Mega Box">
        <div class="text">
            <p><b>2020 Panini Donruss Optic Football Fanatics Mega Box -</b> Contains 40 Total Cards Including 1 Guaranteed Autograph and 1 Mega Box Exclusive Rookie Memorabilia Card</p>
        </div>

        <form action="browse-items.php" method="get">
            <button name="item1" value="optic_mega_box">Add to Cart</button>
        </form>
    </div>

    <?php
    print_r($cart);
    ?>

    <div class="image_description">
        <img class="photo" src="../images/panini_contenders_hobby_box.png" alt="Panini Contenders Hobby Box">
        <div class="text">
            <p><b>2020 Panini Contenders Football Hobby Box -</b> Contains 108 Total Cards Including 5 Guaranteed Autograph 1 of Which Being on Card</p>
        </div>
        <button name="item2" value="contenders_hobby_box">Add to Cart</button>
    </div>


</body>

</html>