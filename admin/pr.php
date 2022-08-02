<?php
include('../config.php');
if(isset($_POST['registerbtn'])) {
    $prname = $_POST['prname'];
    $service = $_POST['service'];
    $prdescription = $_POST['prdescription'];
    $payment = $_POST['payment'];
    
    $query = "INSERT INTO project (prname,service , prdescription, payment) VALUES ('$prname','$service','$prdescription','$payment')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "project Added";
                $_SESSION['status_code'] = "success";
                header('Location: projects_taken.php');
            }
            else 
            {
                $_SESSION['status'] = "project Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: projects_taken.php');  
            }
}
?>