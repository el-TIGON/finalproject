<?php
include ("../includes/config.php");
if(isset($_GET['ser_id']));
{
    $id = $_GET['ser_id'];
    $sql = "DELETE FROM `service_providers` WHERE ser_id = '$id'; ";
    $result = mysqli_query($conn, $sql);
    $_SESSION['status'] = "service provider deleted";
    $_SESSION['status_code'] = "success";
    header('Location: service_provider.php');
}
?>