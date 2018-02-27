<?php
include("partials/_header.html");
?>

<?php
    session_start();

    if(isset($_SESSION["usuario"]) ) {
        include("partials/_header.html");
        $user = $_SESSION["usuario"];
        include("partials/_tienda_view.html");
        include("partials/_footer.html");
    }else if ($_POST["usuario"]=="lalo" && $_POST["password"]=="hockey" ) {
        unset($_SESSION["error"]);
        $_SESSION["usuario"] = $_POST["usuario"];
        $user = $_SESSION["usuario"];
        include("partials/_header.html");
        include("partials/_tienda_view.html");
        include("partials/_footer.html");
    } else if($_POST["usuario"]!="lalo" || $_POST["password"]!="hockey") {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }
?>
<!-- Body -->
<body>
  <!-- Artículo -->
  <section class="container">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="titulo">Sign In</p>
          <div class="container">
            <div class="alert alert-light" role="alert">
              <form action="welcome.php" method="POST">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="Username">Username</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" id="username" name="name" required>
                </div>
                <label for="Username">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                </div>
                <button type="button-centered" class="btn btn-primary btn-lg" onclick='check();'>Create Account </button>
                <span id='message'></span>
                </form>
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>
</body>
<?php
include("partials/_footer.html");
?>
