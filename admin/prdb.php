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
    $query_check = "SELECT * FROM project WHERE prname='$prname' AND address='$address'";
    $query_run = mysqli_query($conn, $query_check);

    if(mysqli_num_rows($query_run) > 0) {
        $_SESSION['status'] = "project was added ";
        $_SESSION['status_code'] = "danger";
        header('Location: clients.php');
    } else {
        $sql = "INSERT INTO `project` (`id`, `prname`, `prdescription`, `payment`, `address`, `startday`, `finishday`) VALUES (NULL, '$prname', '', '', '$address', '', '')";
        $query_run = mysqli_query($conn, $sql);
        $_SESSION['status'] = "project Added";
        $_SESSION['status_code'] = "success";
        header('Location: projects_taken.php');  
    }
}
?>
