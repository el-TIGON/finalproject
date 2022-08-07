<?php
include('../includes/config.php');
if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `project` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    if($result) {
      
        header('location: project_taken.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>