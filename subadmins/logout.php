<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username_emp']);
    header('Location: login.php');
}

?>