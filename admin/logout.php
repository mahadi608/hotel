<?php 
session_start();
unset($_SESSION['email_logged_in']); 
unset($_SESSION['pass_logged_in']);
header('location:login.php'); 
?>