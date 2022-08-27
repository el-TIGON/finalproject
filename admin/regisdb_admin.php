<?php
session_start();
include('../includes/config.php');
if(isset($_POST['regbtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO  admin_acc (id,username, password ) VALUES (NULL,'$username','$password')";
            $query_run = mysqli_query($conn, $query);
            
            if($query_run)
            {
                $_SESSION['status'] = "admin was Added";
                $_SESSION['status_code'] = "success";
                header('Location: regs_admin.php');
            }
            else 
            {
                $_SESSION['status'] = "admin was Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: regs_admin.php');  
            }
}
?>