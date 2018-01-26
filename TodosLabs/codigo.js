function one() {
    "use strict";
    var n, i, tabla;
    n = prompt("Pon un valor del 1 al 9", 1);  
    i = 1;
    tabla = "<table><tr><th> Número </th><th> Cuadrado </th><th> Cubo </th></tr>";
    
    for (i === 1; i <= n; i++) {
        tabla = tabla + "<tr><td> " + i + " </td><td> " + (i * i) + " </td><td> " + (i * i * i) + " </td></tr>";
    }
        tabla = tabla + "</table>";
        document.getElementById("res").innerHTML = tabla;
}

function two() {
    "use strict";
    var x, y, res;
    x = Math.floor(Math.random() * 100);
    y = Math.floor(Math.random() * 100);
    res = prompt("Cuánto da la suma de " + x + " + " + y + "?", 1);
    
    if (res == (x + y)) {
        document.getElementById("res").innerHTML = "Excelente";
    } else {
        document.getElementById("res").innerHTML = "Incorrecto";
    }
}

function three(arr) {
    "use strict";
    var i, negativos = 0, positivos = 0, ceros = 0, res;
    for (i=0; i<=arr.length; i++) {
        if (arr[i] == 0) {
            ceros++;
        } else if (arr[i] < 0) {
            negativos++;
        } else if (arr[i] > 0) {
            positivos++;
        }
    }
    res = new Array(negativos, ceros, positivos);
    document.getElementById("res").innerHTML = "La cantidad de numeros negativos es: " + negativos + "<br> La cantidad de ceros es: " + ceros + "<br> La cantidad de números positivos es: " + positivos;
    return res;
}

function four(arr){
    var res = new Array(), str = "", i, j, n, aux;
    
    for (i = 0; i < arr.length; i++) {
        aux = arr[i].length;
        j = 0;
        for (n = 0; n < aux; n++) {
            j = j + arr[i][n];
        }
        j = Math.floor(j/aux);
        str = str + "El promedio del renglon " + (i+1) + " es: " + j + "<br>";
        res.push(j);
    }
    document.getElementById("res").innerHTML = str;
    return res;
}

function five(num) {
    var i, res, inv = 0, n;
    n = num;
    while (num != 0) {
        res = num % 10; 
        num = Math.floor(num / 10);
        inv = (inv * 10) + res;
    }
    document.getElementById("res").innerHTML = "El inverso de " + n + " es : " + inv;
    return inv;
}

function six(str1,str2,num,str3) {
    var person ={firstName: str1,lastName: str2, age: num, eyeColor:str3};
    document.getElementById("res").innerHTML = "Nombre= " + person.firstName + "<br>Apellido= " + person.lastName + "<br>Edad= " + person.age + "<br>Color de ojos= " + person.eyeColor;
} 

function check() {
    if(document.getElementById('password').value === document.getElementById('retype_password').value) {
        document.getElementById('message').innerHTML = "Account created Successfully";
    } else {
        document.getElementById('message').innerHTML = "Passwords do not match";
    }
}