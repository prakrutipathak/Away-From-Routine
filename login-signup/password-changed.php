<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login-user.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="logo1.png"> 
</head>
<body>
<div class="sign">
<section class="side">
        <img src="./images/img.svg" alt="">
    </section>

    <section class="main">
        <div class="login-container">
        <p class="title">Welcome back</p>
            <div class="separator"></div>
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert"style= "text-align:center;margin:20px;border-left: 6px solid #6C63FF;padding:10px; background-color:rgba(108, 99, 255,0.3);">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form  class="login-form"action="login-user.php" method="POST">
                    
                        <button class="submit" type="submit" name="login-now" value="Login Now">Login Now</button>
                    
                </form>
            </div>
       </section>
    
</body>
</html>