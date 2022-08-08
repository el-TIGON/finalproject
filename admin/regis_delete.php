<?php
include('../includes/config.php');

$id = $_GET['reg_id'];
$query = "DELETE FROM `registration` WHERE `reg_id` = '$id'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if($result){
    header('location: registration.php');
}
?>