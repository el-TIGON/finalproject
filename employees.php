<?php
session_start();
include('config.php');

if (isset($_POST['_apply'])) 
 {
     $username = $_POST['firstname'];
     $email = $_POST['email'];
     $CV = $_POST['yourCV'];
     
 $sql = "INSERT INTO jobs (`name`, `email`, `CV`) VALUES ('$firstname', '$email', '$CV')";
 
 if ($conn->query($sql) === TRUE) {
     $_SESSION['status']="applied Succesfully";
     header("Location:provider.php");
 } else {
     $_SESSION['status']="Not applied Succesfully";
     header("Location:provider.php");
 }
 }
?>
