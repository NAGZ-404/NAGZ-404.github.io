<?php
  include('post.php');
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title id = "blogexample">Blog Page</title>
    <link rel="stylesheet" href="reset.css" type="text/css" />
    <link rel="stylesheet" href="portfolio.css" type="text/css" />
    <script src="https://kit.fontawesome.com/47b0cbcd47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="blogexamplepage.css" type="text/css" />
  </head>
  <body>

    <div>
      <header>
         <nav>
           <!-- <div class="dropdown">
             <a href="exp.html" class="dropbtn"><i class="fas fa-briefcase"></i></i>Experience <i class="fas fa-caret-down"></i></a>
             <div class="dropdown-content">
               <a href="exp.html#portfolio"><i class="fas fa-paint-brush"></i>Portfolio</a>
             </div>
           </div>
             <a href="edu.html"><i class="fas fa-university"></i>Education</a>
             <a href="homepage.php"><img src="logos/logo.png"></a>
             <a href="bloghomepage.html"><i class="fas fa-book"></i>Blog</a>
             <div class="dropdown">
               <a href="login.html" class="dropbtn"><i class="fas fa-sign-in-alt"></i></i>Log In <i class="fas fa-caret-down"></i></a>
               <div class="dropdown-content">
                 <a href="register.html"><i class="fas fa-users"></i>Register</a>
               </div>
             </div> -->
             <?php include("nav.php"); ?>
         </nav>
      </header>
    </div>

    <div>
      <article>
        <?php foreach($result as $r){ ?>
          <div  class="date"> <p> <i class="fas fa-clock" aria-hidden="true"></i> <?php echo date('l, jS \of F Y, h:i:s A',strtotime($r['date']));?></p></div>
          <h2><?php echo $r['title']?></h2>
          <hr />
          <p>
            <?php echo $r['content']?>
          </p>
        <?php } ?>
      </article>

      <div class="RHS">
        <aside class="add">
          <a href="addpostvalid.php"><button class="postbutton"><h1>Add Post</h1></button></a>
        </aside>

        <!-- <aside class="entries">
          <h2>List of Entries</h2>
          <ul>
            <li class ="month">March</li>
            <hr />
            <ul class="nestedlist">
              <a href="blogexamplepage.php"><li><i class="fas fa-chevron-right"></i>Blog entry</li></a>
              <a href="blogexamplepage.php"><li><i class="fas fa-chevron-right"></i>Blog entry</li></a>
              <a href="blogexamplepage.php"><li><i class="fas fa-chevron-right"></i>Blog entry</li></a>
            </ul>
            <li class ="month">February</li>
            <hr />
            <ul class="nestedlist">
              <a href="blogexamplepage.html"><li><i class="fas fa-chevron-right"></i>Blog entry</li></a>
            </ul>
          </ul>
        </aside> -->


      </div>

    </div>

      <footer>
        <div id="footerlist">
          <ul>
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="exp.php">Experience and Portfolio</a></li>
            <li><a href="edu.php">Education</a></li>
            <li><a href="bloghomepage.php">Blog</a></li>
          </ul>
        </div>

        <div id="contact">
          <h2>Contact</h2>
          <p><strong>Email:</strong> nageeb752@gmail.com</p>
          <p><strong>Phone Number:</strong> 07404957078</p>
        </div>

        <div class="social">
          <a href="https://www.linkedin.com/in/nageebislam/"><img src="logos/linkedin-logo.png" alt="Linkedin" /></a>
          <a href="https://github.com/NAGZ-404"><img src="https://image.flaticon.com/icons/png/512/25/25231.png" alt="Github"></a>
        </div>

        <div class = "copyright">
          <p>
            Copyright© 2021 Nageeb Islam
          </p>
        </div>
      </footer>

  </body>
</html>
