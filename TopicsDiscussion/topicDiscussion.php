<?php
session_start();

if (!isset($_SESSION['userName'])) {
  echo "<script>alert('Not Accessible!')</script>";
  echo "<script>location.href='../Authentication/logIn.php'</script>";
}
?>

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

    body {
      position: relative;
    }

    /* Reply Icon Styles */
    .reply-icon {
      background-color: #0d6efd;
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      cursor: pointer;
      border-radius: 50%;
    }
  </style>

</head>

<body>
  <?php include '../Homepage/header.php'; ?>

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

            <?php
            if ($_SESSION['userName'] == $row['topicAuthor']) {
              echo "
                  <!-- Icon Container -->
                  <div class='bottom-0 position-absolute end-0 p-3'>
                    <a href='editTopic.php?id=" . $row['id'] . "'><i class='bi bi-pen px-3'></i></a>
                    <a href='#' onclick='confirmDelete(" . $row['id'] . ")'><i class='bi bi-trash3 px-3'></i></a>
                  </div>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Replies Section -->
  <section>
    <?php
    $topicID = $_GET['id'];
    $replies = "SELECT * FROM `replies` WHERE postID = '$topicID'";
    $result2 = mysqli_query($conn, $replies);
    while ($row2 = mysqli_fetch_array($result2)) {
      include '../Database/replyData.php';
      echo "
    <div class='m-5'>
      <div class='card mb-3 col-12'>
        <p class='p-1' style='background-color: #2c3e50;'>
          Replied On: " . $row2['repliedAt'] . "
        </p>
        <div class='d-flex gap-5 p-2'>
          <div>
            <p>
              " . $row2['replier'] . "
            </p>
            <div>
              <img src='" . $row3['profilePicture'] . "' style='width:200px;' alt=''>
            </div>
          </div>
          <div class='vr'></div>
          <div class='col-md-8'>
            <div class='card-body'>
              <p class='card-text'>
                " . $row2['replyMessage'] . "
              </p>
            </div>";

      if ($_SESSION['userName'] == $row2['replier']) {
        echo '
      <!-- Icon Container -->
      <div class="bottom-0 position-absolute end-0 p-3">
        <a href="editTopic.php?id=' . $row2['id'] . '"><i class="bi bi-pen px-3"></i></a>
        <a href="#" onclick="confirmDelete(' . $row2['id'] . ')"><i class="bi bi-trash3 px-3"></i></a>
      </div>';
      }

      echo "
          </div>
        </div>
      </div>
    </div>";
    }
    ?>
  </section>


  <div class="reply-icon px-2 py-1">
    <a href="#" onclick="toggleReplyField()"><i class="bi bi-reply-fill display-6"></i></a>
  </div>

  <!-- Reply Text Field -->
  <form action="replyAction.php?id=<?php echo $row['id'] ?>" method="POST">
    <div id="reply-field-container" class="container-fluid fixed-bottom bg-dark p-3" style="display: none;">
      <textarea name="rMessage" id="reply-text" rows="4" class="form-control mb-2"
        placeholder="Write your Reply here..."></textarea>
      <button type="submit" name="reply" class="btn btn-primary">Submit</button>
    </div>
  </form>


  <script>
    function confirmDelete(topicId) {
      // Show the confirmation alert box
      if (confirm('Are you sure you want to delete this topic?')) {
        // OK
        window.location.href = 'deleteTopicAction.php?id=' + topicId;
      } else {
        //Cancel, close the alert box
      }
    }
  </script>

  <script>
    function toggleReplyField() {
      var replyFieldContainer = document.getElementById("reply-field-container");
      replyFieldContainer.style.display = (replyFieldContainer.style.display === "none") ? "block" : "none";
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</body>

</html>