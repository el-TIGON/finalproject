<?php
session_start();
include('../includes/config.php');

if(isset($_POST['login_btn']))
{
    $username_login = $_POST['username']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM registration WHERE username='$username_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($conn, $query);
    
   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username_login'] = $username_login;
        header('Location: index.php');
   } 
   else
   {
        echo "Username or password is incorrect";
        header('Location: login.php');
   }
}
?>
    
