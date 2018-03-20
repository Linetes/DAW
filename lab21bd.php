<?php
session_start();
require_once("modelo.php");
include("partials/_header.html");
function insert_fruit() {

    $name = htmlspecialchars($_POST['nameFruit']);
    $units = htmlspecialchars($_POST['unitsFruit']);
    $quantity = htmlspecialchars($_POST['quantityFruit']);
    $price = htmlspecialchars($_POST['priceFruit']);
    $country = htmlspecialchars($_POST['countryFruit']);

    //validacion de datos
    if(strlen($name) > 0 && strlen($units) > 0 && strlen($quantity) > 0 && strlen($price)) {
        if(is_numeric($quantity) && is_numeric($price)){
            if(addFruit($name, $units, $quantity, $price, $country)){
                return true;
            } else{
                return false;
            }
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
                <div class="row">
                        <h1 class="display-4">Laboratorio 21: Manipulación de datos usando Stored Procedures</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Ejercicio con Fruit y Stored Procedure</h1>
            <div class="alert alert-light" role="alert">
                <div class="row">
                    <div class="col">
                        <h1>Insertar Fruta</h1>
                        <form action="lab21bd.php" method="POST">
                            <label for="nameFruit">Name</label>
                            <div class="input-group mb-3">
                                <input placeholder="Pera" class="form-control" name="nameFruit" type="text" class="validate" required>
                            </div>
                            <label for="unitsFruit">Units</label>
                            <div class="input-group mb-3">
                                <input placeholder="4" class="form-control" name="unitsFruit" type="text" class="validate" required>
                            </div>
                            <label for="quantityFruit">Quantity</label>
                            <div class="input-group mb-3">
                                <input placeholder="11" class="form-control" name="quantityFruit" type="text" class="validate" required>
                            </div>
                            <label for="priceFruit">Price</label>
                            <div class="input-group mb-3">
                                <input placeholder="11" class="form-control" name="priceFruit" type="text" class="validate" required>
                            </div>
                            <label for="countryFruit">Country</label>
                            <div class="input-group mb-3">
                                <input placeholder="Mexico" class="form-control" name="countryFruit" type="text" class="validate" required>
                            </div>

                            <button type="button-centered" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                        <br>
                        <?php
                            insert_fruit();
                        ?>
                    </div>
                    <div class="col">
                        <h1>Base de Datos</h1>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Units</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Country</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php getFruits();?>
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
