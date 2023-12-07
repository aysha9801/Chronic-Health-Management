<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "chronic_disease";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="C:\xampp\htdocs\Chronic-Health-Management\fontawesome-free-6.5.1-web\css\all.min.css">
    <title>Patient Dashboard</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
}

.header {
    background-color: #3499db;
    color: white;
    padding: 10px 0;
}


.logo {
    max-width: 100%;
    height: auto;
}

.search-box {
    position: relative;
}

.search-box input {
    width: 100%;
    padding: 5px;
    border-radius: 10px;
}

.navbar-nav .nav-link {
    color: white;
    transition: background-color 0.3s;
}

.navbar-nav .nav-link:hover {
    background-color: #0056b3; /* Dark blue color on hover */
    color: #fff; /* Text color on hover */
    border-radius: 8%;
}

.appointment-form {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.fixed-text {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px;
    color: #fff;
    z-index: 1;
  }
  
  @media (max-width: 768px) {
    .fixed-text h2 {
      font-size: 1.5rem;
    }
    .fixed-text p {
      font-size: 0.8rem;
    }
  }

.appointment-form img {
    max-width: 100%;
    height: auto;
    position: relative;
}

.appointment-form h2 {
    margin-top: 20px;
}

.image-container {
    position: relative;
  }
  
  .image-container::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }


@media (max-width: 992px) {
    .navbar-nav {
        text-align: center;
    }

    .nav-item {
        margin-right: 0;
        margin-bottom: 10px;
    }
    </style>
}
</head>

<body style="background-image: url('medical-banner-with-doctor-holding-stethoscope.jpg'); background-size: cover;">


    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="logo.png" alt="Logo" class="logo">
                </div>
                <div class="col-lg-8 d-flex justify-content-end align-items-center">
                    <div class="search-box mx-4">
                        <input type="text" placeholder="Search">
                    </div>
                    <button class="btn btn-primary">Log Out</button>
                </div>


                <div class="col-lg-12 mt-3">
                    <nav class="navbar navbar-expand-lg justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-4"><a class="nav-link" href="patient-dashboard.php">Home</a></li>
                            <li class="nav-item mx-4"><a class="nav-link" href="appointment.php">Appointment</a></li>
                            <li class="nav-item mx-4"><a class="nav-link" href="#">Upload Report</a></li>
                            <li class="nav-item mx-4"><a class="nav-link" href="#">Caregiver</a></li>
                            <li class="nav-item mx-4"><a class="nav-link" href="#">Support Group</a></li>
                            <li class="nav-item mx-4"><a class="nav-link" href="#">Prescription</a></li>
                            <li class="nav-item mx-4"><a class="nav-link" href="#">Buy Drug</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
