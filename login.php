<?php
session_start();
if(isset($_SESSION["usuario"]) ) {
    header("location: index2.php");
} else {
    include("partials/_header.html");
    include("partials/_loginform.html");
    include("partials/_footer.html");
}
?>
