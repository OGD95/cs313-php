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
    <title>Purchase Confirmation</title>
</head>

<body>
    <?php require '../header.php' ?>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["address"] = test_input($_POST["address"]);
        $_SESSION["city"] = test_input($_POST["city"]);
        $_SESSION["state"] = test_input($_POST["state"]);
        $_SESSION["zip"] = test_input($_POST["zip"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2 class="centerText">Congratulations! Your Items are on Their Way</h2>
    <p class="notice">*Please allow 5 to 7 Business Days for Shipping and Handling</p>

    <p class="centerText">The Following Items will be sent to <?php echo $_SESSION["address"]?>, <?php echo $_SESSION["city"]?>, <?php echo $_SESSION["state"]?> <?php echo $_SESSION["zip"]?>

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
    <div class="image_description" <?php if($item1Count == 0){echo 'id="hideElement"';} ?>>
        <img class="photo" src="../images/optic_mega_box.jpg" alt="Panini Fanatics Optic Mega Box">
        <div class="text">
            <p><b>2020 Panini Donruss Optic Football Fanatics Mega Box -</b> Contains 40 Total Cards Including 1 Guaranteed Autograph and 1 Mega Box Exclusive Rookie Memorabilia Card</p>
            <span>QTY: <?php echo $item1Count; ?></span>
        </div>
    </div>

    <div class="image_description" <?php if($item2Count == 0){echo 'id="hideElement"';} ?>>
    <img class="photo" src="../images/panini_contenders_hobby_box.png" alt="Panini Contenders Hobby Box">
        <div class="text">
        <p><b>2020 Panini Contenders Football Hobby Box -</b> Contains 108 Total Cards Including 5 Guaranteed Autograph 1 of Which Being on Card</p>
            <span>QTY: <?php echo $item2Count; ?></span>
        </div>
    </div>
 
</body>

</html>