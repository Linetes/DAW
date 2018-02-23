<?php
include("partials/_header.html");
?>
<!-- Body -->
<body>
  <!-- Artículo -->
  <section class="container">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="titulo">Create an Account</p>
          <div class="container">
            <div class="alert alert-light" role="alert">
              <form action="welcome.php" method="POST">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="Username">Username</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" id="username" name="name" required>
                </div>
                <label for="Email">Email address</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="email" placeholder="email@example.com" name="email" required>
                </div>
                <label for="Username">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype Password" id="retype_password" name="password2" required>
                </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkb" name="check" required>
                        <label class="form-check-label" for="dropdownCheck2">Accept Terms and Conditions</label>
                    </div>
                <button type="button-centered" class="btn btn-primary btn-lg" onclick='check();'>Create Account </button>
                <span id='message'></span>
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
