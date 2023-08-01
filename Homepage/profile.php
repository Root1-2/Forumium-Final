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
    <?php 
    include 'header.php';
    include '../Database/userData.php';
    ?>

    <!-- Profile Section -->
    <div class="container-fluid">
        <div class="card col-11 m-5 p-3 rounded-3" style="background-color: #2b2d33;">
            <div class="d-flex">
                <img src="<?php echo $row['profilePicture'] ?>" alt="Profile Picture" style="width: 500px;">
                <div class="mx-4 vr"></div>
                <!-- Profile Information -->
                <div>
                    <span class="h4 text-success me-5">
                        <?php echo $row['userName'] ?>
                    </span>
                    <Span class="h4 text-success mx-5">User ID: #
                        <?php echo $row['id'] ?>
                    </Span>
                    <p class="h5 my-3">Full Name:
                        <?php echo $row['fullName'] ?>
                    </p>
                    <p class="h5 my-3">Email:
                        <?php echo $row['email'] ?>
                    </p>
                    <p class="h5 my-3">Date of Birth:
                        <?php echo $row['dob'] ?>
                    </p>
                    <p class="h5 my-3">Gender:
                        <?php echo $row['gender'] ?>
                    </p>
                    <p class="h5 my-3">Phone Number:
                        <?php echo $row['phoneNumber'] ?>
                    </p>
                </div>
            </div>

        </div>

        <button class="btn bg-success d-flex m-auto p-2" disabled>Update</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        
</body>

</html>