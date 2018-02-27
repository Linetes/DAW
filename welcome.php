<?php
session_start();
include("partials/_header.html");
?>
<?php
    function result() {
      if ($_POST["password"]==$_POST["password2"] ) {
        echo "Bienvenido ".$_POST["name"];
      } else {
        echo "Su cuenta no se pudo crear porque las contraseñas no coinciden";
      }
    }
?>
<!-- Body -->
<body>
  <!-- Artículo -->
  <section class="container">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="titulo">Account Creation</p>
          <div class="container">
            <div class="alert alert-light" role="alert">
              <br />
              <p class="text-center">
                <?php result(); ?>
              </p>
              <br />
            </div>
          </div>
        </div>
      </div>
  </section>
</body>
<?php
include("partials/_footer.html");
?>
