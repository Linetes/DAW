<?php
session_start();
require_once("modelo.php");
include("partials/_header.html");
?>

  <!-- Body -->
  <body>

    <!-- Título -->
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                        <h1 class="display-4">Lab 14: php y consultas dinámicas a la base de datos</h1>
                        <h3> Para este Lab usaré la página login.php</h3>
                </div>
            </div>
        </div>
    </header>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Ejercicios con Fruit</h1>
            <div class="alert alert-light" role="alert">
                <h1>Normal</h1>
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
                        <?php

                        $result = getFruits();

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr class=''>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["units"] . "</td>";
                                echo "<td>" . $row["quantity"] . "</td>";
                                echo "<td>" . $row["price"] . "</td>";
                                echo "<td>" . $row["country"] . "</td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <h1>Por Nombre</h1>
                <form action="lab14daw.php" method="POST">
                    <label for="usuario">Fruta que quieres</label>
                    <div class="input-group mb-3">
                        <input placeholder="mango" class="form-control" name="fruit_name" type="text" class="validate" required>
                    </div>
                    <button type="button-centered" class="btn btn-primary btn-lg">Submit</button>
                </form>
                <br>
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
                        <?php
                        $result = getFruitsByName(htmlspecialchars($_POST["fruit_name"]));

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr class=''>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["units"] . "</td>";
                                echo "<td>" . $row["quantity"] . "</td>";
                                echo "<td>" . $row["price"] . "</td>";
                                echo "<td>" . $row["country"] . "</td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <h1>Más Barato</h1>
                <form action="lab14daw.php" method="POST">
                    <label for="usuario">Cantidad Máxima</label>
                    <div class="input-group mb-3">
                        <input placeholder="10" class="form-control" name="cheap_price" type="text" class="validate" required>
                    </div>
                    <button type="button-centered" class="btn btn-primary btn-lg">Submit</button>
                </form>
                <br>
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
                    <?php
                    $result = getCheapestFruits($_POST["cheap_price"]);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr class=''>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["units"] . "</td>";
                            echo "<td>" . $row["quantity"] . "</td>";
                            echo "<td>" . $row["price"] . "</td>";
                            echo "<td>" . $row["country"] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Artículo -->
    <section class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué es ODBC y para qué es útil?</div>
                    <div class="card-body">
                        <p>Open Data Base Conectivity, es util para poder accesar a los datos todo el tiempo y no sólo que se guarden los datos en la sesión.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué es SQL Injection?</div>
                    <div class="card-body">
                      <p>Cuando ponen código de SQL en las formas, pueden poner un código que borre la base de datos.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué técnicas puedes utilizar para evitar ataques de SQL Injection?</div>
                    <div class="card-body">
                        <p>
                            Con SQLi, se usa una función que agarre la inyección.
                            <br>
                            $stmt = $dbConnection->prepare('SELECT * FROM employees WHERE name = ?');
                            $stmt->bind_param('s', $name); // 's' specifies the variable type => 'string'

                            $stmt->execute();

                            $result = $stmt->get_result();
                            while ($row = $result->fetch_assoc()) {
                            // do something with $row
                            }
                        </p>
                    </div>
                  </div>
                </div>
              </div>

          <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Bibliografía:</h1>
                <p class="lead">NA .(2018). ¿Qué es el ODBC?. Universidad de Valencia. Obtenido en: https://www.uv.es/jac/guia/gestion/gestion3.htm</p>
                <p class="lead">Daniel Vassallo. Jacob. (2016). When should I use session variables instead of cookies? Stack Overflow. Obtenido en: https://stackoverflow.com/questions/2240556/when-should-i-use-session-variables-instead-of-cookies</p>
                <p class="lead">NA.(2018). CSRF Attacks, XSRF or Sea-Surf. Obtenido en: https://www.acunetix.com/websitesecurity/csrf-attacks/</p>
              </div>
          </div>
        </div>
      </div>
    </section>
  </body>
<?php
  include("partials/_footer.html");
?>
