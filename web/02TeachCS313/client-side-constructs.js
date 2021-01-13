function clicked() {
    alert("Clicked!");
}

function changeColor() {
    document.getElementById("div1").style.backgroundColor = document.getElementById("colorName").value;
}

$(document).ready(function () {
    $("#colorChangeButton").click(function () {
        $("#div1").style.backgroundColor = $("#colorName").value;
    });
});