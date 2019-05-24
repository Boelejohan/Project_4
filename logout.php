<main class="container">
<?php
  //  Haal de ladekasten leeg
  session_unset();
  //  Sla de kast $_SESSION in puin
  session_destroy();
  // Uitloggen met alert en doorsturen
  header("Refresh: 2; url=./index.php?content=login");
?> 

<h4>Uitloggen...</h4>
</main>