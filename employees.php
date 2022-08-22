<?php
session_start();
if( !isset( $_SESSION['username']) )
{
    header("Location: login.php");
    exit();
}else{
include ("includes/config.php");
if(isset($_POST['_apply'])){
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $address = $_POST['address'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $services = $_POST['services'];
    $date = date("Y-m-d");
    
   $sql="INSERT INTO `employees` (`em_id`, `firstname`, `email`, `phone`, `address`, `education`, `services`, `experience`, `date`) VALUES (NULL, '$name', '$email', '$mobile', '$address', '$education', '$services', '$experience', '$date');";
    $query_run = mysqli_query($conn, $sql);
    if($query_run){
        $_SESSION['status'] = "we will contact you soon through call or email";
        $_SESSION['status_code'] = "success";
        header('Location: provider.php');
    } else {
        $_SESSION['status'] = "application Failed";
        $_SESSION['status_code'] = "danger";
        header('Location: provider.php');
    }

}
}
?>