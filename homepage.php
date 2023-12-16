<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5f79d95b99.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="header.css">
    <script src="https://kit.fontawesome.com/5f79d95b99.js" crossorigin="anonymous"></script>
    <title>Homepage</title>
</head>

<body>
    <!-- Header section -->
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
                            <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">About</a>
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
            <a href="login.php" class="login-button">Login</a>
            <a href="sign_up.php" class="signup-button ms-1">Sign Up</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- <button class="navbar-toggler pe-0 " type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
        </div>
    </nav>

    <!-- Home section -->

    <section id="home" class="home">
        <div class="banner_wrapper wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-1 order-2 pt-4">
                        <h3>Your Partner in</h3>
                        <h1>Chronic Wellness</h1>
                        <p>Join us to a fun and friendly environment. Our professionals are working so hard
                            to see smile on your face that you deserve! We are dedicated about our duties.</p>
                        <a href="#" class="main-btn mt-4 fill-btn">Sign Up</a>
                        <a href="#" class="main-btn mt-4 ms-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_wrapper wrapper pb-0 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center shadow">
                            <div class="icon-box">
                                <img src="./assets/icons/appointment.svg" alt="">
                            </div>
                            <div>
                                <h4>Easy Appointment</h4>
                                <p>Lorem Ipsum is simply is very dummy text of the printings and type setting</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center shadow">
                            <div class="icon-box">
                                <img src="./assets/icons/emergency-service.svg" alt="">
                            </div>
                            <div>
                                <h4>Emergency Service</h4>
                                <p>Lorem Ipsum is simply is very dummy text of the printings and type setting</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center shadow">
                            <div class="icon-box">
                                <img src="./assets/icons/24_7.svg" alt="">
                            </div>
                            <div>
                                <h4>24/7 Service</h4>
                                <p>Lorem Ipsum is simply is very dummy text of the printings and type setting</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services section -->

    <section id="services" class="services_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h3>Our Services</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div>
                            <h4>Personalized Care Plans</h4>
                            <p>Develop tailored plans based on individual needs, condition specifics, and lifestyle factors.</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div>
                            <h4>Symptom Monitoring</h4>
                            <p>Offer user-friendly tools to track symptoms, medications, and vital signs. Increased self-awareness, early detection of flares.</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div>
                            <h4>Educational Resources</h4>
                            <p> Offer convenient access to healthcare professionals and certified coaches through video conferencing.</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div>
                            <h4>Social Connection</h4>
                            <p> Foster safe spaces for peer-to-peer support groups and online forums for sharing experiences and tips.</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div>
                            <h4>Data Integration & Analytics</h4>
                            <p>Securely connect with wearable devices and health apps to collect and analyze health data.</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div>
                            <h4>General Dentistry</h4>
                            <p>Lorem Ipsum is simply is very dummy text of the printings and type setting Lorem Ipsum is
                                simply is very dummy text</p>
                            <a href="#" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer section -->

    <section id="contact" class="footer_wrapper wrapper">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Our Location</h5>
                    <p class="ps-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut
                        laoreet
                        pharetra....</p>
                    <div class="contact-info">
                        <ul class="list-unstyled p-0">
                            <li><a href="#">No. 96, Japan Garden City, Dhaka</a></li>
                            <li><a href="#">+8801234562345</a></li>
                            <li><a href="#">info@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>More Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Office</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Our Store</a></li>
                        <li><a href="#">Guarantee</a></li>
                        <li><a href="#">Buy Gift Card</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>More Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Office</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Our Store</a></li>
                        <li><a href="#">Guarantee</a></li>
                        <li><a href="#">Buy Gift Card</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Newsletter</h5>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
                        <button type="submit" class="main-btn rounded-2 mt-3 border-black text-black">Subscribe</button>
                    </div>
                    <h5>Stay Connected</h5>
                    <ul class="social-network d-flex align-items-center p-0 ">
                        <li><a href="/">
                                <img src="./assets/icons/facebook.svg" alt="" srcset="">
                            </a></li>
                        <li><a href="#"><img src="./assets/icons/linkedin.svg" alt=""></a></li>
                        <li><a href="#"><img src="./assets/icons/insta.svg" alt=""></a></li>
                        <li><a href="#"><img src="./assets/icons/twitter.svg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>