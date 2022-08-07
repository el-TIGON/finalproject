<?php
include('../includes/config.php');

if(isset($_POST['login_btn']))
{
    $username_login = $_POST['username']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM registration WHERE username='$username_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($conn, $query);
    
   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $username_login;
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "username / Password is Invalid";
        header('Location: index.php');
   }
}
?>
    
