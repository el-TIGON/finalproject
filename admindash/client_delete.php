<?php
include('../includes/config.php');
if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM book WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute(); 
    $stmt->close();
}
?>