<?php
   session_start();

   $userrole = ['admin', 'root'];
   
   $id = $_GET["id"];

   include("./connect_db.php");
   include("./security.php");

   $sql = "DELETE FROM `users` WHERE `id` = $id";

   $result = mysqli_query($conn, $sql);
   
   header ("Location: ./index.php?content=change_userole")
?>