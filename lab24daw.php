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
            <h1 class="display-4">Laboratorio 24: Servicios web REST con php</h1>
        </div>
    </div>
</header>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <?php
        $name = "cesar";
        $url = "http://localhost:8888/DAW-BD/web-service/public/$name"; //Route to the REST web service
        $c = curl_init($url);
        $response = curl_exec($c);
        curl_close($c);
        //var_dump($response);

        $name2 = "lalo";
        $url2 = "http://localhost:8888/DAW-BD/web-service/public/funcion/$name2"; //Route to the REST web service
        $c2 = curl_init($url2);
        $response2 = curl_exec($c2);
        curl_close($c2);
        ?>
    </div>
</div>

<!-- Artículo -->
<section class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col" align="center">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">¿A qué se refiere la descentralización de servicios web?</div>
                        <div class="card-body">
                            <p>
                                A que no se haga todo en un solo lugar,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" align="center">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">¿Cómo puede implementarse un entorno con servicios web disponibles aún cuando falle un servidor?</div>
                        <div class="card-body">
                            <p>
                                Se pone dentro de condicionales para que si falla un servicio web, no afecte a toda la aplicación.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Bibliografía:</h1>
                    <p class="lead">W3Schools. (2018). API .Obtenido en: https://www.w3schools.com/graphics/google_maps_intro.asp</p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<?php
include("partials/_footer.html");
?>
