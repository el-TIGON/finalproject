<?php
session_start();
if( !isset( $_SESSION['username']) )
{
    header("Location: login.php");
    exit();
}else{
include('includes/config.php');
if (isset($_POST['__submit'])){
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contacts (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['status']="we recieived your message Succesfully";
        header("Location:contact.php");
    } else {
        $_SESSION['status']="Not we recieived your message Succesfully";
        header("Location:contact.php");
    }
}
}
?>