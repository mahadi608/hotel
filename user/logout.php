<?php 
session_start();
unset($_SESSION['create_account_logged_in']); 
unset($_SESSION['logged']);
header('location:../index.php'); 
?>