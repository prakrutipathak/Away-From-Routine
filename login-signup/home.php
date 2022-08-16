<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="../style.css">
	
	<link rel="shortcut icon" type="image/png" href="logo1.png"> 
    <script src="https://kit.fontawesome.com/2550a92b94.js" crossorigin="anonymous"></script>
</head>
    <div class="navbar">
	<nav>
		<input id="nav-toggle" type="checkbox">
		<div class="logo">
			<img src="logo1.png"><strong> AWAY FROM ROUTINE</strong>
		
	</div>
		<ul class="links">
			<li><a href="../main-page.html">HOME</a></li>
			<li><a href="../Contact.php">CONTACT</a></li>
			<li><a href="../Webteam.html">ABOUT</a></li>
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
<!----------NAVBAR COMPLETED---------->
</br>
</br>
	<h1 class="cities-header">CITIES</h1>
	<div style="background-color:#000;color:#fff;text-align:center">
    <h1>Welcome <?php echo $fetch_info['name'] ?></h1>
</div>
	<div class="card-cities">

		<div class="container2">
			<div class="card">
				<div class="image">
					<img src="../jaipur.jpg" alt="JAIPUR">
				</div>
				<div class="content">
					<h5 class="title">
						JAIPUR
					</h5>
					<p class="paragraph">
						Jaipur, city, capital of Rajasthan state, northwestern India. It is situated in the east-central part of the state, roughly equidistant from Alwar (northeast) and Ajmer (southwest).
					</p>
					<a href="../jaipur/jaipur.html" class="btn">Read More</a>
				</div>	
			</div>
		</div>


    <div class="container2">
	<div class="card">
		<div class="image">
			<img src="../darjeeling.jpg" alt="DARJEELING">
		</div>
		<div class="content">
			<h5 class="title">
				DARJEELING
			</h5>
			<p class="paragraph">
				Darjeeling is the headquarters of the Darjeeling district which has a partially autonomous status called Gorkhaland
           Territorial Administration within the state of West Bengal.
			</p>
			<a href="../darjeeling/darjeeling.html" class="btn">Read More</a>
        </div>
        
        
    </div>
</div>

<div class="container2">
	<div class="card">
		<div class="image">
			<img src="../pondicherry-cities.jpg" alt="PONDICHERRY">
		</div>
		<div class="content">
			<h5 class="title">
				PONDICHERRY
			</h5>
			<p class="paragraph">
				Situated on the south-east coast of India, Puducherry aka Pondicherry offers glimpse of France in India.
        Close to Promenade Beach is a White Town area, 
			</p>
			<a href="../pondicherry/pondicherry.html" class="btn">Read More</a>
        </div>
        
        
    </div>
</div>
</div>


<div class="card-cities">

    <div class="container2">
		<div class="card">
			<div class="image">
				<img src="../shimla-cities1.jpg" alt="SHIMLA">
			</div>
			<div class="content">
				<h5 class="title">
					SHIMLA
				</h5>
				<p class="paragraph">
					Shimla Hill Station is one of the most popular tourist destinations in the north Indian State of Himachal Pradesh.
          Shimla was built on top of seven hills: 
				</p>
				<a href="../shimla/shimla.html" class="btn">Read More</a>
			</div>
			
			
		</div>
	</div>


<div class="container2">
	<div class="card">
		<div class="image">
			<img src="../munnar.jpg" alt="MUNNAR">
		</div>
		<div class="content">
			<h5 class="title">
				MUNNAR
			</h5>
			<p class="paragraph">
				Munnar is a town and hill station located in the Idukki district of the southwestern Indian state of Kerala.
        Munnar is situated at around 1,600 metres (5,200 ft)
			</p>
			<a href="../munnar/munnar.html" class="btn">Read More</a>
        </div>
        
        
    </div>
</div>

<div class="container2">
	<div class="card">
		<div class="image">
			<img src="../bombay-cities1.jpg" alt="BOMBAY">
		</div>
		<div class="content">
			<h5 class="title">
				BOMBAY
			</h5>
			<p class="paragraph">
				Bombay also known as mumbai. Bombay is the capital city of the Indian state of Maharashtra. 
          According to the United Nations, as of 2018,
			</p>
			<a href="../bombay/bombay.html" class="btn">Read More</a>
        </div>
        
        
    </div>
</div>
</div>

<div style="background-color:#000">
    <a href="logout-user.php" class="btn1">LOGOUT</a>
    <div>
		
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
</html>