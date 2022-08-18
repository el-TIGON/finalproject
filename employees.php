<?php
session_start();
if(!isset($_SESSION['auth']))
{
header("Location: login.php");
}
include('includes/config.php');
if ($_POST['_apply']){
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $field = $_POST['services'];
    $sql = "INSERT INTO employees (`firstname`, `lastname`, `email`, `phone`, `address`, `education`, `services`, `exprience`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$address', '$education', '$field', '$experience')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        $_SESSION['status']="your request has been sent";
        header("Location: provider.php");
    } else {
        $_SESSION['status']="your request has not been sent";
        header("Location: provider.php");
    }
}
?>