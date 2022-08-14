<?php
include("includes/config.php");

if(isset($_GET['em_id'])){

    $id = $_GET['em_id'];
    
    $query = "SELECT * FROM employees WHERE em_id='$id'";
    
    $query_run = mysqli_query($conn, $query);
    
    $row = mysqli_fetch_array($query_run);
    $name = $row['firstname'];
    $email = $row['email'];
    $address = $row['address'];
    $service = $row['service'];
    $phone = $row['phone'];
    
    $sql = "INSERT INTO `service_providers` (`ser_id`, `ser_name`, `ser_service`, `ser_address`, `ser_email`, `ser_phone`) values ('', '$name', '$service', '$address', '$email', '$phone')";
    
    $query_run = mysqli_query($conn, $sql);
    
    if($query_run) {
        $_SESSION['status'] = "service provider Added";
        $_SESSION['status_code'] = "success";
        header('Location: service_provider.php');
    } 
    else {
        $_SESSION['status'] = "service provider not Added";
        $_SESSION['status_code'] = "danger";
        header('Location: service_provider.php');
    }
}
?>