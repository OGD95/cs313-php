function zoom(image){
    image.style.transform = "scale(1.5)";
}

function zoomOut(image){
    image.style.transform = "scale(1)";
}

function addToCart(item){
    alert('Item was added to Cart!')
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "cart.php?item=" + item, true);
    xmlhttp.send();
}

function removeItem(item){
    alert('Item was removed from cart refresh page to see changes.')
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "viewCartHelper.php?item=" + item, true);
    xmlhttp.send();
}