<?php
include('../includes/config.php');

$id = $_GET['id'];
$query = "DELETE FROM `registration` WHERE `id` = '$id'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
if($result){
    header('location: registration.php');
}
?>