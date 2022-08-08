<?php
include('../includes/config.php');
if (isset($_GET['em_id'])) {
    $id = $_GET['em_id'];
    $query = "DELETE FROM employees WHERE em_id = $id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('location: job.php');
    }
}
?>