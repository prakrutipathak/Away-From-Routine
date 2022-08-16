<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
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
            <p class="title">FORGET PASSWORD</p>
            <div class="separator"></div>
                <form class="login-form" action="forgot-password.php" method="POST" autocomplete="">
                   
                    
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center"style= "text-align:center;margin:20px;background-color:rgba(255, 99, 71, 0.1);">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-control">
                        
                        <input type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                        <i class="fas fa-envelope"></i>
                    </div>
                    
                        <button class="submit" type="submit" name="check-email" value="Continue">Continue</button>
                    
                </form>
            </div>
        </section>
    
</body>
</html>