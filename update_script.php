<?php
   session_start();

   $userrole = ['admin', 'root'];
   
   include("./security.php");
   include("./connect_db.php");
   include("./functions.php");

   $id = sanitize($_POST["id"]);
   $email = sanitize($_POST["email"]);
   $userrole = sanitize($_POST["userrole"]);

   $sql = "UPDATE `login` SET 
   `email` = '$email',
   `userrole` = '$userrole'
   WHERE `id` = $id";
   //echo $sql; exit();
   mysqli_query($conn, $sql);

   header("Location: ./index.php?content=change_userrole");
?>

