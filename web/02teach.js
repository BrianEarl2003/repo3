function clickMe() { 
    alert("Clicked!");
}

function changeColor() { 
    var color = document.getElementById("textColor").value;
    document.getElementById("div1").style.backgroundColor = color;
}