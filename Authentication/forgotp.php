<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <style>
        .title {
            font-family: 'Sacramento', cursive;
            font-size: 50px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <br><br>
    <h1 class="text-center title">Welcome To</h1>
    <h1 class="text-center title">Forumium</h1>

    <div class="container-fluid col-3 bg-secondary p-0 mt-3 rounded">
        <h2 class=" py-3 text-center" style="color: white; background-color: #006064;">Reset Password (Work In Progress)</h2>
        <form class="p-3" action="#" method="post">
            <div class="mb-5 col-10">
                <p>Email Address</p>
                <input type="email" class="form-control" name="forgot_email" Required>
            </div>
            <button type="submit" class="btn btn-primary my-5 d-grid mx-auto">Reset</button>
            <span>Don't Have an Account?</span>
            <span><a href="register.php">Register</a></span> <br> <br>
            <span>Already Have An Account?</span>
            <span><a href="login.php">Sign In</a></span> <br> <br> <br>
            
        </form>
    </div>
</body>

</html>