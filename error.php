<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Error</title>
  </head>
<body>
    <h1>Error!</h1>
    <?php
    if ( isset($_SESSION['message']) AND !empty($_SESSION['message'])) {
      echo $_SESSION['message'];
    }else {
      header("location: ./index.php");
    }
    ?>
    <a href="index.php"> Back to home!</a>
</body>
</html>
