function gen() {
    var red = document.getElementById("red").value;
    var green = document.getElementById("green").value;
    var blue = document.getElementById("blue").value;
    var clr = "rgb(" + red + "," + green + "," + blue + ")";
    document.body.style.setProperty("background-color", clr, "important");
    document.getElementById("box").value = clr;
    const nodeList = document.querySelectorAll(".card");
    for (var i = 0; i < nodeList.length; i++) {
        nodeList[i].style.backgroundColor = clr;
    }
    const nodeList2 = document.querySelectorAll(".footer");
    for (var i = 0; i < nodeList2.length; i++) {
        nodeList2[i].style.backgroundColor = clr;
    }
    const nodeList3 = document.querySelectorAll(".navbar");
    for (var i = 0; i < nodeList3.length; i++) {
        nodeList3[i].style.backgroundColor = clr;
    }
    const nodeList4 = document.querySelectorAll("#box");
    for (var i = 0; i < nodeList4.length; i++) {
        nodeList4[i].style.backgroundColor = clr;
    }
}

document.getElementById("red").addEventListener("input", gen);
document.getElementById("green").addEventListener("input", gen);
document.getElementById("blue").addEventListener("input", gen);
