function click() { 
    var text = "Clicked!";
    document.getElementById("clickText").innerHTML = text;
}

function changeColor() { 
    var color = document.getElementById("textColor").value;
    document.getElementById("div1").style.backgroundColor = color;
}