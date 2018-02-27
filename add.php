<?php
session_start();

if(isset($_SESSION["usuario"]) ) {
    include("partials/_header.html");
    include("partials/_add.html");
    include("partials/_footer.html");
} else {
    header("location:index.php");
}
?>