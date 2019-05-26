<?php
    //var_dump($_POST);

    include("./connect_db.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    $sql = "SELECT * FROM `login` WHERE `email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if ( mysqli_num_rows($result) == 1) {
        // ga verder met procedure
        $record = mysqli_fetch_assoc($result);

        $blowfish_password = $record["password"];

        if (password_verify($password, $blowfish_password)) {

            $_SESSION["id"] = $record["id"];
            $_SESSION["email"] = $email;
            $_SESSION["userrole"] = $record["userrole"];

            switch ($record["userrole"]){
                case 'moderator':
                    echo '<main class="container"><h4>Inloggen...</h4></main>';      
                    header("Refresh: 2; url=./index.php?content=home");
                break;
                case 'customer':
                    echo '<main class="container"><h4>Inloggen...</h4></main>';      
                    header("Refresh: 2; url=./index.php?content=home");
                break;
                case 'admin':
                    echo '<main class="container"><h4>Inloggen...</h4></main>';      
                    header("Refresh: 2; url=./index.php?content=home");
                break;
                case 'root':
                    echo '<main class="container"><h4>Inloggen...</h4></main>';      
                    header("Refresh: 2; url=./index.php?content=home");
                break;
                default:
                    echo '<main class="container"><h4>Inloggen...</h4></main>';      
                    header("Refresh: 2; url=./index.php?content=home");
                break;
            }


        } else {
            echo '<main class="container"><div class="alert alert-danger" role="alert">Uw password is niet correct</div></main>';
            header("Refresh: 3; url=./index.php?content=login");
        }
    } else {
        echo '<main class="container"><div class="alert alert-danger" role="alert">E-mail bestaat niet</div></main>';
        header("Refresh: 4; url=./index.php?content=login");
    }
?>