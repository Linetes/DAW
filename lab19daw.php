<?php
session_start();
include("partials/_header.html");
?>

  <!-- Body -->
  <body>

    <!-- Título -->
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                        <h1 class="display-4">Lab 16: php y manipulación de registros de la base de datos</h1>
                        <h3> Para este Lab usaré la página login.php</h3>
                </div>
            </div>
        </div>
    </header>



    <!-- Artículo -->
    <section class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Por qué es una buena práctica separar el modelo del controlador?</div>
                    <div class="card-body">
                        <p>Open Data Base Conectivity, es util para poder accesar a los datos todo el tiempo y no sólo que se guarden los datos en la sesión.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué es SQL injection y cómo se puede prevenir?</div>
                    <div class="card-body">
                      <p>
                          Cuando ponen código de SQL en las formas, pueden poner un código que borre la base de datos.
                          <br>
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
                <p class="lead">PeeHaa .(2018). How can I prevent SQL injection in PHP? . Stack Overflow. Obtenido en: https://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php</p>
              </div>
          </div>
        </div>
      </div>
    </section>
  </body>
<?php
  include("partials/_footer.html");
?>
