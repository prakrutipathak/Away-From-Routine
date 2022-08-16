<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location:reset-code.php');
            }
        }else{
            header('Location:user-otp.php');
        }
    }
}else{
    header('Location:login-user.php');
}
?>
<?php
// include('security.php');
include('includes/header.php');
include('includes/nav.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

         

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered User's</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        require 'conn.php';

                        $que = "SELECT `id` FROM `usertable` ORDER BY id";
                        $que_run = mysqli_query($conn, $que);
                        $row = mysqli_num_rows($que_run);
                        echo $row;
                      ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    
<?php
include('includes/scripts.php');
// include('includes/footer.php');
?>



-




