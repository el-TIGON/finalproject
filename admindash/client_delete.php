<?php
include('../includes/config.php');
if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `book` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    if($result) {
      
        header('location: clients.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>