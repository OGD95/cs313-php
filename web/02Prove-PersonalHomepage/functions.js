function zoom(image){
    image.style.transform = "scale(1.5)";
}

function zoomOut(image){
    image.style.transform = "scale(1)";
}

function addToCart(item){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "prove03-Shoppingf_Cart/cart.php?item=" + item, true);
    xmlhttp.send();
}