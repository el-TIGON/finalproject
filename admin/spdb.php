<?php
session_start();
include("../includes/config.php");
if(isset($_GET['em_id']))
{
    $id = $_GET['em_id'];
    $sql = "SELECT * FROM `employees` WHERE em_id = '$id';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $ser_name = $row['firstname'];
    $ser_service = $row['services'];
    $ser_address = $row['address'];
    $ser_email = $row['email'];
    $ser_phone = $row['phone'];
    $date= date("Y-m-d");

    $query_check ="SELECT * FROM `service_providers` WHERE ser_name = '$ser_name' AND ser_service = '$ser_service' AND ser_address = '$ser_address' AND ser_email = '$ser_email' AND ser_phone = '$ser_phone';";
    $result_check = mysqli_query($conn, $query_check);
    if(mysqli_num_rows($result_check)){
        $_SESSION['status'] = "service provider already exists";
        $_SESSION['status_code'] = "danger";
        header('Location: job.php');
    }
    else{
        $sql = "INSERT INTO `service_providers` (`ser_id`, `ser_name`, `ser_service`, `ser_address`, `ser_email`, `ser_phone`, `date`) VALUES (NULL, '$ser_name', '$ser_service', '$ser_address', '$ser_email', '$ser_phone', '$date');";
        $result = mysqli_query($conn, $sql);
        $_SESSION['status'] = "service provider added";
        $_SESSION['status_code'] = "success";
        header('Location: service_provider.php');
    }
 }
 ?>