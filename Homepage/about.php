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
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <style>
        .title {
            font-family: 'Sacramento', cursive;
            font-size: 60px;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Heroes Section -->
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="title fw-bold text-body-emphasis lh-1 mb-3">Forumium</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead">Forumium is an online forum website designed to bring people together and provide a
                platform for sharing knowledge, opinions, and experiences. With a wide range of topics, including
                gaming, movies, songs, daily life, memes, sports, there's something for everyone.</p>
        </div>
    </div>

    <!-- Features Section -->

    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Features</h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold text-body-emphasis">Forumium Provides....</p>
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div>
                            <i class="bi bi-file-post text-bg-primary p-3 rounded-3 fs-5"></i>
                        </div>
                        <h4 class="fw-semibold mt-2 mb-0 text-body-emphasis">Create Post</h4>
                        <p class="text-body-secondary">So that the other can interact with your post.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div>
                            <i class="bi bi-person text-bg-primary p-3 rounded-3 fs-5"></i>
                        </div>
                        <h4 class="fw-semibold mt-2 mb-0 text-body-emphasis">Profile</h4>
                        <p class="text-body-secondary">Create & Customize Your Profile.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div>
                            <i class="bi bi-people text-bg-primary p-3 rounded-3 fs-5"></i>
                        </div>
                        <h4 class="fw-semibold mt-2 mb-0 text-body-emphasis">Create Community</h4>
                        <p class="text-body-secondary">Discuss with one-another about various Topics.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div>
                            <i class="bi bi-three-dots text-bg-primary p-3 rounded-3 fs-5"></i>
                        </div>
                        <h4 class="fw-semibold mt-2 mb-0 text-body-emphasis">More Features</h4>
                        <p class="text-body-secondary">Many more updates to Come.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>


</body>

</html>