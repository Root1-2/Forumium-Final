<?php

include 'config.php';

// Replied Data Info
// $topicID = $_GET['id'];
// $replies = "SELECT * FROM `replies` WHERE postID = '$topicID'";
// $result2 = mysqli_query($conn, $replies);

// Replier Info
$authorProfile = $row2['replier'];
$authorProfilequery = "SELECT * FROM `accounts` WHERE userName = '$authorProfile'";
$result3 = mysqli_query($conn, $authorProfilequery);
$row3 = mysqli_fetch_assoc($result3);

?>