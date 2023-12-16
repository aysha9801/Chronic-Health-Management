<?php

$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include 'db.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['typeOfUser'];

    if ($userType == 'patient') {
        $std = "SELECT * from patient where email='$email' and password='$password'";
        $result = mysqli_query($conn, $std);
        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                $invalid = 0;
                session_start();
                $_SESSION['email'] = $email;
                header('location:patient_dashboard.php');
            }
        }
    } elseif ($userType == 'doctor') {
        $std = "SELECT * from doctor where email='$email' and password='$password'";
        $result = mysqli_query($conn, $std);
        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                $invalid = 0;
                session_start();
                $_SESSION['ID'] = $ID;
                header('location:doctor_dashboard.php');
            }
        }
    } elseif ($userType == 'caregiver') {
        $std = "SELECT * from care_giver where email='$email' and password='$password'";
        $result = mysqli_query($conn, $std);
        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                $invalid = 0;
                session_start();
                $_SESSION['ID'] = $ID;
                header('location:caregiver_dashboard.php');
            }
        }
    } else {
        $invalid = 1;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="caregiver.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="style.css">
    <title>Patient</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="#">Chronic Care Hub</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>
            <a href="homepage.php" class="login-button">Home</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- <button class="navbar-toggler pe-0 " type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
        </div>
    </nav>

    <div class="container-3">
        <div class="box form-box">
            <header>Login</header>
            <form action="login.php" method="POST">
                <div class="field input">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="typeOfUser">Type of user:</label>
                    <select id="typeOfUser" name="typeOfUser" required>
                        <option value="" selected disabled hidden>Select User Type</option>
                        <option value="patient">Patient</option>
                        <option value="doctor">Doctor</option>
                        <option value="caregiver">Care-giver</option>
                    </select>
                </div>

                <div class="field input">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">

                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="sign_up.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>