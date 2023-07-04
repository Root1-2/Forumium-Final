<?php
session_start();

if(isset($_SESSION['userName'])) {
    include 'homepage.php';
}

else {
    echo "<script>alert('You Have to Login First')</script>";
    echo "<script>location.href='../Authentication/logIn.php'</script>";
}

?>