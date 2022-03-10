<?php
  include('post.php');
?>


<html>
  <head>
    <meta charset="utf-8" />
    <title id = "addpost">Add a Post</title>
    <link rel="stylesheet" href="reset.css" type="text/css" />
    <link rel="stylesheet" href="portfolio.css" type="text/css" />
    <script src="https://kit.fontawesome.com/47b0cbcd47.js" crossorigin="anonymous"></script>
    <script src="formcheck.js" defer></script>
    <link rel="stylesheet" href="addpost.css" type="text/css" />
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

    <article>
      <form id="form" method="POST" action="">
        <h1>Add a post</h1>
        <fieldset>
          <h2>Title: </h2>
          <input type="text" id="title" name="title" placeholder="Required">
          <h2>Content: </h2>
          <textarea id="content" name="content" rows="10" cols="90" placeholder="Text here"></textarea>
          <div class="button">
            <button  id="submit" name="submit" onclick="AddPostFormEmpty(event)">Submit</button>
            <button  id="previewButton" name="previewButton" onclick="previewEntry(); return false">Preview</button>
            <button  id="clear" name="clear" onclick="return ClearForm()">Clear</button> <!-- To prevent page from refereshing when clicking cancel, I return the boolean value for ClearForm(), so if it's false, it does not refresh. Source: https://stackoverflow.com/questions/7803814/prevent-refresh-of-page-when-button-inside-form-clicked -->
          </div>
        </fieldset>
      </form>
    </article>

    <article id="previewFormTitle">
        <h1>PREVIEW</h1>
    </article>

    <article id="previewForm">
        <div  class="date"> <p><div id="previewDate"></div></p></div>
        <h2 id="previewTitle"></h2>
        <hr />
        <p id="previewContent"></p>
    </article>
      <footer>
        <div id="footerlist">
          <ul>
            <li><a href="homepage.html">Homepage</a></li>
            <li><a href="exp.html">Experience and Portfolio</a></li>
            <li><a href="edu.html">Education</a></li>
            <li><a href="bloghomepage.html">Blog</a></li>
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
