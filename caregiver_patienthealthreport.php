<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="caregiver.css">
    <link rel="stylesheet" href="homepage.css">
    <title>Care Giver</title>
</head>
<style>
    .h11 {
        margin-top: 150px;
        margin-bottom: 50px;
        text-align: center;
        color: black;
        font-weight: bold;
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
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="caregiver_dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="caregiver_patienthealthreport.php">Patient Healthcare Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Services</a>
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

    <div class="card" style="margin: 150px auto 0px auto; width: 100%; display:flex; justify-content:center; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); ">
        <div class="card-header">
            <h5 class="card-title" style="text-align: center; font-weight:bold; font-size:30px;">Patient Healthcare Report</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">diseaseID</th>
                        <th scope="col">userID</th>
                        <th scope="col">docID</th>
                        <th scope="col">recordNo</th>
                        <th scope="col">oxygenSaturation</th>
                        <th scope="col">systolic</th>
                        <th scope="col">dystolic</th>
                        <th scope="col">heartRate</th>
                        <th scope="col">glucoseLevel</th>
                        <th scope="col">weight</th>
                        <th scope="col">symptoms</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'db.php';

                    $sql = "SELECT * FROM  health_record";
                    $query = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($query) > 0) {
                    ?>

                        <?php
                        $i = 1;
                        while ($info = mysqli_fetch_array($query)) {
                            $diseaseID = $info['diseaseID'];
                            $userID = $info['userID'];
                            $docID = $info['docID'];
                            $recordNo = $info['recordNo'];
                            $oxygenSaturation = $info['oxygenSaturation'];
                            $systolic = $info['systolic'];
                            $dystolic = $info['dystolic'];
                            $heartRate = $info['heartRate'];
                            $glucoseLevel = $info['glucoseLevel'];
                            $weight = $info['weight'];
                            $symptoms = $info['symptoms'];
                        ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $diseaseID ?></td>
                        <td><?= $userID ?></td>
                        <td><?= $docID ?></td>
                        <td><?= $recordNo ?></td>
                        <td><?= $oxygenSaturation ?></td>
                        <td><?= $systolic ?></td>
                        <td><?= $dystolic ?></td>
                        <td><?= $heartRate ?></td>
                        <td><?= $glucoseLevel ?></td>
                        <td><?= $weight ?></td>
                        <td><?= $symptoms ?></td>
                    </tr>
                </tbody>
        <?php
                        }
                    }
        ?>
        </tbody>
            </table>
        </div>
    </div>
</body>

</html>