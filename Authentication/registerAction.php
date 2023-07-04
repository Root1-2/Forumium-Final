<?php

include '../Database/config.php';

$reg_fullName = $_POST['r_fullName'];
$reg_userName = $_POST['r_userName'];
$reg_email = $_POST['r_email'];
$reg_dob = $_POST['r_dob'];
$reg_gender = $_POST['r_selectedGender'];
$reg_phoneNumber = $_POST['r_phoneNumber'];
$reg_pass = $_POST['r_pass'];
$reg_conPass = $_POST['r_conPass'];
$reg_profilePicture = $_FILES['r_profilePicture'];

// echo "<pre>";
// var_dump($reg_profilePicture);
// echo "<pre>";

$imageLoc = $_FILES['r_profilePicture']['tmp_name'];
$imageName = $_FILES['r_profilePicture']['name'];
$image_dest = "../profilePhotos/" . $imageName;
move_uploaded_file($imageLoc, $image_dest);

// echo $imageLoc;
// echo $imageName;
// echo $image_dest;

$userName_pattern = "/^(?=.*[a-z])(?=.*\d)[a-z\d!@#$%^&*_\-]{5,10}$/";
$phoneNumber_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$email_pattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
$dob_pattern = "/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(19|20)\d{2}$/";
$pass_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,15}$/";

$insert_query = "INSERT INTO `accounts`(`fullName`, `userName`, `email`, `dob`, `gender`, `phoneNumber`, `pass`, `profilePicture`) VALUES
 ('$reg_fullName','$reg_userName','$reg_email','$reg_dob','$reg_gender','$reg_phoneNumber','$reg_pass', '$image_dest')";

$dupe_userName = mysqli_query($conn, "SELECT * FROM `accounts` WHERE userName = '$reg_userName'");
$dupe_email = mysqli_query($conn, "SELECT * FROM `accounts` WHERE email = '$reg_email'");

// echo "<br>";
// echo $reg_fullName;
// echo "<br>";
// echo $reg_userName;
// echo "<br>";
// echo $reg_email;
// echo "<br>";
// echo $reg_dob;
// echo "<br>";
// echo $reg_phoneNumber;
// echo "<br>";
// echo $reg_gender;
// echo "<br>";
// echo $reg_pass;
// echo "<br>";
// echo $reg_conPass;

if (!preg_match($userName_pattern, $reg_userName)) { //userName Match
    echo "<script>alert('Invalid Username!!')</script>";
    echo "<script>location.href='register.php'</script>";
} else if (!preg_match($email_pattern, $reg_email)) { //Email Match
    echo "<script>alert('Invalid Email. Please Try Again..!!')</script>";
    echo "<script>location.href='register.php'</script>";
} else if (!preg_match($phoneNumber_pattern, $reg_phoneNumber)) { //PhoneNumber Match
    echo "<script>alert('Invalid Phone Number.')</script>";
    echo "<script>location.href='register.php'</script>";
} else if (!preg_match($dob_pattern, $reg_dob)) { //DOB check
    echo "<script>alert('Invalid Date of Birth..!!')</script>";
    echo "<script>location.href='register.php'</script>";
} else if (!preg_match($pass_pattern, $reg_pass)) { //Password check
    echo "<script>alert('Invalid Password..!!')</script>";
    echo "<script>location.href='register.php'</script>";
} else if ($reg_pass !== $reg_conPass) { //confirm password check
    echo "<script>alert('Password & Confirm Password do not match..!!')</script>";
    echo "<script>location.href='register.php'</script>";
} else if (mysqli_num_rows($dupe_userName) > 0) { //duplicate username check from db
    echo "<script>alert('This Username is already taken..!!')</script>";
    echo "<script>location.href='register.php'</script>";
} else if (mysqli_num_rows($dupe_email) > 0) { //duplicate email check from db
    echo "<script>alert('This email is already taken..!!')</script>";
    echo "<script>location.href='register.php'</script>";
} else {
    if (!mysqli_query($conn, $insert_query)) {
        die("Not Inserted!!");
    } else {
        echo "<script>alert('Account Created Successfully!')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}

?>