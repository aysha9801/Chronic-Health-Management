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
    <title>Doctor</title>
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
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="doctor_dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="doctor_patienthealthcarereport.php">Patient Healthcare Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="doctor_prescription.php">Prescription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Contact</a>
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

    <div class="container-3">
        <div class="box form-box">

            <?php

            include("db.php");

            if (isset($_POST['submit'])) {
                $date = $_POST['date'];
                $userID = $_POST['userID'];
                $docID = $_POST['docID'];
                $tradeNo = $_POST['tradeNo'];
                $medicineName = $_POST['medicineName'];
                $dosage = $_POST['dosage'];


                $query = mysqli_query($conn, 'SELECT userID FROM patients');
                $query1 = mysqli_query($con, "INSERT INTO prescription(date,docID,tradeNo,medicineName,dosage) VALUES( '$date','$docID','$tradeNo','$medicineName','$dosage')") or die("Error Occured");
                echo "<div class='message'>
                      <p>Sent successfully!</p>
                  </div> <br>";
            } else {

            ?>


                <header>Prescription</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="date">Date:</label>
                        <input type="date" name="date" id="date" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="userID">User ID: </label>
                        <input type="text" name="userID" id="userID" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="docID">Doctor ID:</label>
                        <input type="docID" name="docID" id="docID" autocomplete="off" required>
                    </div>


                    <div class="field input">
                        <label for="tradeNo">Trade Number:</label>
                        <input type="text" name="tradeNo" id="tradeNo" autocomplete="off" required>
                    </div>


                    <div class="field input">
                        <label for="medicineName">Madicine Name:</label>
                        <input type="text" name="medicineName" id="medicineName" autocomplete="off" required>
                    </div>


                    <div class="field input">
                        <label for="dosage">Dosage:</label>
                        <input type="text" name="dosage" id="dosage" autocomplete="off" required>
                    </div>


                    <div class="field">

                        <input type="submit" class="btn" name="submit" value="Send" required>
                    </div>

                </form>
        </div>
    <?php } ?>
    </div>


</body>

</html>