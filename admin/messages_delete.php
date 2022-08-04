<?php
include('../includes/config.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM contacts WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: messages.php');
    }
}
?>