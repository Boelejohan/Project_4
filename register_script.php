<?php
  include("./connect_db.php");

  include("./functions.php");

  $email = $_POST["email"];

  if ( empty($_POST["email"])) {
    echo '<div class="alert alert-light" role="alert">U heeft geen e-mailadres ingevoerd. Dit is een verplicht veld. Probeer het nogmaals</div>';
    header("Refresh: 3; url=./index.php?content=register_form");
  } else {

  $sql = "SELECT * FROM `login` WHERE `email` = '$email'";

  $result = mysqli_query($conn, $sql);

  if ( mysqli_num_rows($result) == 1 ) {
      echo '<div class="alert alert-warning" role="alert">Bestaat al</div>';
      header("Refresh: 3; ./index.php?content=register_form");
  } else {

    date_default_timezone_set("Europe/Amsterdam");
    $length_email = strlen($email);
    $date_time = date('d-m-Y H:i:s');
    $reverse_email = strrev($email);

    $password = password_hash($date_time . $reverse_email . $length_email, PASSWORD_BCRYPT);

    $pw = password_hash($password, PASSWORD_BCRYPT);

  $sql = "INSERT into `login`(`id`,
                              `email`,
                              `password`)
                       VALUES (NULL,
                               '$email',
                               '$password')";

  $result = mysqli_query($conn, $sql);

  $id = mysqli_insert_id($conn);

  if ($result) {
    $to = $email;
    $subject = "Uw activatielink";
    $message = "<!DOCTYPE html>
                <html>
                  <head>
                    <style>
                      body {
                        background-color: powderblue;
                      }
                    </style>
                  </head>
                  <body>
                    <h1>Beste gebruiker,</h1>
                    <p>Je kunt met deze link uw account activeren</p>
                    <p>Je kunt vervolgens uw wachtwoord invullen</p>
                    <p><a href='http://www.exerciseme.com/index.php?content=createpassword&id=" . $id . "&pw=" . $pw . "'>Activatielink</a></p> 
                    <p>Groet</p>
                    <p>Boele Coolen, Admin</p>
                  </body>
                </html>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <admin@loginregistratie.2019.com' . "\r\n";
    $headers .= 'Cc: winnaarmail@lotto.com' . "\r\n";
    $headers .= 'Bcc: myboss@gamil.com' . "\r\n";


    mail( $to, $subject, $message, $headers);
    
    echo '<div class="alert alert-success" role="alert">Je bent geregistreerd. Ga naar jouw mail en klik op de activatie link om de registratie te voltooien.</div>';
    header("Refresh: 4; url=./index.php?content=login");
  } else {
    echo '<div class="alert alert-danger" role="alert">Er is iets misgegaan tijdens het registreren probeer het nogmaals</div>';
    header("Refresh: 4; url=./index.php?content=register_form");
  }
 }
}
?>