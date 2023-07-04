<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Topic Discussion</title>
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
      font-size: 50px;
    }
  </style>

</head>

<body>

  <?php
  session_start();

  if (isset($_SESSION['userName'])) {
    include '../Homepage/header.php';
  } else {
    echo "<script>alert('You Have to Login First')</script>";
    echo "<script>location.href='../Authentication/logIn.php'</script>";
  }

  ?>
  <!-- Post Section -->
  <section>
    <?php
    include '../Database/topicData.php';
    ?>
    <div class="m-5">
      <h3 class="p-2" style="background-color: rgba(18, 76, 98, 0.65);">
        <?php echo $row['topicName'] ?>
      </h3>
      <br>
      <p>Category: <a href="">
          <?php echo $row['topicCategory'] ?>
        </a></p>
      <!-- Post Container -->
      <div class="card mb-3 col-12">
        <p class="p-1" style="background-color: #2c3e50;">
          Posted On:
          <?php echo $row['postedTime'] ?>
        </p>
        <div class="d-flex gap-5 p-2">
          <div>
            <p>
              <?php echo $row['topicAuthor'] ?>
            </p>
            <div>
              <img src="<?php echo $row1['profilePicture'] ?>" style="width:200px;" alt="">
            </div>
          </div>
          <div class="vr"></div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text">
                <?php echo $row['topicDescription'] ?>
              </p>
              <img class="mx-auto d-flex pb-5" src="<?php echo $row['topicImage'] ?>" style="width: 500px;" alt="">
            </div>
            <!-- Icon Container -->
            <div class="bottom-0 position-absolute end-0 p-3">
              <a href="editTopic.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pen px-3"></i></a>
              <a href="#" onclick="confirmDelete(<?php echo $row['id']; ?>)"><i class="bi bi-trash3 px-3"></i></a>
            </div>

            <script>
              function confirmDelete(topicId) {
                // Show the confirmation alert box
                if (confirm('Are you sure you want to delete this topic?')) {
                  // If the user clicks 'OK', redirect to deleteAction.php
                  window.location.href = 'deleteTopicAction.php?id=' + topicId;
                } else {
                  // If the user clicks 'Cancel', do nothing (close the alert box)
                }
              }
            </script>

          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Reply Section -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    
</body>

</html>