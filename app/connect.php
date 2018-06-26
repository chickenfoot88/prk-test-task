<?php

  $host = 'localhost';
  $username = 'p447225_pkr';
  $db = 'p447225_pkr';
  $password = 'W6j1A1r8';

  $connection = new mysqli($host, $username, $password, $db);
  mysqli_query($connection, "SET NAMES UTF8");
  mysqli_query($connection, "SET CHARACTER SET UTF8");

?>
