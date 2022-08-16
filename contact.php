<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div style="color:#fff;">
  <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo 'please fill in the blank'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo 'Your Message Has Been Sent'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>

  <!----------NAVBAR---------->
  <div class="navbar">
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">
            <img src="logo1.png"><strong> AWAY FROM ROUTINE</strong>
        
    </div>
        <ul class="links">
            <li><a href="main-page.html">HOME</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="Webteam.html">ABOUT</a></li>
            <li><a href="login-signup/login-user.php">LOGIN</a></li>
            <li><a href="ADMIN-PANEL/login-user.php">ADMIN</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    
</div>
<!----------NAVBAR COMPLETED---------->

    <h1 class="contact-header">CONTACT US</h1>
    <div class="container3">
      <!-- <span class="big-circle"></span> -->
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Get Touch with us!!</h3>
          <p class="text">
            While we are good with smoke signal,there are simpler ways for us to get touch and answer your question!! 
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>xyz</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              
              <p>abc@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>12345678</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <!-- <span class="circle one"></span>
          <span class="circle two"></span> -->
          <form action="process.php" method="post">
          <!-- <form action="index.html" autocomplete="off"> -->
            <h3 class="title">Contact us</h3>
            <div class="input-container">
           
              <input type="text" name="UName" name="name" placeholder="User Name" class="input" >
              <span>Username</span>
            </div>
            <div class="input-container">
            <input type="email" name="Email" name="email" placeholder="Email" class="input" >
              
             
              <span>Email</span>
            </div>
            <div class="input-container">
              
              <input type="text" name="Subject" name="phone" placeholder="Subject" class="input" >
              
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
            <textarea name="msg" class="input"  placeholder="Write The Message" class="input"></textarea>
              
              
              <span>Message</span>
            </div>
            <input type="submit" name="btn-send" value="Send" class="btn" >
          </form>
        </div>
      </div>
    </div>

    <script src=".js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <footer>
        <div class="footer-content">
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>  
        <div class="footer-bottom">
            <p>copyright &copy;2021 Away From Routine. designed by <span1>IT PEOPLE</span1></p>
        </div>
      </footer>
    </body>
  </body>
</html>












