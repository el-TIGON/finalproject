<?php
include('includes/config.php');
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    
    $sql="SELECT * FROM user_registration WHERE username= '$username';";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck>0)
    {
        echo "Username already exists please login";
        header("Location: login.php");
    }
    else
    {
        $sql="INSERT INTO user_registration (id, username, email,password) VALUES (NULL,'$username','$email','$password');";
        $result=mysqli_query($conn,$sql);
        header("Location: login.php?signup=success");
    }

}
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql="SELECT * FROM user_registration WHERE username= '$username' AND password='$password';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_fetch_array($result))
    {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
    else
    {
        echo "Username or password is incorrect";
        header('Location: login.php');
    }
}
?>