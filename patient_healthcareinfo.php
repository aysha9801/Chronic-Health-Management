<?php
include 'db.php';

session_start();
$email = $_SESSION['email'];


if (isset($_POST['submit'])) {

    $docid = (int)$_POST['docid'];
    $diseaseid =  (int)$_POST['diseaseid'];
    $oxygensaturation = $_POST['oxygensaturation'];
    $systolic = $_POST['systolic'];
    $dystolic = $_POST['dystolic'];
    $heartrate = $_POST['heartrate'];
    $glucoselevel = $_POST['glucoselevel'];
    $weight = $_POST['weight'];
    $symptoms = $_POST['symptoms'];

    $conn = new mysqli('localhost', 'root', '', 'final_database');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $sql = "SELECT userID FROM patient WHERE email = '$email'";
        $userid = mysqli_query($conn, $sql);

        $idOfUser = mysqli_fetch_assoc($userid)["userID"];

        $stmt = "insert into health_record(diseaseID, userID, docID, oxygenSaturation, systolic, dystolic, heartRate, glucoseLevel, weight, symptoms) values($diseaseid, $idOfUser, $docid, $oxygensaturation, $systolic, $dystolic, $heartrate, $glucoselevel, $weight, '$symptoms')";

        $execval = mysqli_query($conn, $stmt);
        $conn->close();
        header('location: patient_healthcareinfo.php');
    }
} elseif (isset($_POST['update'])) {
    $conn = new mysqli('localhost', 'root', '', 'final_database');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $sql = "SELECT userID FROM patient WHERE email = '$email'";
        $userid = mysqli_query($conn, $sql);

        $idOfUser = mysqli_fetch_assoc($userid)["userID"];

        $update = "UPDATE health_record SET oxygenSaturation=$_POST[oxygensaturation], systolic=$_POST[systolic], dystolic=$_POST[dystolic], heartRate=$_POST[heartrate], glucoseLevel=$_POST[glucoselevel], weight=$_POST[weight],
        symptoms='$_POST[symptoms]'";

        $query_run = mysqli_query($conn, $update);
        $conn->close();
        header('location: patient_healthcareinfo.php');
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
    <title>Patient</title>
</head>
<style>
    .container-2 {
        margin: 150px auto 0px auto;
        width: 50%;
    }

    h3 {
        text-align: center;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="#">Chronic Care Hub</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="patient_dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="patient_healthcareinfo.php">Healthcare Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="patient_prescription.php">Prescription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="index.php">Chatbot</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="homepage.php" class="login-button">Logout</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- <button class="navbar-toggler pe-0 " type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
        </div>
    </nav>

    <div class="container-2">
        <h3>Health Information Form</h3>
        <form action="patient_healthcareinfo.php" class="row g-3" method="POST">
            <div class="col-md-6">
                <label for="docid" class="form-label">Doctor ID</label>
                <input type="text" class="form-control" id="docid" name="docid" required>
            </div>
            <div class="col-md-6">
                <label for="diseaseid" class="form-label">Disease ID</label>
                <input type="text" class="form-control" id="diseaseid" name="diseaseid" required>
            </div>
            <div class="col-md-4">
                <label for="oxygensaturation" class="form-label">Oxygen Saturation</label>
                <input type="text" class="form-control" id="oxygensaturation" name="oxygensaturation" required>
            </div>
            <div class="col-md-4">
                <label for="systolic" class="form-label">Systolic</label>
                <input type="text" class="form-control" id="systolic" name="systolic" required>
            </div>
            <div class="col-md-4">
                <label for="dystolic" class="form-label">Dystolic</label>
                <input type="text" class="form-control" id="dystolic" name="dystolic" required>
            </div>
            <div class="col-md-4">
                <label for="heartrate" class="form-label">Heart Rate</label>
                <input type="text" class="form-control" id="heartrate" name="heartrate" required>
            </div>
            <div class="col-md-4">
                <label for="glucoselevel" class="form-label">Glucose Level</label>
                <input type="text" class="form-control" id="glucoselevel" name="glucoselevel" required>
            </div>
            <div class="col-md-4">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight" required>
            </div>
            <div class="col-md-12">
                <label for="symptoms" class="form-label">Symptoms</label>
                <textarea type="text" class="form-control" id="symptoms" name="symptoms" required></textarea>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary col-md-2 me-2" />
            <input type="submit" name="update" value="Update" class="btn btn-primary col-md-2 me-2" />
        </form>
    </div>


</body>

</html>