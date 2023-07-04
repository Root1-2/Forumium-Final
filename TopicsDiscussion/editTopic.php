<?php
include '../Database/topicData.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>Edit Topic</title>
    <link rel="stylesheet" href="../styles.css">
    <script src="https://kit.fontawesome.com/58ecfd313b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <form action="editTopicAction.php?id=<?php echo $row['id']; ?>" method="POST" enctype='multipart/form-data'>
        <div class="bg-secondary container-fluid col-11 p-1 m-5 rounded">
            <div class="m-5 col-9">
                <input type="text" class="form-control" name="topicName" value="<?php echo $row['topicName'] ?>"
                    placeholder="Topic Name">
            </div>

            <div class="col-5">
                <div class="input-group m-5">
                    <label class="input-group-text" for="inputGroupSelect01">Category</label>
                    <select class="form-select" name="topicCategory" value="<?php echo $row['topicCategory'] ?>"
                        id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="Gaming">Gaming</option>
                        <option value="Movies">Movies</option>
                        <option value="Songs">Songs</option>
                        <option value="Daily Life">Daily Life</option>
                        <option value="Memes">Memes</option>
                        <option value="Discussion">Discussion</option>
                        <option value="Sports">Sports</option>
                        <option value="Buy-Sell">Buy-Sell</option>
                    </select>
                </div>
            </div>

            <div class="m-5 col-9">
                <textarea class="form-control" name="topicDescription" placeholder="Topic Description"
                    rows="5"><?php echo $row['topicDescription']; ?></textarea>

            </div>

            <div class="col-3 input m-5">
                <input type="file" class="form-control" name="topicImage" id="inputGroupFile">
            </div>

            <button type="submit" name="login" class="btn btn-primary mb-5 d-grid mx-auto">Submit</button>
        </div>
    </form>

</body>

</html>