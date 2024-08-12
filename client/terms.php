<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Hotel Online Reservation</title>
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/gallery.js"></script>
    <style>
        .gallerypop {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .gallery-img img {
            height: 200px;
            width: 400px;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>

    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg mx-auto">
        <div>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item"><a class="nav-link" href="client.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservation.php">Make a Reservation</a></li>
                    <li class="nav-item"><a class="nav-link" href="rules.php">Rules & Regulation</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="img/slider/8.jpg" style="background-position: center bottom;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Terms & Conditions</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><strong>1. Booking Confirmation:</strong></h1>
                    <p>Your booking is confirmed once you receive a booking confirmation email from us.</p>
                    <p>We reserve the right to refuse or cancel bookings at our discretion.</p>

                    <h1><strong>2. Non-Refundable Policy:</strong></h1>
                    <p>All bookings made through our online system are non-refundable.</p>
                    <p>We do not offer refunds for any cancellations or no-shows.</p>

                    <h1><strong>3. No-Show Policy:</strong></h1>
                    <p>In the event of a no-show (when the guest fails to arrive at the hotel), we reserve the right to
                        charge the full amount of the booking to the credit card provided during the booking process.
                    </p>

                    <h1><strong>4. Booking Modifications:</strong></h1>
                    <p>Changes to your booking may be subject to availability and additional charges.</p>
                    <p>Contact us as early as possible to discuss any modifications to your booking.</p>

                    <h1><strong>5. Guest Responsibility:</strong></h1>
                    <p>You are responsible for providing accurate information during the booking process.</p>
                    <p>Any additional charges, damages, or fees incurred during your stay are your responsibility.</p>

                    <h1><strong>6. Privacy and Data Protection:</strong></h1>
                    <p>Your personal information is protected in accordance with our Privacy Policy.</p>

                    <h1><strong>7. Changes to Terms and Conditions:</strong></h1>
                    <p>We reserve the right to modify these terms and conditions at any time, and such changes will be
                        effective immediately upon posting on our website.</p>

                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>