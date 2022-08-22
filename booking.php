<?php
session_start();
if( !isset( $_SESSION['username']) )
{
    header("Location: login.php");
    exit();
}else{  
      
include ("includes/config.php");
if(isset($_POST['_submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $service = $_POST['service'];
    $date = date("Y-m-d");
    
    $sql = "INSERT INTO `book` (`id`, `name`, `email`, `mobile`, `address`, `service`, `date`) VALUES (NULL, '$name', '$email', '$mobile', '$address', '$service', '$date');";
    $query_run = mysqli_query($conn, $sql);
    if($query_run){
        $_SESSION['status'] = "we will contact you soon through call or email";
        $_SESSION['status_code'] = "success";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "Booking Failed";
        $_SESSION['status_code'] = "danger";
        header('Location: index.php');
    } 
}
    }
?>