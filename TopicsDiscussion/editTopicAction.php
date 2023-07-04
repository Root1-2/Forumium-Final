<?php
session_start();

include '../Database/config.php';
include '../Database/topicData.php';

$topicID = $_GET['id'];
$topic_name = $_POST['topicName'];
$topic_category = $_POST['topicCategory'];
$topic_desc = $_POST['topicDescription'];
$topic_image = $_FILES['topicImage'];

$imageLoc = $_FILES['topicImage']['tmp_name'];
$imageName = $_FILES['topicImage']['name'];

// Check if a new image is selected
if (!empty($imageName)) {
    $image_dest = "../postPhotos/" . $imageName;
    move_uploaded_file($imageLoc, $image_dest);
} else {
    $image_dest = $row['topicImage'];
}

$currentCategory = $row['topicCategory'];

// Check if category is empty
if ($topic_category === "Choose...") {
    $topic_category = $currentCategory;
}

$updateQuery = "UPDATE `topicpost` SET `topicName`='$topic_name',`topicCategory`='$topic_category',`topicDescription`='$topic_desc',
    `topicImage`='$image_dest' WHERE id = '$topicID'";

// var_dump($id);

if (mysqli_query($conn, $updateQuery)) {
    echo "<script>alert('Updated Successfully!')</script>";
    echo "<script>location.href='topicDiscussion.php?id=$topicID'</script>";
} else {
    echo "<script>alert('Failed. Please Try Again!')</script>";
    echo "<script>location.href='editTopic.php'</script>";
}

?>
