<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color nav1">
  <p style="font-size:35px;font-weight: bold"class="navbar-brand navlogo "  ><a href="/elaundry1/display.php" style="color:white">eLaundry</a></p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto navside">
      <form  action="" method="post">


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user "></i> Profile </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <button class="dropdown-item" name="myaccount" >My account</button>
          <button class="dropdown-item" name="logout" >Log out</button>

          <?php

            if(isset($_POST['logout']))
            {
              session_destroy(); //destroy the session
              header("location: index.php"); //to redirect back to "index.php" after logging out
              exit();
            }
            if(isset($_POST['myaccount']))
            {
               //destroy the session
              header("location: myaccount.php"); //to redirect back to "index.php" after logging out

            }
           ?>
  </form>
        </div>
      </li>
    </ul>
  </div>
  </nav>