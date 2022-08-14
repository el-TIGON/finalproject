<?php
session_start();
if(!isset($_SESSION['auth']))
{
header("Location: login.php");
}
include('includes/config.php');
if ($_POST['_apply']){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $education = $_POST['education'];
    $field = $_POST['services'];
    $yourCV = $_FILES['yourCV']['name'];
    $tmp_name = $_FILES['yourCV']['tmp_name'];
    $path = "uploads/";
    move_uploaded_file($tmp_name, $path.$yourCV);
    $sql = "INSERT INTO employees (`firstname`, `lastname`, `email`, `phone`, `address`, `education`, `services`, `cv`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$address', '$education', '$field', '$yourCV')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['status']="Inserted Succesfully";
        header("Location:provider.php");
    } else {
        $_SESSION['status']="Not Inserted Succesfully";
        header("Location:provider.php");
    }
}
?>