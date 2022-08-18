<?php
include('../includes/config.php');
if(isset($_GET['ser_id'])) {

    $id = $_GET['ser_id'];

    $sql = "DELETE FROM `service_providers` WHERE `ser_id` = $id";
    $result = mysqli_query($conn, $sql);
    if($result) {
      
        header('location: service_provider.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>