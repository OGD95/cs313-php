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
    <title>Browse Items</title>
</head>

<body>

    <?php require '../header.php'; ?>

    <?php 
    $cart = $_SESSION["cart"];

    if(isset($_GET["item1"])){
        array_push($cart, $_GET["item1"]);
    }
    if(isset($_GET["item2"])){
        array_push($cart, $_GET["item2"]);
    }
    $_SESSION["cart"] = $cart;
    var_dump($_SESSION["cart"]);
    echo count($cart);
    ?>
    <div class="image_description">
        <img class="photo" src="../images/optic_mega_box.jpg" alt="Panini Fanatics Optic Mega Box">
        <div class="text">
            <p><b>2020 Panini Donruss Optic Football Fanatics Mega Box -</b> Contains 40 Total Cards Including 1 Guaranteed Autograph and 1 Mega Box Exclusive Rookie Memorabilia Card</p>
        </div>
        <form action="../prove03-Shopping_Cart/browse-items.php" method="get">
            <button type="submit" name="item1" value="optic_mega_box">Add to Cart</button>
        </form>

    </div>

    <div class="image_description">
        <img class="photo" src="../images/panini_contenders_hobby_box.png" alt="Panini Contenders Hobby Box">
        <div class="text">
            <p><b>2020 Panini Contenders Football Hobby Box -</b> Contains 108 Total Cards Including 5 Guaranteed Autograph 1 of Which Being on Card</p>
        </div>
        <form action="../prove03-Shopping_Cart/browse-items.php" method="get">
            <button type="submit" name="item2" value="contenders_hobby_box">Add to Cart</button>
        </form>

    </div>

    <button><a href="cart.php">View Cart</a></button>



</body>

</html>