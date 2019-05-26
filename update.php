<?php
  session_start();

  $userrole = ['admin', 'root'];

  $id = $_GET["id"];

  include("./connect_db.php");
  include("./security.php");

  $sql = "SELECT * FROM `login` WHERE `id` = $id";

  $result = mysqli_query($conn, $sql);

  $record = mysqli_fetch_assoc($result);
      
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

<body>

  <main class="container">

    <!-- form -->
    <div class="row">

      <div class="col-3"></div>

      <div class="col-6">
        <form action="./update_script.php" method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
              value="<?php echo $record['email']?>">
          </div>

          <div class="form-group">
            <label for="userrole">userrole</label>
            <select class="custom-select" id="userrole" name="userrole">
              <option selected="selected"><?php echo $record['userrole']?></option>
              <option value="">--------------------</option>
              <option value="root">root</option>
              <option value="admin">admin</option>
              <option value="moderator">moderator</option>
              <option value="customer">customer</option>
            </select>
          </div>

          <input type="hidden" name="id" value="<?php echo $id?>">
          <button type="submit" class="btn btn-primary">Wijzig</button>
        </form>
      </div>

      <div class="col-3"></div>

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