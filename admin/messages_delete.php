<?php
include('../includes/config.php');
if (isset($_GET['con_id'])) {
    $id = $_GET['con_id'];
    $sql = "DELETE FROM contacts WHERE con_id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: messages.php');
    }
}
?>