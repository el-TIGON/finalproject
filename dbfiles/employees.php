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
        $field = $_POST['service'];
        $yourcv = $_FILES['yourCV']['name'];
        $tmp_name = $_FILES['yourCV']['tmp_name'];
        $path = "../uploads/";

 $targetfolder = $path . basename( $_FILES['yourcv']['name']) ;
 $ok=1;
 $file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf" || $file_type=="application/docx" || $file_type=="application/doc") {

 if(move_uploaded_file($tmp_name, $path.$targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
 $sql = "INSERT INTO `employees`(`firstname`, `lastname`, `email`, `phone`, `address`, `education`, `service`, `CV`) VALUES ('$firstname','$lastname','$email','$phone','$address','$education','$field','$yourcv')";
 $result = mysqli_query($conn, $sql);
 if ($result) {
     echo "<script>alert('Application Submitted Successfully');</script>";
     echo "<script>window.location.href='provider.php';</script>";
 }
 else{
     echo "<script>alert('Application Not Submitted');</script>";
     echo "<script>window.location.href='provider.php';</script>";
 }
 
 }
}
 }
?> 
