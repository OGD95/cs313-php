function zoom(image){
    image.style.transform = "scale(1.5)";
}

function zoomOut(image){
    image.style.transform = "scale(1)";
}

function addToCart(itemTitle, cart){
    cart += itemTitle;
    return cart;
}

function returnCart(){
    return cart;
}