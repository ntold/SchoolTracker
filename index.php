<?php
  include 'db.php';
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>School Tracker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <!-- Material icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['login'])){
      include 'login.php';
  }elseif (isset($_POST['register'])) {
    include 'register.php';
  }
}
?>
<body>
<?php include './header.php'?>
    <div class >
        <div class>
            <h1> Willkommen zurück </h1>
            <form method="post" autocomplete="off">
                <p>Username</p>
                <input type="username" required autocomplete="off" name="username"/>
                <p>Password</p>
                <input type="password" required autocomplete="off" name="password"/> <br />
                <button class="button" name="login">Log In </button>
            </form>
        </div>
    </div>
<!-- <h1>Registration</h1>
<form class="" method="post" autocomplete="off">
Username: <br />
<input type="username"required autocomplete="off" name="username" /> <br />
Password: <br />
<input type="password"required autocomplete="off" name="password" /> <br />
<button type="submit" name="register">Register</button> -->
</form>
</body>
</html>
