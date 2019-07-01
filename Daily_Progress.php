<?php

$userrole = ['admin', 'root', 'moderator', 'customer'];

include("./security.php");
include("./connect_db.php");

$sql = "SELECT * FROM `login`";

$result = mysqli_query($conn, $sql);

$records = "";

$record = mysqli_fetch_assoc($result);
?>



<main class="container">
  <h1>Daily progress</h1>
  <h5>1 week workout</h5>

  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>1</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Day 1</th>
        <td>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <?php if(isset($_POST['day_1']) && $_POST['day_1'] == 'on ')  {
                   echo '<input type="checkbox"  aria-label="Checkbox for following text input" checked>'; 
                } else {
                   echo '<input type="checkbox"  aria-label="Checkbox for following text input">';
                }
                ?>
              </div>
            </div>
            <span class="input-group-text" id="basic-addon1"> 10 leg raises, 20 squats, 20 push ups, 2 pull ups
            </span>
            <div class="input-group-append">
              <span class="input-group-text">114 kcal</span>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Day 2</th>
        <td>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <?php if ($record["day_2"] == "off") {
                   echo '<input type="checkbox"  aria-label="Checkbox for following text input" >'; 
                } else {
                   echo '<input type="checkbox"  aria-label="Checkbox for following text input" checked>';
                }
                ?>
              </div>
            </div>
            <span class="input-group-text" id="basic-addon1"> 10 leg raises, 30 squats, 20 push ups, 3 pull ups
            </span>
            <div class="input-group-append">
              <span class="input-group-text">146 kcal</span>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Day 3</th>
        <td>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="checkbox" aria-label="Checkbox for following text input">
              </div>
            </div>
            <span class="input-group-text" id="basic-addon1">12 leg raises, 40 squats, 15 push ups, 4 pull ups
            </span>
            <div class="input-group-append">
              <span class="input-group-text">224 kcal</span>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Day 4</th>
        <td>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="checkbox" aria-label="Checkbox for following text input">
              </div>
            </div>
            <span class="input-group-text" id="basic-addon1">rest </span>
          </div>
        </td>
      </tr>
      <tr>
        <th>Day 5</th>
        <td>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="checkbox" aria-label="Checkbox for following text input">
              </div>
            </div>
            <span class="input-group-text" id="basic-addon1">15 leg raises, 45 squats, 20 push ups, 5 pull ups
            </span>
            <div class="input-group-append">
              <span class="input-group-text">245 kcal</span>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Day 6</th>
        <td>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="checkbox" aria-label="Checkbox for following text input">
              </div>
            </div>
            <span class="input-group-text" id="basic-addon1"> 20 leg raises, 50 squats, 20 push ups, 6 pull ups
            </span>
            <div class="input-group-append">
              <span class="input-group-text">267 kcal</span>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Day 7</th>
        <td>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="checkbox" aria-label="Checkbox for following text input">
              </div>
            </div>
            <span class="input-group-text" id="basic-addon1">30 leg raises, 60 squats, 25 push ups, 7 pull ups
            </span>
            <div class="input-group-append">
              <span class="input-group-text">301 kcal</span>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
    <button type="submit" class="btn btn-success btn-lg btn-block">Sla op</button>
  </table>
</main>