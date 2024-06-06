<?php
session_start();
$response = array('loggedin' => isset($_SESSION['loggedin']) && $_SESSION['loggedin']);
echo json_encode($response);
?>
