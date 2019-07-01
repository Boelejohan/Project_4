<?php

  $userrole = ['admin', 'root'];

  include("./security.php");
  include("./connect_db.php");

  $sql = "SELECT * FROM `login`";

  $result = mysqli_query($conn, $sql);

  $records = "";

  while ($record = mysqli_fetch_assoc($result)) {
 
  $records .= "<tr> 
  <th scope='row'>" . $record["id"] . "</th>
  <td>" . $record["email"] . "</td>
  <td>" . $record["userrole"] . "</td>
  <td> 
  <a href='./update.php?id=" . $record['id'] . "'> 
  <i class='far fa-edit'></i>
  </td>
  <td> 
  <a href='./delete.php?id=" . $record['id'] . "'> 
  <i class='fas fa-minus-circle'></i> </td>
  </tr>";
  } 
?>
  <main class="container">
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Email</th>
              <th scope="col">Userrole</th>
              <th scope="col">Edit</th>
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

