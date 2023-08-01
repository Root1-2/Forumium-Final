<?php
// Logged In User Data
include 'config.php';
$loggedInUser = mysqli_query($conn, "SELECT * FROM `accounts` WHERE userName = '{$_SESSION['userName']}' OR email = '{$_SESSION['userName']}'");
$row = mysqli_fetch_assoc($loggedInUser);

?>