<?php
// Logout Page
session_start();
session_unset();
session_destroy();
header('location: login.php');
?>