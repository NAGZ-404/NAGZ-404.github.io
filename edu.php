<html>
  <head>
    <meta charset="utf-8" />
    <title id = "edu">Education</title>
    <link rel="stylesheet" href="reset.css" type="text/css" />
    <link rel="stylesheet" href="portfolio.css" type="text/css" />
    <script src="https://kit.fontawesome.com/47b0cbcd47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="edu.css" type="text/css" />
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
      <h2>Education</h2>
      <hr />
      <table class="educationtable">

        <tr>
          <thead>
            <th>Years</th>
            <th>Place of Institution</th>
            <th id="thirdcolumn">Grades</th>
          </thead>
        </tr>

        <tr>
          <td>Currently Studying (2020-2023)</td>
          <td><figure>
              <img src="https://study-eu.s3.amazonaws.com/uploads/university/queen-mary-university-of-london-logo.png" alt="qm_uni_logo" width="400" height="100" />
              <figcaption>Queen Mary, University of London</figcaption>
              </figure>
          </td>
          <td id="thirdcolumn">Computer Science: <br /> Pending</td>
        </tr>

        <tr>
          <td>2018-2020 for A-Levels
              <br />
              2016-2018 for GCSEs
          </td>
          <td><figure>
              <img src="https://www.mayfieldschool.net/images/logo.png" alt="mayfield_school_logo" width="300" height="100" />
              <figcaption>Mayfield School</figcaption>
              </figure>
          </td>
            <td>
              <div class="gradestable">
                <table>
                  <tr>
                    <thead>
                      <th>A - Levels</th>
                    </thead>
                  </tr>

                  <tr>
                    <td>Mathematics</td>
                    <td>A*</td>
                  </tr>

                  <tr>
                    <td>Computer Science</td>
                    <td>A</td>
                  </tr>

                  <tr>
                    <td>Economics</td>
                    <td>B</td>
                  </tr>
                </table>

                <table>
                  <tr>
                    <thead>
                      <th>GCSEs</th>
                    </thead>
                  </tr>

                  <tr>
                    <td>Mathematics</td>
                    <td>8</td>
                  </tr>

                  <tr>
                    <td>Science (Combined)</td>
                    <td>8, 7</td>
                  </tr>

                  <tr>
                    <td>English Literature</td>
                    <td>6</td>
                  </tr>

                  <tr>
                    <td>English Language</td>
                    <td>6</td>
                  </tr>

                  <tr>
                    <td>Geography</td>
                    <td>7</td>
                  </tr>

                  <tr>
                    <td>Computer Science</td>
                    <td>7</td>
                  </tr>

                  <tr>
                    <td>French</td>
                    <td>7</td>
                  </tr>

                  <tr>
                    <td>Business Studies</td>
                    <td>A*</td>
                  </tr>
                </table>
              </div>
            </td>


        </tr>
      </table>

    </article>

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
