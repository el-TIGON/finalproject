<?php
include('../includes/config.php');
if(isset($_POST['regbtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO  registration (username, password ) VALUES ('$username','$password')";
            $query_run = mysqli_query($conn, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "admin was Added";
                $_SESSION['status_code'] = "success";
                header('Location: registration.php');
            }
            else 
            {
                $_SESSION['status'] = "admin was Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: registration.php');  
            }
}
?>