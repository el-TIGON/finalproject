<?php
include('../includes/config.php');

if(isset($_GET['service'])) {
    
    $service = $_GET['service'];
    $sql = "INSERT INTO `project` (`id`, `prname`, `services`, `prdescription`, `payment`, `address`, `startday`, `finishday`) VALUES (NULL, '', '$service', '', '', '', '', '')"; 
    $result = mysqli_query($conn, $sql);
    if($query_run)
            {
                $_SESSION['status'] = "project Added";
                $_SESSION['status_code'] = "success";
                header('Location: clients.php');
            }
            else 
            {
                $_SESSION['status'] = "project Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: clients.php');  
            }
}
?>
