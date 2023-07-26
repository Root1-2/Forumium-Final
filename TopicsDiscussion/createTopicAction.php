<?php
session_start();

include '../Database/config.php';

$topic_name = $_POST['topicName'];
$topic_category = $_POST['topicCategory'];
$topic_desc = $_POST['topicDescription'];
$topic_image = $_FILES['topicImage'];
date_default_timezone_set('Asia/Dhaka');
$topic_postTime = date("d-F-Y h:i:s A");
$topicAuthor = $_SESSION['userName'];
// echo $topic_postTime;
// echo $topicAuthor;

// echo "<pre>";
// var_dump($topic_image);
// echo "<pre>";

$imageLoc = $_FILES['topicImage']['tmp_name'];
$imageName = $_FILES['topicImage']['name'];
$image_dest = "../postPhotos/" . $imageName;
move_uploaded_file($imageLoc, $image_dest);

$insertQuery = "INSERT INTO `topicpost`(`topicName`, `topicAuthor`, `topicCategory`, `topicDescription`, `topicImage`, `postedTime`) 
    VALUES ('$topic_name', '$topicAuthor', '$topic_category', '$topic_desc', '$image_dest', '$topic_postTime')";

if (mysqli_query($conn, $insertQuery)) {
    echo "<script>alert('Posted Successfully!')</script>";
    echo "<script>location.href='../Homepage/index.php'</script>";
} else {
    echo "<script>alert('Failed. Please Try Again!')</script>";
    echo "<script>location.href='createTopic.php'</script>";
}

?>