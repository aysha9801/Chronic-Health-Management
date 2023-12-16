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

    <div class="card" style="margin: 150px auto 0px auto; width: 100%; display:flex; justify-content:center; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); ">
        <div class="card-header">
            <h5 class="card-title" style="text-align: center; font-weight:bold; font-size:30px;">Patient Prescription</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Doctor ID</th>
                        <th scope="col">Trade Number</th>
                        <th scope="col">Medicine Name</th>
                        <th scope="col">Dosage</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'db.php';

                    $sql = "SELECT * FROM  prescription";
                    $query = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($query) > 0) {
                    ?>

                        <?php
                        $i = 1;
                        while ($info = mysqli_fetch_array($query)) {
                            $userID = $info['userID'];
                            $docID = $info['docID'];
                            $tradeNo = $info['tradeNo'];
                            $medicineName = $info['medicineName'];
                            $dosage = $info['dosage'];
                            $date = $info['date'];
                        ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $userID ?></td>
                        <td><?= $docID ?></td>
                        <td><?= $tradeNo ?></td>
                        <td><?= $medicineName ?></td>
                        <td><?= $dosage ?></td>
                        <td><?= $date ?></td>
                    </tr>
                </tbody>
        <?php
                        }
                    }
        ?>
        </tbody>
            </table>
        </div>
</body>

</html>