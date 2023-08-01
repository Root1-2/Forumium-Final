<?php

include 'config.php';

// Post Data Info
$topicID = $_GET['id'];
$post = "SELECT * FROM `topicpost` WHERE id = '$topicID'";
$result = mysqli_query($conn, $post);
$row = mysqli_fetch_assoc($result);

// Post Creator Info
$authorProfile = $row['topicAuthor'];
$authorProfilequery = "SELECT * FROM `accounts` WHERE userName = '$authorProfile'";
$result1 = mysqli_query($conn, $authorProfilequery);
$row1 = mysqli_fetch_assoc($result1);

?>