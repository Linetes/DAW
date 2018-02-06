function Cantidad1(){
    var x = document.getElementById("message1");
    var y = document.getElementById("cant1").value;
    
    x.innerHTML = "Monto: $" +y*2500 +"<br>Iva: 16%<br>Total: $" +((y*2500)+((y*2500)*.16));
}

function Cantidad2(){
    var x = document.getElementById("message2");
    var y = document.getElementById("cant2").value;
    
    x.innerHTML = "Monto: $" +y*2000 +"<br>Iva: 16%<br>Total: $" +((y*2000)+((y*2000)*.16));
}

function Cantidad3(){
    var x = document.getElementById("message3");
    var y = document.getElementById("cant3").value;
    
    x.innerHTML = "Monto: $" +y*1800 +"<br>Iva: 16%<br>Total: $" +((y*1800)+((y*1800)*.16));
}