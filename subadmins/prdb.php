<?php
session_start();
include('../includes/config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM book WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($query_run);
    $prname = $row['service'];
    $address = $row['address'];
    $sql = "INSERT INTO `project` (`id`, `prname`, `prdescription`, `payment`, `address`, `startday`, `finishday`) VALUES (NULL, '$prname', '', '', '$address', '', '')";
    $query_run = mysqli_query($conn, $sql);
    if($query_run) {
        $_SESSION['status'] = "project Added";
        $_SESSION['status_code'] = "success";
        header('Location: projects_taken.php');
    } else {
        $_SESSION['status'] = "project Not Added";
        $_SESSION['status_code'] = "error";
        header('Location: projects_taken.php');  
    }
}
?>
