<?php
include("partials/_header.html");
include("html/index.html");
include("partials/_footer.html");
?>

<?php
function _e($string) {
  echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
  //echo htmlentities($string, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Escape Output</title>
  </head>
  <body>
    <?php _e('This is a problem: <script>alert("Yikes");</script>'); ?>
  </body>
</html>
