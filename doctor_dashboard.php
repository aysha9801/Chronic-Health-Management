<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="caregiver.css">
    <link rel="stylesheet" href="homepage.css">
    <title>Doctor</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="#">Chronic Care Hub</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
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
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- <button class="navbar-toggler pe-0 " type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
        </div>
    </nav>

    <section>
        <div class="banner_wrapper wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-1 order-2 style="margin-top:100px"">
                        <h3>Welcome to</h3>
                        <h1>Doctor Dashboard</h1>
                    </div>
                    <div class="col-md-6 order-md-2 order-1 mb-md-0 mb-5">
                            <div class="animate-img">
                                <img src="Asset 3.png" alt="">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>