<?php
session_start();

if (!isset($_SESSION['userName'])) {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='login.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <style>
        .title {
            font-family: 'Sacramento', cursive;
            font-size: 50px;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <!-- Discussion Body -->
    <section>
        <div class="p-0 mx-5 my-4 col-11">
            <h2 class="p-3 rounded" style="background-color: #006064;">Discussion</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 10%;">Post No</th>
                        <th scope="col" style="width: 50%;">Topic Name</th>
                        <th scope="col" style="width: 25%;">Topic Author</th>
                        <th scope="col" style="width: 10%;">Created On</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../Database/config.php';
                    $alltopicdata = mysqli_query($conn, "SELECT * FROM `topicpost`");
                    while ($row = mysqli_fetch_array($alltopicdata)) {
                        echo "
                        <tr>
                        <th scope='row'>" . $row['id'] . "</th>
                        <td> <a href='../TopicsDiscussion/topicDiscussion.php?id=" . $row['id'] . "' style='text-decoration: none; color: grey'>" . $row['topicName'] . "</a></td>
                        <td>" . $row['topicAuthor'] . "</td>
                        <td>" . $row['postedTime'] . "</td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</body>

</html>