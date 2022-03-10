<?php
  include('post.php');
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title id = "bloghome">Blog Home</title>
    <link rel="stylesheet" href="reset.css" type="text/css" />
    <link rel="stylesheet" href="portfolio.css" type="text/css" />
    <script src="https://kit.fontawesome.com/47b0cbcd47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bloghomepage.css" type="text/css" />
  </head>
  <body>

    <div>
      <header>
         <nav>
             <?php include("nav.php"); ?>
         </nav>
      </header>
    </div>

    <div>
      <article>
        <h2>Blog Entries</h2>
        <hr />


         <?php if(isset($_REQUEST['info'])){ ?>
           <?php if ($_REQUEST['info'] == 'notfound'){ ?>
             <h2 class="ERROR">No entries found for this month</h2>
          <?php }?>
         <?php }else{ ?>
           <?php foreach ($resultarray as $r) { ?>
           <a href="viewBlog.php?id=<?php echo $r['ID'];?>"><section>
             <div  class="date"> <p> <i class="fas fa-clock" aria-hidden="true"></i> <?php echo date('l, jS \of F Y, h:i:s A',strtotime($r['date']));?> GMT</p></div>
             <h3 class = "text"><?php echo $r['title']; ?></h3>
             <p class="text"><?php echo $r['content']; ?></p>
           </section></a>
           <hr />
          <?php } ?>
       <?php } ?>

        <!-- <a href="blogexamplepage.php"><section>
          <div  class="date"> <p> <i class="fas fa-clock" aria-hidden="true"></i> 19th of March: 5:40PM GMT</p></div>
          <h3 class = "text">Daily Update #35: Creating a blog with HTML and CSS!</h3>
          <p class="text">As part of my coursework in my second semester, I decided to create a portfolio website that details my achievements, progress and other items that increase chance of employability in this godforsaken economy, especially
             in an industry that loves to chew out young, passionate programmers and spit them out as nihilistic, sad "veterans".</p>
        </section></a>

        <hr />

        <a href="blogexamplepage.php"><section>
          <div  class="date"> <p> <i class="fas fa-clock" aria-hidden="true"></i> 17th of March: 3:00AM GMT</p></div>
          <h3 class = "text">The benefits and disadvantages of using C language in the 21st Century</h3>
          <p class="text">Hey guys! So I have been seeing many debates surrounding the use of C and it's programmer intuitiveness compared to C++ and other languages. Well, I'll tell you, if you use C, you are weird but don't worry, so are many others!</p>
        </section></a>

        <hr />

        <a href="blogexamplepage.php"><section>
          <div  class="date"> <p> <i class="fas fa-clock" aria-hidden="true"></i> 2nd of March: 2:28PM GMT</p></div>
          <h3 class = "text">I watched Shrek(2001) for the first time today!</h3>
          <p class="text">So I have been seeing a lot of talk surrounding this movie, so I decided it to give a watch. I have got to say, Shrek might be the best movie I have ever seen, better than Shawshank Redemption! A story about ...</p>
        </section></a>

        <hr />

        <a href="blogexamplepage.php"><section>
          <div  class="date"> <p> <i class="fas fa-clock" aria-hidden="true"></i> 3rd of February: 7:17AM GMT</p></div>
          <h3 class = "text">Example title</h3>
          <p class="text">I am become death, the destroyer of worlds. Access to the Vedas is the greatest privilege this century may claim over all previous centuries. Both the man of science and the man of action live always at the edge of mystery, surrounded by it.
                          Any man whose errors take ten years to correct is quite a man. The optimist thinks this is the best of all possible worlds. The pessimist fears it is true. There are children playing in the streets who could solve some of my top problems in physics, because they have modes of sensory perception that I lost long ago.
                          No man should escape our universities without knowing how little he knows. The atomic bomb made the prospect of future war unendurable. It has led us up those last few steps to the mountain pass; and beyond there is a different country.
          </p>
        </section></a>

        <hr /> -->
      </article>

      <div class="RHS">
        <aside class="add">
          <a href="addpostvalid.php"><button class="postbutton"><h1>Add Post</h1></button></a>
        </aside>

        <div class = "dropdownEX">
          <aside class="entries" class="dropbtnEX">
            <h2>List of Entries</h2>
            <div class="dropdown-contentEX">
              <!-- <ul>
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
              </ul> -->
              <ul class ="nestedlist">
                  <a href="bloghomepage.php?monthvalue=<?php echo 'January'?>"><li><i class="fas fa-chevron-right"></i>January</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'February'?>"><li><i class="fas fa-chevron-right"></i>February</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'March'?>"><li><i class="fas fa-chevron-right"></i>March</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'April'?>"><li><i class="fas fa-chevron-right"></i>April</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'May'?>"><li><i class="fas fa-chevron-right"></i>May</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'June'?>"><li><i class="fas fa-chevron-right"></i>June</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'July'?>"><li><i class="fas fa-chevron-right"></i>July</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'August'?>"><li><i class="fas fa-chevron-right"></i>Augustus</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'September'?>"><li><i class="fas fa-chevron-right"></i>September</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'October'?>"><li><i class="fas fa-chevron-right"></i>October</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'November'?>"><li><i class="fas fa-chevron-right"></i>November</li></a>
                  <a href="bloghomepage.php?monthvalue=<?php echo 'December'?>"><li><i class="fas fa-chevron-right"></i>December</li></a>
              </ul>
            </div>
          </aside>
        </div>

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
