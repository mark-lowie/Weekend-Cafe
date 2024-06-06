<?php
session_start(); 
$_SESSION = array();

session_destroy();


header("Location: /Weekend-Cafe/widgets/weekend_login.php");
exit();
?>
