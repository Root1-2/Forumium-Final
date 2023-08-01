<?php
session_start();

if(isset($_SESSION['userName'])) {
    echo "<script>location.href='homepage.php'</script>";
}

else {
    echo "<script>alert('You Have to Login First')</script>";
    echo "<script>location.href='../Authentication/logIn.php'</script>";
}

?>