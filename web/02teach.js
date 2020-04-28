function click() { 
    document.getElementById("div3").innerHTML = "Clicked!";
}

function changeColor() { 
    var color = document.getElementById("textColor").value;
    document.getElementById("div1").style.backgroundColor = color;
}