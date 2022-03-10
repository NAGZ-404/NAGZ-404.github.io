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
        <div  class="date"> <p> <i class="fas fa-clock" aria-hidden="true"></i> 19th of March: 5:40PM GMT</p></div>
        <h2>Blog Example</h2>
        <hr />
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula nulla sed hendrerit mollis. Quisque pellentesque mi vel laoreet sollicitudin. Maecenas sodales ligula ac est finibus, ac lobortis mi condimentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque eu euismod odio. Nam lectus nisl, auctor quis dignissim sed, dictum et metus. Morbi sit amet gravida leo. Nunc ac nibh massa. Morbi consequat mauris vitae nisl pulvinar cursus quis vel elit. Vestibulum non rutrum ipsum, ut fermentum est. Phasellus feugiat orci et viverra ornare. Fusce tempus consectetur dui eu varius. Cras nulla nunc, iaculis a tincidunt mollis, consectetur porttitor ex. Aliquam vel ante tincidunt, cursus diam at, volutpat diam.
          <br />
          Ut quis scelerisque erat. <aside class="artimg"><figure><img src="https://static.scientificamerican.com/sciam/cache/file/4E0744CD-793A-4EF8-B550B54F7F2C4406_source.jpg" alt="placeholder" width="300" alt="300"/> <figcaption>"Nature"</figcaption></figure></aside>Fusce at risus eu mauris mattis euismod et pharetra orci. Aenean maximus nisl sit amet leo vulputate, ac accumsan ante efficitur. Sed commodo diam nec lectus accumsan, id commodo mauris dignissim. Vestibulum sagittis, augue id ornare varius, nunc nisl mollis elit, eget vestibulum sapien neque ut massa. Mauris in efficitur mauris, in commodo arcu. Nulla nulla ligula, vulputate fermentum aliquam nec, aliquam quis eros. Vestibulum et mollis purus. Mauris egestas efficitur feugiat. Praesent mollis, urna id mattis malesuada, odio dolor aliquet quam, et sollicitudin nisi dui non ex. Phasellus lacinia tincidunt magna, a convallis arcu tempor eu. Aenean ut massa ultrices, dignissim lectus id, sollicitudin enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus imperdiet est at feugiat lacinia. Nam convallis tincidunt sem, at rutrum sem feugiat nec. Suspendisse dignissim consectetur velit sed molestie.
          <br />
          Integer lobortis vehicula libero, pulvinar aliquet purus suscipit eu. Sed sed elit in odio convallis tempor. Integer malesuada laoreet sem, sed luctus nulla lobortis quis. Integer enim felis, feugiat sed molestie eu, lobortis eu justo. Phasellus quis erat id tortor accumsan fermentum. Vivamus consequat, elit eu scelerisque molestie, tortor quam venenatis tortor, eu ullamcorper elit magna id ipsum. Quisque sit amet dolor quam. Aliquam condimentum, neque nec mollis malesuada, elit velit faucibus nibh, eu sodales dolor elit sed ex. Aliquam sit amet cursus ipsum. Fusce vehicula lorem in justo semper sollicitudin. Nulla ut eros luctus, pretium tellus pharetra, elementum purus.
          <br />
          Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed commodo volutpat est. Praesent ac risus mauris. Mauris sagittis dolor velit, vel volutpat quam gravida ut. Maecenas sed tortor non felis sagittis tincidunt. Curabitur sodales metus felis, imperdiet scelerisque velit porta in. Phasellus ac lectus non orci maximus cursus dignissim ac neque. Nunc suscipit imperdiet risus non tempus. Etiam ultrices diam sem, non rutrum eros lacinia et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus tincidunt erat odio, et viverra turpis ornare a. Nam eu est sit amet justo finibus eleifend non non tellus. Fusce sodales sit amet enim interdum dictum.
          <br />
          Aenean tincidunt ex sit amet lacinia posuere. Vivamus tristique bibendum velit. Proin et mattis ipsum, sit amet fringilla sapien. Cras dictum viverra elit, a malesuada odio. Etiam nunc urna, interdum at augue nec, egestas maximus nisi. Nunc tortor nunc, dapibus eu posuere quis, auctor sit amet sem. Fusce non ipsum turpis. Integer volutpat ultrices sapien, in sodales turpis dictum ut. Curabitur aliquet quam quis ultrices dignissim.
          <br />
        </p>
      </article>

      <div class="RHS">
        <aside class="add">
          <a href="addpost.html"><button class="postbutton"><h1>Add Post</h1></button></a>
        </aside>

        <aside class="entries">
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
        </aside>


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
