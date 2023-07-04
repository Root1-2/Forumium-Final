<?php

include '../Database/config.php';

$searchInput = $_GET['query'];
$searchQuery = mysqli_query($conn, "SELECT * FROM topicpost WHERE `topicName` LIKE '%$searchInput%'");

// Display the search results
if ($searchQuery->num_rows > 0) {
    while ($row = $searchQuery->fetch_assoc()) {
        // Display the search results however you want
        echo "
        <a style='text-decoration: none; color: grey' href='../TopicsDiscussion/topicDiscussion.php?id=" . $row['id'] . "'><h4>" . $row['topicName'] ."</h4></a>
        <span>Uploaded By ". $row['topicAuthor'] ." on " . $row['postedTime'] ." </span>
        <hr style='margin: 30px 0px'>
        ";
    }
}

?>
