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
                        <p>Porque el unset libera todas las variables de la sesión y destroy destruye todos los datos de la sesión.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Cuál es la diferencia entre una variable de sesión y una cookie?</div>
                    <div class="card-body">
                      <p>Las variables de la sesión son guardadas en el servidor y las cookies son guardadas en el cliente.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?</div>
                    <div class="card-body">
                        <p>Le agrega al nombre del archivo el Timestamp.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué es CSRF y cómo puede prevenirse?</div>
                    <div class="card-body">
                        <p>Evitando tener varias sesiones abiertas, borrar las cookies cuando ya no se usan.</p>
                    </div>
                  </div>
                </div>
              </div>

          <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Bibliografía:</h1>
                <p class="lead">Gumbo .(2010). What is the difference between session_unset() and session_destroy() in PHP?. Stack Overflow. Obtenido en: https://stackoverflow.com/questions/4303311/what-is-the-difference-between-session-unset-and-session-destroy-in-php</p>
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
