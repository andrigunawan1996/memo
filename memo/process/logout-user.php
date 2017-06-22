<?php
require '../config/constant-config.php';
session_start();
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
header('Location: '.URL.'index.php',TRUE,302);
?>