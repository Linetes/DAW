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
                        <h1 class="display-4">Lab 13: Manejo de sesiones con php</h1>
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
                    <div class="card-header">¿Por qué es importante hacer un session_unset() y luego un session_destroy()?</div>
                    <div class="card-body">
                        <p></p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Cuál es la diferencia entre una variable de sesión y una cookie?</div>
                    <div class="card-body">
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?</div>
                    <div class="card-body">
                        <p></p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué es CSRF y cómo puede prevenirse?</div>
                    <div class="card-body">
                        <p></p>
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
