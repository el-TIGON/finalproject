<?php
session_start();
include('includes/config.php');

if (isset($_POST['_submit'])) 
 {
     $username = $_POST['username'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $address = $_POST['address'];
     $service = $_POST['service'];
 
 $sql = "INSERT INTO book (`name`, `email`, `mobile`, `address`, `service`) VALUES ('$username', '$email', '$mobile', '$address', '$service')";
 
 if ($conn->query($sql) === TRUE) {
     $_SESSION['status']="Inserted Succesfully";
     header("Location:index.php");
 } else {
     $_SESSION['status']="Not Inserted Succesfully";
     header("Location:index.php");
 }
 }
?>
