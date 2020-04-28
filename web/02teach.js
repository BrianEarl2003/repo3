function click() { 
    document.getElementById("click").innerHTML = "Clicked!";
}

function changeColor() { 
    var color = document.getElementById("textColor").innerHTML;
    document.getElementById("div1").style.background = color;
}