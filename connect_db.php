<?php
// Hier worden constanten gedefineerd. Een constante kun je niet veranderen.
  define("SERVERNAME", "localhost");
  define("USERNAME", "root");
  define("PASSWORD", "");
  define("DBNAME", "exerciseme");

  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

?>