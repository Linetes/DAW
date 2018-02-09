<?php
  include("Partials/_imports.html");
  include("Partials/_header.html");
?>

  <!-- Body -->
  <body>

    <!-- Título -->
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                        <h1 class="display-4">Lab 9: Introducción a php</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Artículo -->
    <section class="container">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Ejercicios</h1>
                <div class="alert alert-light" role="alert">
                  <?php

                  function avg(){
                    $numbers = array(1,2,3,4,5,6,7,8);
                    $average = array_sum($numbers)/count($numbers);
                    echo $average;
                  }

                  function calculate_median() {
                    $numbers = array(16,23,39,44,59,62,79,86);
                    $count = count($numbers); //total numbers in array
                    $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
                    if($count % 2) { // odd number, middle is the median
                      $median = $numbers[$middleval];
                    } else { // even number, calculate avg of 2 medians
                      $low = $numbers[$middleval];
                      $high = $numbers[$middleval+1];
                      $median = (($low+$high)/2);
                    }
                    echo $median;
                  }

                  echo "Average ";
                  avg();
                  echo "  Median ";
                  calculate_median();


                  ?>
                </div>

          </div>
        </div>


        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</div>
                    <div class="card-body">
                        Pone información de la configuración de PHP.
                        <div class="alert alert-primary" role="alert">
                          INFO_VARIABLES - Muestra todas las variables prederteminadas.
                        </div>
                        <div class="alert alert-primary" role="alert">
                          INFO_ENVIRONMENT - Información de la variable $_ENV.
                        </div>
                        <div class="alert alert-primary" role="alert">
                          INFO_CREDITS - Muestra los créditos de Php.
                        </div>

                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</div>
                    <div class="card-body">
                      <p>Usar un servidor privado, xampp, mamp y otras acplicaciones te brindan el servicio de un servidor privado a través de localhost.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</div>
                    <div class="card-body">
                        <p>Las acciones del usuario piden una petición de un archivo html que está en el servidor, php interpreta y puede todavía conectarse a una base de datos para recolectar información.</p>
                    </div>
                  </div>
                </div>
              </div>

          <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Bibliografía:</h1>
                <p class="lead">NA.(2018). CSS. W3Schools. Obtenido en: https://www.w3schools.com/php/default.asp</p>
                <p class="lead">Anibal de la Torre.(2006). Lenguajes del lado servidor o cliente. Obtenido en: http://www.adelat.org/media/docum/nuke_publico/lenguajes_del_lado_servidor_o_cliente.html</p>
                <p class="lead">Jarryd Lisher.(2016). Setting up PHP Development & Production Server Environments. Obtenido en: https://www.codementor.io/php/tutorial/how-to-setup-php-development-production-server</p>
                <p class="lead">NA.(2018). phpinfo. php. Obtenido en: http://php.net/manual/en/function.phpinfo.php</p>
              </div>
          </div>
        </div>
      </div>
    </section>
  </body>
<?php
  include("Partials/_footer.html");
?>
