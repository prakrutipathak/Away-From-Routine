<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    
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
            <p class="title">New Password</p>
            <div class="separator"></div>
                <form class="login-form" action="new-password.php" method="POST" autocomplete="off">
                   
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert" style="text-align:center;margin:20px;background-color:rgba(108, 99, 255,0.1);">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center"style="text-align:center;margin:20px;background-color:rgba(255, 99, 71, 0.1)>
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
                        <input type="password" name="password" placeholder="Create new password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-control">
                        <input  type="password" name="cpassword" placeholder="Confirm your password" required>
                        <i class="fas fa-lock"></i>
                    </div>
                    
                        <button class="submit" type="submit" name="change-password" value="Change">Change</button>
                    
                </form>
            </div>
       </section>
    
</body>
</html>