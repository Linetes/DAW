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

function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
