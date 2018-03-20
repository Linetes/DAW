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
            <h1 class="display-4">Lab 19: Jquery</h1>
        </div>
    </div>
</header>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"></h1>
        <div class="alert alert-light" role="alert">
            <style>
                * {
                    box-sizing: border-box;
                }

                #myInput {
                    background-image: url('/css/searchicon.png');
                    background-position: 10px 10px;
                    background-repeat: no-repeat;
                    width: 100%;
                    font-size: 16px;
                    padding: 12px 20px 12px 40px;
                    border: 1px solid #ddd;
                    margin-bottom: 12px;
                }

                #myTable {
                    border-collapse: collapse;
                    width: 100%;
                    border: 1px solid #ddd;
                    font-size: 18px;
                }

                #myTable th, #myTable td {
                    text-align: left;
                    padding: 12px;
                }

                #myTable tr {
                    border-bottom: 1px solid #ddd;
                }

                #myTable tr.header, #myTable tr:hover {
                    background-color: #f1f1f1;
                }
            </style>
            <h2>My Customers</h2>

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

            <table id="myTable">
                <tr class="header">
                    <th style="width:60%;">Name</th>
                    <th style="width:40%;">Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Berglunds snabbkop</td>
                    <td>Sweden</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Koniglich Essen</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Italy</td>
                </tr>
                <tr>
                    <td>North/South</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Paris specialites</td>
                    <td>France</td>
                </tr>
            </table>

            <script>
                function myFunction() {
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>
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
