<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../prove02-Personal_Homepage/personal_homepage.css">
    </link>
    <link rel="stylesheet" href="viewCart.css"></link>
    <script src="../functions.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Contents</title>
</head>

<body>
    <?php require '../header.php'; ?>

    <?php
    $item1Count = 0;
    $item2Count = 0;
    foreach($_SESSION["cart"] as $item){
        if($item == "optic_mega_box"){
            $item1Count += 1;
        }else{
            $item2Count += 1;
        }
    };
    ?>
    <div class="image_description" <?php if($item1Count != 0 or $item2Count != 0){echo 'id="hideElement"';} ?>>
        <img class="photo" src="../images/emptyCart.JPG" alt="Panini Fanatics Optic Mega Box">
        <div class="text">
            <b>Your cart is empty return to items page to purchase items</b>
            <button><a href="browse-items.php">Continue Shopping</a></button>
        </div>
    </div>

    <div class="image_description" <?php if($item1Count == 0){echo 'id="hideElement"';} ?>>
        <img class="photo" src="../images/optic_mega_box.jpg" alt="Panini Fanatics Optic Mega Box">
        <div class="text">
            <p><b>2020 Panini Donruss Optic Football Fanatics Mega Box -</b> Contains 40 Total Cards Including 1 Guaranteed Autograph and 1 Mega Box Exclusive Rookie Memorabilia Card</p>
            <span>QTY: <?php echo $item1Count; ?></span>
            <button onclick="removeItem('optic_mega_box')" type="submit">Delete Item From Cart</button>
        </div>
    </div>

    <div class="image_description" <?php if($item2Count == 0){echo 'id="hideElement"';} ?>>
    <img class="photo" src="../images/panini_contenders_hobby_box.png" alt="Panini Contenders Hobby Box">
        <div class="text">
        <p><b>2020 Panini Contenders Football Hobby Box -</b> Contains 108 Total Cards Including 5 Guaranteed Autograph 1 of Which Being on Card</p>
            <span>QTY: <?php echo $item2Count; ?></span>
            <button onclick="removeItem('contenders_hobby_box')" type="submit">Delete Item From Cart</button>
        </div>
    </div>

    <button <?php if($item1Count == 0 and $item2Count == 0){echo 'id="hideElement"';} ?>><a href="browse-items.php">Continue Shopping</a></button>
    <button <?php if($item1Count == 0 and $item2Count == 0){echo 'id="hideElement"';} ?>><a href="checkout.php">Checkout</a></button>
</body>

</html>