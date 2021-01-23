var cart = {};

function zoom(image){
    image.style.transform = "scale(1.5)";
}

function zoomOut(image){
    image.style.transform = "scale(1)";
}

function addToCart(item){
    cart[item] += 1;
}