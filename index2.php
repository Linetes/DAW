<?php
session_start();
require_once("modelo.php");

if(isset($_SESSION["usuario"]) ) {
    include("partials/_header.html");
    $user = $_SESSION["usuario"];
    include("partials/_tienda.html");
    include("partials/_footer.html");
}else if ($_POST["usuario"]=="lalo" && $_POST["password"]=="hockey" ) {
    unset($_SESSION["error"]);
    $_SESSION["usuario"] = $_POST["usuario"];
    $user = $_SESSION["usuario"];
    include("partials/_header.html");
    include("partials/_tienda.html");
    include("partials/_footer.html");
} else if($_POST["usuario"]!="lalo" || $_POST["password"]!="hockey") {
    $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
    header("location: login.php");
}

?>
