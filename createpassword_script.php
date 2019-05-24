<?php
  //var_dump($_POST);

  include("./connect_db.php");
  include("./functions.php");

  $password = sanitize($_POST["password"]);
  $checkpassword = sanitize($_POST["checkpassword"]);
  $id = sanitize($_POST["id"]);

  if ( !empty($password) && !empty($checkpassword)) {

      if ( !strcmp($password, $checkpassword)) {
        $blowfish_password = password_hash($password, CRYPT_BLOWFISH); 
      
        $sql = "UPDATE `login` 
                SET `password` = '$blowfish_password' 
                WHERE `id` = $id"; 
      //  echo $sql; exit();
        $result = mysqli_query($conn, $sql);

        if ( $result ) {
          // succes
          echo '<main class="container"><div class="alert alert-success" role="alert">U wachtwoord is succesvol veranderd. U wordt doorgestuurd naar de inlogpagina</div></main>';
          header("Refresh: 8; url=./index.php?content=login");
        } else {
          // foutmelding
          echo '<main class="container"><div class="alert alert-danger" role="alert">Er is iets misgegaan tijdens het registreren van uw wachtwoord. Probeer het opnieuw via de activatielink</div></main>';
          header("Refresh: 8; url=./index.php?content=home");
        }


      } else {
        echo '<main class="container"><div class="alert alert-danger" role="alert">U ingevoerde wachtwoorden zijn niet gelijk, probeer het nogmaals.</div></main>';
        header("Refresh: 8; url=./index.php?content=createpassword&id=$id");
      }
    } else {
      // Foutmelding      
      echo '<main class="container"><div class="alert alert-danger" role="alert">U heeft een van de wachtwoordvelden niet ingevuld probeer het nogmaals...</div></main>';
      header("Refresh: 8; url=./index.php?content=createpassword&id=$id");
    }

?>