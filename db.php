<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'SchoolTracker';
  $mysqli = new mysqli( $host, $user, $pass,$db ) or die($mysqli->error);

  if($mysqli->connect_errno > 0){
    die('Unable to connect to database [' . $mysqli->connect_error . ']');
  }
?>
