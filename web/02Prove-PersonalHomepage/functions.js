function zoom(image){
    image.style.transform = "scale(1.5)";
}

function zoomOut(image){
    image.style.transform = "scale(1)";
}

function addToCart(item){
    $_SESSION["cart"] += item;
    console.log($_SESSION["cart"]);
}