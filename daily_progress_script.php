<?php
  session_start();
  
   $userrole = ['admin', 'root', 'moderator', 'customer'];
   
   include("./security.php");
   include("./connect_db.php");
   include("./functions.php");

   $id = sanitize($_POST["id"]);
   $day_1 = sanitize($_POST["day_1"]);
   $day_2 = sanitize($_POST["day_2"]);
   $day_3 = sanitize($_POST["day_3"]);
   $day_4 = sanitize($_POST["day_4"]);
   $day_5 = sanitize($_POST["day_5"]);
   $day_6 = sanitize($_POST["day_6"]);
   $day_7 = sanitize($_POST["day_7"]);
   $day_8 = sanitize($_POST["day_8"]);
   $day_9 = sanitize($_POST["day_9"]);
   $day_10 = sanitize($_POST["day_10"]);
   $day_11 = sanitize($_POST["day_11"]);
   $day_12 = sanitize($_POST["day_12"]);
   $day_13 = sanitize($_POST["day_13"]);
   $day_14 = sanitize($_POST["day_14"]);
   $day_15 = sanitize($_POST["day_15"]);
   $day_16 = sanitize($_POST["day_16"]);
   $day_17 = sanitize($_POST["day_17"]);
   $day_18 = sanitize($_POST["day_18"]);
   $day_19 = sanitize($_POST["day_19"]);
   $day_20 = sanitize($_POST["day_20"]);
   $day_21 = sanitize($_POST["day_21"]);
   $day_22 = sanitize($_POST["day_22"]);
   $day_23 = sanitize($_POST["day_23"]);
   $day_24 = sanitize($_POST["day_24"]);
   $day_25 = sanitize($_POST["day_25"]);
   $day_26 = sanitize($_POST["day_26"]);
   $day_27 = sanitize($_POST["day_27"]);
   $day_28 = sanitize($_POST["day_28"]);
   $day_29 = sanitize($_POST["day_29"]);
   $day_30 = sanitize($_POST["day_30"]);


   $sql = "UPDATE `login` SET 
   `day_1` = '$day_1',
   `day_2` = '$day_2',
   `day_3` = '$day_3',
   `day_4` = '$day_4',
   `day_5` = '$day_5',
   `day_6` = '$day_6',
   `day_7` = '$day_7',
   `day_8` = '$day_8',
   `day_9` = '$day_9',
   `day_10` = '$day_10',
   `day_11` = '$day_11',
   `day_12` = '$day_12',
   `day_13` = '$day_13',
   `day_14` = '$day_14',
   `day_15` = '$day_15',
   `day_16` = '$day_16',
   `day_17` = '$day_17',
   `day_18` = '$day_18',
   `day_19` = '$day_19',
   `day_20` = '$day_20',
   `day_21` = '$day_21',
   `day_22` = '$day_22',
   `day_23` = '$day_23',
   `day_24` = '$day_24',
   `day_25` = '$day_25',
   `day_26` = '$day_26',
   `day_27` = '$day_27',
   `day_28` = '$day_28',
   `day_29` = '$day_29',
   `day_30` = '$day_30'
   WHERE `id` = $id";
   //echo $sql; exit();
   mysqli_query($conn, $sql);

   header("Location: ./index.php?content=Daily_progress");
?>
