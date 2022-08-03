<?php
session_start();
include('../includes/config.php');

if (isset($_POST['_apply'])) 
 {
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $education = $_POST['education'];
        $field = $_POST['field'];
        $yourCV = $_FILES['yourCV']['name'];
        $tmp_name = $_FILES['yourCV']['tmp_name'];
        $path = "../uploads/";
        move_uploaded_file($tmp_name, $path.$yourCV);
        $sql = "INSERT INTO `employees`(`firstname`, `lastname`, `email`, `phone`, `address`, `education`, `service`, `CV`) VALUES ('$firstname','$lastname','$email','$phone','$address','$education','$field','$yourCV')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Application Submitted Successfully');</script>";
            echo "<script>window.location.href='provider.php';</script>";
        }
        else{
            echo "<script>alert('Application Not Submitted');</script>";
            echo "<script>window.location.href='provider.php';</script>";
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