<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

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
        <h2 class=" py-3 text-center" style="background-color: #006064;">Sign In</h2>
        <form class="p-3" action="loginAction.php" method="post">
            <div class="mb-5 col-10">
                <p>Username</p>
                <input type="text" class="form-control" name="l_userName" Required>
            </div>
            <div class="mb-4 col-10">
                <p>Password</p>
                <input type="password" class="form-control" name="l_password" Required>
            </div>
            <div class="d-flex justify-content-between">
                <div class="mb-5 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <span>Remember Me</span>
                </div>
                <div>
                    <span><a class="span-forgot" href="forgotp.php" style="text-decoration: none; color: white">Forgot
                            Password?</a></span>
                </div>
            </div>

            <button type="submit" name="login" class="btn btn-primary mb-5 d-grid mx-auto">Log In</button>

            <span>Don't Have an Account?</span>
            <span><a class="span-register" href="register.php">Register</a></span>
        </form>
    </div>
</body>

</html>