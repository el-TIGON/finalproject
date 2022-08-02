<?php
session_start();
include('../includes/config.php');

if (isset($_POST['_apply'])) 
 {
     $username = $_POST['firstname'];
     $email = $_POST['email'];
     $cv = $_FILES['yourcv']['name'];
     $cv_tmp = $_FILES['yourcv']['tmp_name'];
     $target_dir = "uploads/";
     if(move_uploaded_file($cv_tmp, $target_dir.$cv))
     {
         $sql = "INSERT INTO `employees` (`name`, `email`, `cv`) VALUES ('$username', '$email', '$cv')";
         $result = mysqli_query($conn, $sql);
         if($result)
         {
             echo "Successfully uploaded";
         }
         else
         {
             echo "Error";
         }
     }
     else
     {
         echo "Error";
     }

        
 if ($conn->query($sql) === TRUE) {
     $_SESSION['status']="applied Succesfully";
     header("Location:provider.php");
 } else {
     $_SESSION['status']="Not applied Succesfully";
     header("Location:provider.php");
 }
 }
?>