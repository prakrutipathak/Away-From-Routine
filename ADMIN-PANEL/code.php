<?php
session_start();
include_once 'connection.php';

if(isset($_POST['registerbtn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    if($password === $cpassword){
        $query = "INSERT INTO `usertable`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        $run = mysqli_query($con,$query);

        if($run){
            $_SESSION['success'] = "User's profile Added!";
            header('location:register.php');
        }
        else{
            $_SESSION['status'] = "User's profile not added!";
            header('location:register.php');
        }

    }
    else
    {
        $_SESSION['status'] = "Password does not match";
        header('location: register.php');
    }
}

if(isset($_POST['update']))
{   
    $id = $_POST['edit_id'];
    $name = $_POST['eusername'];
    $email = $_POST['edemail'];
    // $password = $_POST['epassword'];

    $query = "UPDATE `usertable` SET `name`='$name',`email`='$email' WHERE id='$id' ";
    $sql = mysqli_query($con, $query);

    if($sql)
    {
        $_SESSION['success'] = "Your admin data is updated!";
        header('location:register.php');
    }
    else
    {
        $_SESSION['status'] = "You admin data is not updated.";
        header('location:register.php');
    }
}


//Delete php code starts here

if(isset($_POST['delete_btn']))
{
    $d_id = $_POST['delete_id'];
    
    $slq_que = "DELETE FROM `usertable` WHERE id='$d_id' ";
    $slq_run = mysqli_query($con, $slq_que);

    if($slq_run)
    {
        $_SESSION['success'] = "Your Data is deleted!";
        header('location: register.php');
    }
    else
    {
        $_SESSION['status'] = "It is not deleted!";
        header('location: register.php');
    }
}

//Delete php code ends here



//login coding start..
// if(isset($_POST['login_btn']))
// {
//     $email_login = $_POST['emaill'];
//     $pass_login = $_POST['passwordd'];

//     $login_sql = "SELECT * FROM `` WHERE email='$email' AND password='$password' ";
//     $login_run = mysqli_query($conn, $login_sql);

//     if(mysqli_fetch_array($login_run))
//     {
//         $_SESSION['name'] = $email;
//         header('location: index.php');
//     }
//     else
//     {
//         $_SESSION['failed'] = 'Eamil ID and Password is incorrect.';
//         header('location: login.php');
//     }
// }



?>