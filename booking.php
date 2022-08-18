<?php
session_start();
include('includes/config.php');

if (isset($_POST['_submit'])) 
 {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $services = $_POST['services'];
    $date = date('Y-m-d');
 
 $sql = "INSERT INTO book (`name`, `email`, `mobile`, `address`, `service`, 'date') VALUES ('$username', '$email', '$mobile', '$address', '$services', '')";
 $query = mysqli_query($conn, $sql);
    if ($query) {
        $_SESSION['status']="your request has been sent";   
        header("Location: index.php");
    } else {
        $_SESSION['status']="your request has not been sent";
        header("Location: index.php");
    }
 }
 
?>
