<?php
include('../includes/config.php');
if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `registration` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    if($result) {
      
        header('location: registration.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>