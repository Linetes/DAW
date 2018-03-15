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
                        <h1 class="display-4">Lab 17: AJAX</h1>
                        <br>
                </div>
            </div>
        </div>
    </header>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Ejercicio AJAX</h1>
            <div class="alert alert-light" role="alert">
                <form>
                    <input type="text" id="userInput" onkeyup="sendRequest()">
                </form>

                <div id="ajaxResponse"></div>
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
                    <div class="card-header">¿Qué importancia tiene AJAX en el desarrollo de RIA's (Rich Internet Applications?</div>
                    <div class="card-body">
                        <p>AJAX hace las funciones sin necesidad de hacer reload a la página, esto le da un valor estra a la página ya que envuelve más al usuario.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">¿Qué implicaciones de seguridad tiene AJAX? ¿Dónde se deben hacer las validaciones de seguridad, del lado del cliente o del lado del servidor?</div>
                    <div class="card-body">
                      <p>
                          AJAX, al igual que JS es muy debil en términos de seguridad, por ello se hace del lado del servidor el AJAX para que el servidor pueda detener funciones maliciosas.
                      </p>
                    </div>
                  </div>
                </div>
                  <div class="col">
                      <div class="card bg-light mb-3" style="max-width: 18rem;">
                          <div class="card-header">¿Qué es JSON?</div>
                          <div class="card-body">
                              <p>
                                  JavaScript Object Notation: Es un formato para intercambiar datos de forma muy poco pesada, es muy parecida la sintaxis a la familia de C.
                                  <br>
                                  Guarda datos en Strings para poder usarlos.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>

          <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Bibliografía:</h1>
                  <p class="lead">NA .(2018). JSON. Obtenido en: http://json.org</p>
                  <p class="lead">NA .(2018). Intro to JSON. W3Schools. Obtenido en: https://www.w3schools.com/js/js_json_intro.asp</p>
                  <p class="lead">Chaikin Hall .(2018). Rich Internet Applications with Ajax. Johns Hopkins. Obtenido en: https://ep.jhu.edu/programs-and-courses/605.787-rich-internet-applications-with-ajax</p>
              </div>
          </div>
        </div>
      </div>
    </section>
  </body>
<?php
  include("partials/_footer.html");
?>
