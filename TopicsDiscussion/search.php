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
    <title>Document</title>
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
    <?php include '../Homepage/header.php'; ?>
    
    <form id="searchForm">
        <div class="input m-3">
            <input type="text" class="form-control" placeholder="Search Topics" id="searchInput">
        </div>
    </form>

    <div class="p-3" id="searchResults">

    </div> <!-- Container for search results -->

    <script>
        function handleSearch() {
            const searchInput = document.getElementById('searchInput').value.trim(); // Get the search query

            if (searchInput === '') {
                // Clear the search results container
                const resultsContainer = document.getElementById('searchResults');
                resultsContainer.innerHTML = '';
                return; // Exit the function
            }

            // Make an AJAX request to the server
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `searchAction.php?query=${searchInput}`, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Display the search results
                    const resultsContainer = document.getElementById('searchResults');
                    resultsContainer.innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        // Attach the function to the form's submit event
        document.getElementById('searchInput').addEventListener('input', handleSearch);

        // Perform an initial search when the page loads
        window.addEventListener('load', handleSearch);

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>