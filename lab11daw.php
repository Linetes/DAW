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
                        <h1 class="display-4">Lab 11: Manejo de formas con php y modelo de capas</h1>
                        <h3> Para este Lab usaré la página register.php</h3>
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
                    <div class="card-header">Aparte de los arreglos $_POST y $_GET, ¿qué otros arreglos están predefinidos en php y cuál es su función?</div>
                    <div class="card-body">

                        <div class="alert alert-primary" role="alert">
                          $GLOBALS: Da todas las variables globales.
                        </div>
                        <div class="alert alert-primary" role="alert">
                          $_SERVER: Da información del servidor y del entorno.
                        </div>
                        <div class="alert alert-primary" role="alert">
                          $_GET: Obtiene info.
                        </div>
                        <div class="alert alert-primary" role="alert">
                          $_POST: Obtiene info pero no la muestra.
                        </div>
                        <div class="alert alert-primary" role="alert">
                          $_FILES: Variables de HTTP para subir archivos.
                        </div>
                        <div class="alert alert-primary" role="alert">
                          $_REQUEST: Variables de HTTP de request.
                        </div>
                        <div class="alert alert-primary" role="alert">
                          $_ENV: Variables del entorno.
                        </div>
                        <div class="alert alert-primary" role="alert">
                          $_COOKIE: Cookies de HTTP.
                        </div>

                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Por qué es una buena práctica separar el controlador de la vista?.</div>
                    <div class="card-body">
                      <p>Porque es un patrón de diseño llamado MVP (Modelo Vista controlador en Php) Es preferente que no lo vea el usuario para que no lo pueda atacar o ver información que no le corresponde</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué es XSS y cómo se puede prevenir?</div>
                    <div class="card-body">
                        <p>Es un ataque llamado Cross Side Scripting. Cuando un usuario pone un script de js, la base de datos lo acepta y lo agrega al código. Lo que se puede hacer es agregar un código que cuando haya un script en alguna forma lo toma como html y no como js.</p>
                    </div>
                  </div>
                </div>
              </div>

          <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Bibliografía:</h1>
                <p class="lead">Lujan,Sergio .(2012). Predefined Variables. Obtenido en: http://desarrolloweb.dlsi.ua.es/cursos/2012/web-programming-with-php/predefined-variables</p>
                <p class="lead">Mollericona, Edson.(2014). MVP. Obtenido en: http://www.edsonmm.com/modelo-vista-controlador-php/</p>
                <p class="lead">Morris, John.(2015). How To Prevent XSS Attacks by Escaping Output in PHP. Obtenido en: https://medium.com/@jpmorris/how-to-prevent-xss-attacks-by-escaping-output-in-php-942204bf184</p>
              </div>
          </div>
        </div>
      </div>
    </section>
  </body>
<?php
  include("partials/_footer.html");
?>
