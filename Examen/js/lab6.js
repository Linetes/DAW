function myFunction() {
    document.getElementById("myDIV").style.position = "absolute";
}
function myFunction2() {
    document.getElementById("myP").style.fontStyle = "italic";
}
function myFunction3() {
    document.getElementById("myP").style.visibility = "hidden";
}
function myFunction4() {
    document.getElementById("but").style.color = 'blue';
}
function myFunction5() {
    alert('Hello');
}
function myFunction6() {
    setInterval(function(){ alert("Hello"); }, 3000);
}
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
