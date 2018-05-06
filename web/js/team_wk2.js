function clicked() {
    alert("Clicked!");
}

function changeColor() {
    var x = document.getElementById("myColor").value;
    document.getElementsById("color")[0].style.backgroundColor = x;
}