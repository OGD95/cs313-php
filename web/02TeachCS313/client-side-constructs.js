function clicked(){
    alert("Clicked!");
}

function changeColor(){
    document.getElementById("div1").style.backgroundColor = document.getElementById("colorName").value;
}

function changeColorJQuery(){
   $("#div1").style.backgroundColor = $("#colorName").value; 
}