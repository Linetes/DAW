<?php
    require_once("modelo.php");
    function buscar($tipo) {

    $tipo = htmlspecialchars($tipo);

    //validacion de datos
    if(strlen($tipo) > 0) {
        if(getIncidentesTipo($tipo)){
            return true;
        } else{
            return false;
        }
    }
}
    echo buscar($_GET['id']);
?>
