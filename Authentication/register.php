<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create An Account</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .fa-camera {
            background: skyblue;
            color: black;
            border-top-left-radius: 10px;
            cursor: pointer;
            font-size: 10px;
            padding: 5px;
            position: absolute;
            text-align: center;
            width: 30px;
            bottom: 0;
            right: 0;
        }

        .title {
            font-family: 'Sacramento', cursive;
            font-size: 50px;
            font-weight: bold;
        }

        .profile-preview {
            width: 200px;
            height: 200px;
            background-color: grey;
            background-position: center;
            background-size: cover;
            position: relative;
            margin-left: 70px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <div class="m-auto d-block">
            <h1 class="text-center title">Welcome To</h1>
            <h1 class="text-center title">Forumium</h1>
        </div>

        <div class="container-fluid col-6 bg-secondary p-0 mt-3 rounded">
            <h3 class=" py-3 text-center" style="color: white; background-color: #006064;">Create An Account</h3>
            <form class="p-3" action="registerAction.php" method="post" enctype="multipart/form-data">
                <div class="mx-auto profile-preview">
                    <label for="profile-picture-input">
                        <i class="fa fa-camera" title="Upload Picture"></i>
                    </label>
                    <input id="profile-picture-input" name="r_profilePicture" type="file" style="display: none;"
                        Required>
                </div>
                <div class="d-flex gap-5">
                    <div class="mb-5 col-5">
                        <p>Full Name</p>
                        <input type="text" class="form-control" name="r_fullName" Required>
                    </div>
                    <div class="mb-5 col-5">
                        <p>Username</p>
                        <input type="text" class="form-control" name="r_userName" Required>
                    </div>
                </div>
                <div class="d-flex gap-5">
                    <div class="mb-5 col-5">
                        <p>Email</p>
                        <input type="email" class="form-control" name="r_email" Required>
                    </div>
                    <div class="mb-5 col-5">
                        <p>Date of Birth</p>
                        <input type="text" class="form-control" name="r_dob" Required>
                    </div>
                </div>
                <div class="d-flex gap-5">
                    <div class="mb-5 col-5">
                        <p>Password</p>
                        <input type="password" class="form-control" name="r_pass" Required>
                    </div>
                    <div class="mb-5 col-5">
                        <p>Confirm Password</p>
                        <input type="password" class="form-control" name="r_conPass" Required>
                    </div>
                </div>
                <div class="d-flex gap-5">
                    <div class="mb-0 col-5">
                        <p>Phone Number</p>
                        <input type="text" name="r_phoneNumber" class="form-control" style="width: 350px" Required>
                    </div>
                    <div>
                        <p>Gender:</p>
                        <input type="radio" name="gender"
                            onchange="document.getElementsByName('r_selectedGender')[0].value = this.value" value="Male"
                            Required>
                        <span>Male</span>
                        <input type="radio" name="gender"
                            onchange="document.getElementsByName('r_selectedGender')[0].value = this.value"
                            value="Female" Required>
                        <span>Female</span>
                        <input type="hidden" name="r_selectedGender">
                    </div>
                </div>

                <button type="submit" class="btn btn-success d-grid mt-5 mx-auto">Register</button>
                <span>Already Have An Account?</span>
                <span><a href="login.php">Sign In</a></span>
            </form>
        </div>
    </div>
    <script>
        const fileInput = document.getElementById('profile-picture-input');
        const profilePreview = document.querySelector('.profile-preview');
        let profilePicture = null;

        fileInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                profilePreview.style.backgroundImage = `url(${e.target.result})`;
                profilePicture = e.target.result; // Save the image URL in profilePicture variable
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        });
    </script>

</body>

</html>