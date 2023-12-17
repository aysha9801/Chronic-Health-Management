



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="patient-dashboard.css">
    <title>Patient Dashboard</title>
</head>

<body style="background-image: url('medical-banner-with-doctor-holding-stethoscope.jpg'); background-size: cover;">

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="logo.png" alt="Logo" style="max-width: 120px; max-height: 80px;">
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
                            
                            <li class="nav-item mx-4"><a class="nav-link" href="http://localhost/chronic_disease/patient_dashboard.php">Home</a></li>

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

    <div class="container mt-5">
        <div class="appointment-form">
            <div class="row">
              
                <div class="col-md-6 position-relative">
                    <div class="fixed-text">
                        <h2>Book an Appointment</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="image-container">
                        <img src="medical-banner-with-stethoscope.jpg" alt="Appointment Image" class="img-fluid">
                    </div>
                </div>
             
                <div class="col-md-6">
                <form action="post_appointment.php" method="post">

<h3>Book an Appointment</h3>
<div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter your first name">
</div>
<div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter your last name">
</div>
<div class="form-group">
    <label for="selectDoctor">Select Doctor</label>
    <select class="form-select" id="selectDoctor" name="select_doctor">
        <option selected disabled>Select a Doctor</option>
        <option value="DrEmilyJohnson=">Dr. Emily Johnson</option>
        <option value="DrMurcusRodrigez">Dr. Marcus Rodrigez</option>
        <option value="DrSofiaChin">Dr. Sofia Chin</option>
        <option value="DrSamuelWalker">Dr. Samuel Walker</option>
       
    </select>
</div>
<div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
</div>
<div class="form-group">
    <label for="contactNo">Contact No</label>
    <input type="tel" class="form-control" id="contactNo" name="contact_no" placeholder="Enter your contact number">
</div>
<div class="form-group">
    <label for="date">Date</label>
    <input type="text" class="form-control datepicker" id="date" name="date" placeholder="Select date">
</div>
<div class="form-group">
    <label for="time">Time</label>
    <input type="text" class="form-control timepicker" id="time" name="time" placeholder="Select time">
</div>
<button type="submit" class="btn btn-primary">Book Now</button>
</form>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.rawgit.com/timepicker/jquery-timepicker/master/jquery.timepicker.min.js"></script>
    <script>
     
        $(document).ready(function() {
            $('.datepicker').datepicker();
            $('.timepicker').timepicker();
        });
    </script>
</body>

</html>