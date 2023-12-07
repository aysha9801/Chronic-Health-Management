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
    <title>Chronic Care</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background: url('hero.png') center center fixed;
            background-size: cover;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        footer {
            background-color: lavender;
            color: white;
            text-align: center;
            padding: 1em;
            font-family: cursive;
        }

        nav {
            background-color: lightblue;
            padding: 0.5em;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: right;
            font-family: cursive;
        }
        
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .container{
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        h1 {
            font-family: cursive;
            color: white;
            text-align: left;
            font-size: 50px;

        }

        h5{
            font-family: sans-serif;
            font-size: 30px;
        }


        p {
            color: #666;
        }

        .cta-button {
            background-color: #3498db;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button:hover {
            background-color: #2980b9;
        }

        .top-right-text {
            position: fixed;
            top: 10px;
            right: 10px;
            font-size: 12px;
        }

        .bg-holder {
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body>
    <header>
        <h1>| Chronic Care Hub |</h1>
        <div class="top-right-text">Contact Number: +880 or 2122</div>
    </header>

    <nav>
        <ul>
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="#supportgroup">Support Groups</a></li>
            <li><a href="#contactus">Contact</a></li>
        </ul>
    </nav>


    
    <div class="container">
        <h2>Welcome to Chronic Care</h2>
        <p>Your trusted partner in managing chronic health conditions.</p>

        <p>Our platform provides personalized tools and resources to help you take control of your health and well-being.</p>

        <a href="#signup" class="cta-button">Sign Up Now</a> or <a href="#signin" class="cta-button">Sign In</a>
    </div>



        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="image\treatment.png" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
              <h2 class="fw-bold mb-4">We are developing a healthcare <br class="d-none d-sm-block" />system around you</h2>
              <p>We think that everyone should have easy access to excellent healthcare. 
                <br class="d-none d-sm-block" />Our aim is to make the procedure as simple as possible for our patients
                <br class="d-none d-sm-block" /> and to offer treatment no matter where they are. </p>
              <div class="py-3">
                <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Learn more </button>
              </div>
            </div>
          </div>
        </div>
      </section>

    </section>

    <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="image\hero.png" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">We're <strong>determined </strong>for<br />your&nbsp;<strong>better life.</strong></h1>
              <p class="fs-1 mb-5">You can get the care you need 24/7 – be it online. </p><a class="btn btn-lg btn-primary rounded-pill" href="#!" role="button">Make an Appointment</a>
            </div>
          </div>
        </div>
    </section>


    <div class="container">
          <div>
            <h5> <strong>Customer Care</strong></h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Contact US</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Get Update</a></li>
              </ul>
          </div>
    </div>



    <footer>
        <p>&copy; 2023 Chronic Care</p>
    </footer>

</body>
</html>