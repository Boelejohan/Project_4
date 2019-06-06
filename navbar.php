<nav class="navbar navbar-expand-sm" id="nav">
  <a class="navbar-brand" href="index.php"><img src="./Images/zielig.png" alt="zielige guy" id="zieligeguy"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

      <?php
    if ( isset($_SESSION["id"])) {
          
          switch ($_SESSION["userrole"]) {
            case 'admin':
              echo '<li class="nav-item active">
                      <a class="nav-link" href="./index.php?content=home">Home<span class="sr-only">(current)</span></a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=change_userrole">Userrole</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=oefeningen">Exercises</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=contact">Contact</a>
                    </li> ';
            break;
            case 'root':
              echo '<li class="nav-item active">
                      <a class="nav-link" href="./index.php?content=home">Home<span class="sr-only">(current)</span></a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=change_userrole">Userrole</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=oefeningen">Exercises</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=contact">Contact</a>
                    </li> ';
            break;
            case 'moderator':
              echo '<li class="nav-item active">
                      <a class="nav-link" href="./index.php?content=home">Home<span class="sr-only">(current)</span></a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=oefeningen">Exercises</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=contact">Contact</a>
                    </li> ';
            break;
            case 'customer':
              echo '<li class="nav-item active">
                      <a class="nav-link" href="./index.php?content=home">Home<span class="sr-only">(current)</span></a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=oefeningen">Exercises</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="./index.php?content=contact">Contact</a>
                    </li> ';
          break;
            default:
              header("Location: ./index.php?content=logout");
            break;
          }
          echo '<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Account
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="./index.php?content=Daily_Progress">Daily Progress</a>
                    <a class="dropdown-item" href="./index.php?content=logout">Logout</a>
                  </div>
                </li>';
        } else {
          // Biedt de login en register links aan
          echo '<li class="nav-item active">
                  <a class="nav-link" href="./index.php?content=home">Home<span class="sr-only">(current)</span></a>
                </li>    
                <li class="nav-item">
                  <a class="nav-link" href="./index.php?content=oefeningen">Exercises</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="./index.php?content=contact">Contact</a>
                </li>      
                <li class="nav-item">
                  <a class="nav-link" href="./index.php?content=register">Register</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="./index.php?content=login">Login</a>
                </li>'
                ;
        }

      ?>
    </ul>
  </div>
</nav>