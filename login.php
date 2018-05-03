
<?php
//Masken von Email
$username = $mysqli->escape_string($_POST['username']);
$result = $mysqli->query("SELECT * FROM users WHERE username='$username'");

if ($result->num_rows == 0) {
  $_SESSION['message'] = "User exisitert nicht!";
  header("location: error.php");
}else {
  $user = $result->fetch_assoc();

  if (password_verify($_POST['password'], $user['password']) ) {

    $_SESSION['username'] = $user['username'];

    $_SESSION['logged_in'] = true;

    header("location: ./main.php");
  }else {
    $_SESSION['message'] = "Falsches Passwort!, try again";
    header("location: ./error.php");
  }
}
?>
