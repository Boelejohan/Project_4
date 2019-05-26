<?php
  session_start();

  $userrole = ['admin', 'root'];

  include("./security.php");
  include("./connect_db.php");

  $sql = "SELECT * FROM `login`";

  $result = mysqli_query($conn, $sql);

  $records = "";

  while ($record = mysqli_fetch_assoc($result)) {
 
  $records .= "<tr> 
  <th scope='row'>" . $record["id"] . "</th>
  <th scope='row'>" . $record["email"] . "</th>
  <td>" . $record["userrole"] . "</td>
  <td> 
  <a href='./update.php?id=" . $record['id'] . "'> 
  <img src='./images/edit.png' alt='wijzig'> 
  </td>
  <td> 
  <a href='./delete.php?id=" . $record['id'] . "'> 
  <img src='./images/drop.png' alt='verwijder'> </td>
  </tr>";
  } 
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Exercise me</title>
</head>

<nav class="navbar navbar-expand-sm" id="nav">
<a class="nav-link" href="./index.php?content=home">Home<span class="sr-only">(current)</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>


<body>

  <main class="container">
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Email</th>
              <th scope="col">Userrole</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
      echo $records;
      ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>