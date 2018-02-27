<?php
session_start();
$numbers = array(2,1,4,3,5,8,7,8);
$numbers2 = array(33,12,45,98,1,4894,23,12,89,43);
$numero = 21;
$numero2 = 45;

function avg($num){
  $average = array_sum($num)/count($num);
  return $average;
}

function median($num) {
  sort($num);
  if( sizeof($num) % 2 == 0){
      return ($num[(sizeof($num)/2)-1]+$num[sizeof($num)/2]/2);
  } else {
      return $num[sizeof($num)/2];
  }
}
function printit($num){
    for ($i=0; $i<sizeof($num); $i++) {
        echo $num[$i]." ";
    }
}
function enlist($num){
    echo "<div class='row'><div class='col-sm-4'><ul class='list-group'>";
    foreach($num as $valor){
        echo "<li class='list-group-item'>$valor</li>";
    }
    echo "</ul></div>";

    sort($num);
    echo "<div class='col-sm-4'><ul class='list-group'>";
    foreach($num as $valor){
        echo "<li class='list-group-item'>$valor</li>";
    }
    echo "</ul></div>";

    rsort($num);
    echo "<div class='col-sm-4'><ul class='list-group'>";
    foreach($num as $valor){
        echo "<li class='list-group-item'>$valor</li>";
    }
}

function tabulate($n){
    echo "<table class='table table-bordered'><thead class='thead-dark'><tr><th>n</th><th>n^2</th><th>n^3</th></tr></thead><tbody>";
    $i = 0;
    for($i = 1; $i<=$n; $i++){
        echo "<tr><td>".$i."</td><td>".pow($i,2)."</td><td>".pow($i,3)."</td></tr>";
    }
    echo "</tbody></table>";
}

function ftam($num) {
$res = $num/3.28084;
return $res;
}

function maft($num) {
$res = $num*3.28084;
return $res;
}

?>
<?php
  include("partials/_header.html");
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
                  <div class="container-fluid">
                      <h4>Arreglo<br /> <?php printit($numbers)?></h4>
                      <div class="row">
                          <div class="col-sm-6">
                            Media: <?php echo avg($numbers)?>
                            <br />
                            Mediana: <?php echo median($numbers)?>
                          </div>
                      </div>
                      <br />
                      <h4>Arreglo 2<br /> <?php printit($numbers2)?></h4>
                      <?php
                      enlist($numbers2);
                      ?>
                      <br />
                  </div>
                  <div class="container-fluid">
                      <?php tabulate(5)?>
                  </div>
                  <div class="container-fluid">
                      <h4>Meters to Feet<br />
                        <?php
                        echo $numero;
                        echo " = ";
                        echo maft($numero);
                        ?>
                      </h4>
                      <h4>Feet to Meters<br />
                        <?php
                        echo $numero2;
                        echo " = ";
                        echo ftam($numero2);
                        ?>
                      </h4>
                  </div>
                </div>
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
  include("partials/_footer.html");
?>
