<?php
session_start();
include '../Database/config.php';

if (isset($_POST['reply'])) {

    $postID = $_GET['id'];
    $replyMessage = $_POST['rMessage'];
    $replier = $_SESSION['userName'];
    date_default_timezone_set('Asia/Dhaka');
    $topic_postTime = date("d-F-Y h:i:s A");

    $replyQuery = "INSERT INTO `replies`(`replier`, `postID`, `repliedAt`, `replyMessage`) VALUES ('$replier','$postID','$topic_postTime','$replyMessage')";
    if (mysqli_query($conn, $replyQuery)) {
        echo "<script>alert('Replied Successfully!')</script>";
        echo "<script>location.href='topicDiscussion.php?id=" . $postID . "'</script>";
    } else {
        echo "<script>alert('Failed. Please Try Again!')</script>";
        echo "<script>location.href='topicDiscussion.php?id=" . $postID . "'</script>";
    }

} else {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='login.php'</script>";
}

?>