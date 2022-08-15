<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "selet * FROM book WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        
        $subject = "dear $name";
        $message = "your order is confirmed";
        $headers = "From: $email";
        mail($email, $subject, $message, $headers);
        
        
    }
    else{
        echo "error";
    }
}
?>