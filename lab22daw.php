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
            <h1 class="display-4">Lab 22: API</h1>
        </div>
    </div>
</header>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h3>My Google Maps Demo</h3>
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {lat: -25.363, lng: 131.044};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
    </div>
</div>

<!-- Artículo -->
<section class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col" align="center">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">¿Qué ventajas y desventajas tiene la integración de tus aplicaciones web con servicios web desarrollados por terceros?</div>
                        <div class="card-body">
                            <p>
                                No es tan personalizable y a veces la documentación no es buena, haciendo su implementación muy complicada.
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
