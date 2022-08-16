<?php
include('security.php');
include('includes/header.php'); 
include('includes/nav.php'); 
?>


<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User's Profile </h6>
        </div> 

        <div class="card-body">
<!-- update php code         -->
<?php
include_once 'conn.php';
if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM `usertable` WHERE id= '$id' ";
    $run = mysqli_query($conn, $query);

    foreach($run as $row)
    {
        ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="eusername" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edemail" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
            </div>
            <!-- <div class="form-group">
                <label>Password</label>
                <input type="password" name="epassword" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
            </div> -->
            <a href="register.php" class="btn btn-danger"> CANCEL </a>
            <button type="submit" name="update" class="btn btn-primary" > Update </button>
        </form>

    <?php
    }
}
?>
<!-- update php code end -->

        </div> 
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>  