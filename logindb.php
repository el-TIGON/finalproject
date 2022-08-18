<?php
session_start();
include('includes/config.php');
$_SESSION['auth'] = "OKAY";

if(isset($_POST['login_btn']))
{
    $email = $_POST['email']; 
    $password = $_POST['password']; 

    $query = "SELECT * FROM user_registration WHERE email and password = '$email' and password = '$password'";
    $query_run = mysqli_query($conn, $query);
    
   if(mysqli_fetch_array($query_run))
   {
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "username / Password is Invalid";
        header('Location: login.php');
   }
}
?>
    
