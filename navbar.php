<!-- Navbar -->
<main class="container-expand-fg">
    <div class="navbar">
    <ul class="logo">
            <li><a href="./index.php?content=homepage"><img src="img/placeholder2.png" class="logo2" ></a></li>
</ul>
<ul class="nav">

   <?php 
      // Deze links worden aangeboden als we zijn ingelogd.
        if (isset($_SESSION["id"])) {
          switch($_SESSION["userrole"]) {
            case 'administrator':
              echo '<li> <a href="./index.php?content=homepage" class="navFont"> HOME </a></li>
              <div class="nav-item dropdown">
                    <a class="navFont" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        INFO<span class="altcolor">▼</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./index.php?content=exercise">Exercise</a>
                        <a class="dropdown-item" href="./index.php?content=nutrition">Nutrition</a>
                    </div>
                    </div>
              <li> <a href="./index.php?content=about" class="navFont"> ABOUT </a></li>
              <li> <a href="./index.php?content=contact" class="navFont"> CONTACT </a></li>
              <li> <a href="./index.php?content=faq" class="navFont"> FAQ </a></li>
              </ul>
  
              <ul class="logo2">
              <div class="nav-item dropdown">
                    <a class="right" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><img src="./img/placeholder-man.png" class="logo">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./index.php?content=profile">Profile</a>
                        <a class="dropdown-item" href="./index.php?content=progress">Progress</a>
                        <a class="dropdown-item" href="./index.php?content=bmicalc">Bmi Calculator</a>
                        <a class="dropdown-item" href="./index.php?content=logout">Logout</a>
                    </div>
                    </div>';
            break;
            case 'root':
              echo '  <li> <a href="./index.php?content=homepage" class="navFont"> HOME </a></li>
              <div class="nav-item dropdown">
                    <a class="navFont" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        INFO<span class="altcolor">▼</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./index.php?content=exercise">Exercise</a>
                        <a class="dropdown-item" href="./index.php?content=nutrition">Nutrition</a>
                    </div>
                    </div>
              <li> <a href="./index.php?content=about" class="navFont"> ABOUT </a></li>
              <li> <a href="./index.php?content=contact" class="navFont"> CONTACT </a></li>
              <li> <a href="./index.php?content=faq" class="navFont"> FAQ </a></li>
              </ul>
  
              <ul class="logo2">
              <div class="nav-item dropdown">
                    <a class="right" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><img src="./img/placeholder-man.png" class="logo">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./index.php?content=profile">Profile</a>
                    <a class="dropdown-item" href="./index.php?content=progress">Progress</a>
                    <a class="dropdown-item" href="./index.php?content=bmicalc">Bmi Calculator</a>
                    <a class="dropdown-item" href="./index.php?content=logout">Logout</a>
                    </div>
                    </div>';
            break;
            case 'customer':
              echo '  <li> <a href="./index.php?content=homepage" class="navFont"> HOME </a></li>
              <div class="nav-item dropdown">
                    <a class="navFont" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        INFO<span class="altcolor">▼</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./index.php?content=exercise">Exercise</a>
                        <a class="dropdown-item" href="./index.php?content=nutrition">Nutrition</a>
                    </div>
                    </div>
              <li> <a href="./index.php?content=about" class="navFont"> ABOUT </a></li>
              <li> <a href="./index.php?content=contact" class="navFont"> CONTACT </a></li>
              <li> <a href="./index.php?content=faq" class="navFont"> FAQ </a></li>
              </ul>
  
              <ul class="logo2">
              <div class="nav-item dropdown">
                    <a class="right" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><img src="./img/placeholder-man.png" class="logo">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./index.php?content=profile">Profile</a>
                    <a class="dropdown-item" href="./index.php?content=progress">Progress</a>
                    <a class="dropdown-item" href="./index.php?content=bmicalc">Bmi Calculator</a>
                    <a class="dropdown-item" href="./index.php?content=logout">Logout</a>
                    </div>
                    </div>';
            break;
            default:
              header("Location: ./index.php?content=logout");
            break;
          }
        } else { // Deze links worden aangeboden als we niet zijn ingelogd.
          echo '  <li> <a href="./index.php?content=homepage" class="navFont"> HOME </a></li>
          <div class="nav-item dropdown">
                <a class="navFont" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    INFO<span class="altcolor">▼</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./index.php?content=exercise">Exercise</a>
                    <a class="dropdown-item" href="./index.php?content=nutrition">Nutrition</a>
                </div>
                </div>
          <li> <a href="./index.php?content=about" class="navFont"> ABOUT </a></li>
          <li> <a href="./index.php?content=contact" class="navFont"> CONTACT </a></li>
          <li> <a href="./index.php?content=faq" class="navFont"> FAQ </a></li>
          </ul>

          <ul class="logo2">
          <div class="nav-item dropdown">
                <a class="right" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><img src="./img/placeholder-man.png" class="logo">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./index.php?content=signup">Signup / Login</a>
                    <a class="dropdown-item" href="./index.php?content=bmicalc">Bmi Calculator</a>
                </div>
                </div>';
        }

      ?>  





</ul>
        </div>
</main>