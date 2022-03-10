
<?php

// Source: https://stackoverflow.com/questions/56306747/change-navigation-bar-if-user-is-logged-in

session_start();

if(isset($_SESSION['firstName'])){ ?>
  <div class="dropdown">
    <a href="exp.php" class="dropbtn"><i class="fas fa-briefcase"></i></i>Experience <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content">
      <a href="exp.php#portfolio"><i class="fas fa-paint-brush"></i>Portfolio</a>
    </div>
  </div>
    <a href="edu.php"><i class="fas fa-university"></i>Education</a>
    <a href="homepage.php"><img src="logos/logo.png"></a>
    <a href="bloghomepage.php"><i class="fas fa-book"></i>Blog</a>
    <div class="dropdown">
      <a class="dropbtn">Hello, <?php echo $_SESSION['firstName']; ?> <i class="fas fa-caret-down"></i></a>
      <div class="dropdown-content">
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
      </div>
    </div>
<?php } else{ ?>
  <div class="dropdown">
    <a href="exp.php" class="dropbtn"><i class="fas fa-briefcase"></i></i>Experience <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content">
      <a href="exp.php#portfolio"><i class="fas fa-paint-brush"></i>Portfolio</a>
    </div>
  </div>
    <a href="edu.php"><i class="fas fa-university"></i>Education</a>
    <a href="homepage.php"><img src="logos/logo.png"></a>
    <!-- <h1 id="title">Nageeb Islam</h1> -->
    <a href="bloghomepage.php"><i class="fas fa-book"></i>Blog</a>
    <div class="dropdown">
      <a href="login.php" class="dropbtn"><i class="fas fa-sign-in-alt"></i></i>Log In <i class="fas fa-caret-down"></i></a>
      <div class="dropdown-content">
        <a href="register.php"><i class="fas fa-users"></i>Register</a>
      </div>
    </div>
<?php } ?>
