function check() {
    if (document.getElementById("username").value === ""){
        document.getElementById('message').innerHTML = "Ingresa un nombre de usuario";
    }    
    else if (document.getElementById("email").value === ""){
        document.getElementById('message').innerHTML = "Ingresa un email";    
    }
    else if (document.getElementById("password").value === ""){
        document.getElementById('message').innerHTML = "Ingresa una password";    
    } 
    else if (document.getElementById('password').value === document.getElementById('retype_password').value) {
        document.getElementById('message').innerHTML = "Account created successfully";
    }    
    else {
        document.getElementById('message').innerHTML = "Passwords do not match";
    }
}

function check2() { 
    var includesAt = /@./g;
    var x = document.getElementById("email");
    if (x.value.match(includesAt)){
        document.getElementById('message').innerHTML = "Valid Email";    
    }    
    else {
        document.getElementById('message').innerHTML = "Invalid Email";
    }
}