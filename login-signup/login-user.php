<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            <p class="title">LOGIN</p>
            <div class="separator"></div>
            

                <form class="login-form" action="login-user.php"  method="POST" autocomplete="">
                   

                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert text-center"style="text-align:center;margin:20px; background-color:rgba(255, 99, 71, 0.1);">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-control">
                    
                        <input  type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="form-control">
                   
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="signup">Not yet a member? <a  class="forget" href="signup-user.php">Signup Now</a></div>
                    <div class="signup"><a class="forget" href="forgot-password.php">Forgot Password?</a></div>
                    
                        <button class="submit" type="submit" name="login" value="Login">login</button>
                    
                    
                </form>
                
                
            </div>
            
            </section>
        
                </div>
    
</body>
</html>