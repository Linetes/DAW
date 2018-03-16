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
            <h1 class="display-4">Lab 19: Jquery</h1>
            <br>
        </div>
    </div>
</header>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"></h1>
        <div class="alert alert-light" role="alert">

        </div>
    </div>
</div>

<!-- Artículo -->
<section class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col" align="center">
                    <div class="card bg-light mb-3" style="max-width: 50rem;">
                        <div class="card-header">Explica y elabora un diagrama sobre cómo funciona AJAX con jQuery.</div>
                        <div class="card-body">
                            <p>
                                <img src="img/Slide1.png" style="height: 20rem">
                                <br>
                                <img src="img/Slide2.png" style="height: 20rem>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" align="center">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">¿Qué alternativas a jQuery existen?</div>
                        <div class="card-body">
                            <p>
                                Java puro
                                <br>
                                Zepto,js
                                <br>
                                XUI
                                <br>
                                Sizzle
                                <br>
                                Qwery
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Bibliografía:</h1>
                    <p class="lead">Kevin Kononenko. (2016). AJAX Explained by Upgrading Your Video Game Character .Obtenido en: https://medium.freecodecamp.org/ajax-explained-by-upgrading-your-video-game-character-17d26305163c</p>
                    <p class="lead">Kevin Kononenko. (2016). JavaScript Callbacks Explained Using Minions .Obtenido en: https://medium.freecodecamp.org/javascript-callbacks-explained-using-minions-da272f4d9bcd</p>
                    <p class="lead">Carlos Benitez .(2011). Alternativas a jQuery. Obtenido en: http://www.etnassoft.com/2011/03/28/alternativas-a-jquery/</p>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<?php
include("partials/_footer.html");
?>
