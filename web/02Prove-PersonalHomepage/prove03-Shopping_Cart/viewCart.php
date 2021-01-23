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

    <div>
    <img src="../images/optic_mega_box.jpg" alt="Panini Fanatics Optic Mega Box">
    <span>QTY: <?php echo $item1Count; ?></span>
    </div>

    <button><a href="browse-items.php">Continue Shopping</a></button>
</body>

</html>