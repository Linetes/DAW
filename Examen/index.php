<?php
session_start();
require_once("modelo.php");
include("partials/_header.html");

function insert_in() {

    $lugar = htmlspecialchars($_POST['lugarIn']);
    $tipo = htmlspecialchars($_POST['tipoIn']);

    //validacion de datos
    if(strlen($lugar) > 0 && strlen($tipo) > 0) {
        if(insertIn($lugar,$tipo)){
            return true;
        } else{
            return false;
        }
    }
}

function delete_in() {

    $id = htmlspecialchars($_POST['idIn']);
    if($id != ""){
        if(delete_by_id($id)){
            return true;
        } else{
            return false;
        }
    }
}
?>

<!-- Body -->
<body>
<!-- Título -->
<header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Examen Parcial 2</h1>
        </div>
    </div>
</header>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Incidentes en Jurassic Park</h1>
        <div class="alert alert-light" role="alert">
            <div class="row">
                <div class="col">
                    <h1>Agregar Incidente</h1>
                    <form action="index.php" method="POST" id="form1">
                        <label for="lugarIn">Lugar del Incidente  </label>
                        <select name="lugarIn">
                            <option value="" selected disabled>Opciones</option>
                            <?php getLugares();?>
                        </select>
                        <br><br>
                        <label for="tipoIn">Tipo de Incidente  </label>
                        <select name="tipoIn">
                            <option value="" selected disabled>Opciones</option>
                            <?php getTipos();?>
                        </select>
                        <br><br>
                        <button type="button-centered" class="btn btn-primary btn-lg">Submit</button>
                    </form>
                    <br>
                    <h1>Borrar Incidente por Id</h1>
                    <form action="index.php" method="POST" id="form2">
                        <label for="idIn">Id</label>
                        <div class="input-group mb-3">
                            <input placeholder="1" class="form-control" name="idIn" type="text" class="validate" required>
                        </div>
                        <button type="button-centered" class="btn btn-primary btn-lg">Submit</button>
                    </form>
                    <?php
                    insert_in();
                    delete_in();
                    ?>
                </div>
                <div class="col">
                    <h1>Incidentes</h1>
                    <form action="index.php" method="POST">
                        <label for="usuario">Búsqueda</label>
                        <div class="input-group mb-3">
                            <input placeholder="Centro Turístico" class="form-control" id="myInput" type="text">
                        </div>
                    </form>
                    <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Lugar</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Fecha</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        <?php getIncidentes();?>
                        </tbody>
                    </table>
                    <h1>Incidentes por Tipo</h1>
                    <form action="index.php" method="POST">
                        <label for="tipoIn2">Tipo de Incidente  </label>
                        <select name="tipoIn2" id="id" oninput="selectValue()">
                            <option value="" selected disabled>Opciones</option>
                            <?php getTipos();?>
                        </select>
                    </form>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Cantidad</th>
                        </tr>
                        </thead>
                        <tbody id="datos">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
include("partials/_footer.html");
?>