<!-- Header Section -->
<section>
    <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-center py-3 border-bottom">
            <a href="../Homepage/index.php"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="mx-4 title">Forumium</span>
            </a>
            <ul class="nav nav-pills mx-4 mt-3">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Forum Topics
                    </a>
                    <ul class="dropdown-menu gap-3 p-2">
                        <li><a class="dropdown-item rounded-2" href="#">Gaming</a></li>
                        <li><a class="dropdown-item rounded-2" href="#">Movies</a></li>
                        <li><a class="dropdown-item rounded-2" href="#">Songs</a></li>
                        <li><a class="dropdown-item rounded-2" href="#">Daily Life</a></li>
                        <li><a class="dropdown-item rounded-2" href="#">Memes</a></li>
                        <li><a class="dropdown-item rounded-2" href="#">Discussion</a></li>
                        <li><a class="dropdown-item rounded-2" href="#">Sports</a></li>
                        <li><a class="dropdown-item rounded-2" href="#">Buy-Sell</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item rounded-2" href="../TopicsDiscussion/search.php">Search Topics</a>
                        </li>
                        <li><a class="dropdown-item rounded-2" href="#">All Topics</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="../TopicsDiscussion/createTopic.php" class="nav-link">Create Topic</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Help
                    </a>
                    <ul class="dropdown-menu gap-3 p-2">
                        <li><a class="dropdown-item rounded-2 disabled" href="#">Contact Us</a></li>
                        <li><a class="dropdown-item rounded-2 disabled" href="#">Forum Rules</a></li>
                        <li><a class="dropdown-item rounded-2" href="about.php">About</a></li>
                    </ul>
                </li>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php include '../Database/userData.php' ?>
                        <img src="<?php echo $row['profilePicture'] ?>" alt="profile" width="32" height="32"
                            class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li class="text-center text-success"><?php echo $row['userName'] ?></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item disabled" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="../Homepage/profile.php">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../Homepage/logout.php">Sign out</a></li>
                    </ul>
                </div>
            </ul>
        </header>
    </div>
</section>