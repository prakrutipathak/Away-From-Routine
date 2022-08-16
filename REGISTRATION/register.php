<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style type="text/css"></style>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/png" href="logo1.png"> 
        <div class="navbar">
            <nav class="color-change">
                <input id="nav-toggle" type="checkbox">
                <div class="logo">
                    <img src="white.png"><strong> AWAY FROM ROUTINE</strong>
                
            </div>
                <ul class="links">
                    <li><a href="../main-page.html">HOME</a></li>
                    <li><a href="../contact.php">CONTACT</a></li>
                    <li><a href= "../Webteam.html">ABOUT</a></li>
                    <li><a href="../login-signup/login-user.php">LOGIN</a></li>
                    <li><a href="../ADMIN-PANEL/login-user.php">ADMIN</a></li>
                </ul>
                <label for="nav-toggle" class="icon-burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </label>
            </nav>
            
        </div>
            
       
    </head>
    <body>
        <div class="regform"><h1>REGISTRATION FORM</h1></div>
        <div class="main">
            <form action="regi-info.php" method="POST">
                <div id="NAME">
                    <h2 class="name">NAME</h2>
                    <input class="FirstName" placeholder="FIRSTNAME" type="text" name="first_name"><br>
                    <label class="Firstlabel">FIRST NAME</label>
                    <input class="Lastname" placeholder="LASTNAME" type="text" name="last_name">
                    <label class="Lastlabel">Last name</label> 
                </div>
                <h2 class="name">E-MAIL</h2>
                <input class="E-MAIL" placeholder="E-MAIL" type="text" name="email">

                <h2 class="name">PHONE</h2>
                <input class="code" placeholder="+91" type="text" name="area_code">
                <label class="area-code">Area Code</label>
                <input class="Number" placeholder="NUMBER" type="text" name="phone">
                <label class="Phone-number">Phone Number</label>

                <h2 class="name">CITY</h2>
                <select class="option"  name="city">
                    <option disabled="disabled" selected="selected"> Choose option</option>
                    <option> JAIPUR</option>
                    <option> DARJEELING</option>
                    <option> PONDICHERRY</option>
                    <option> SHIMLA</option>
                    <option> MUNNAR</option>
                    <option> BOMBAY</option>
                </select>

                <h2 class="name">PEOPLES</h2>
                <input class="E-MAIL" placeholder="ENTER NUMBERS OF PEOPLE" type="text" name="people">

                <!-- <a href="#" class="btn cta-btn"*>PAYMENT</a> -->
                <input type="submit"  class="btn cta-btn" value="PAYMENT" name="submit">
                
                
                <a href="../login-signup/logout-user.php" class="btn cta-btn">LOGOUT</a>
            

               

            </form>
           
        </div>
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
</html>