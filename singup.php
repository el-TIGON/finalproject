<?php
include ("includes/config.php");
if(isset($_POST['_singup']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = " SELECT * FROM user_registration";
    $query_check = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query_check) > 0)
    {
        while($row = mysqli_fetch_assoc($query_check))
        {
            if($row['email'] == $email)
            {
                $_SESSION['status'] = "Email already exists";
                header('Location: singup.php');
            }
        }
    }
    else
    {
        $sql = "INSERT INTO user_registration (email, password) VALUES ('$email', '$password')";
        $query_run = mysqli_query($conn, $sql);
        if($query_run)
        {
            $_SESSION['status'] = "Registration Successful";
            header('Location: login.php');
        }
        else
        {
            $_SESSION['status'] = "Registration Failed";
            header('Location: login.php');
        }
    }
    
}
?>