<!DOCTYPE php>
<php lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Hotel Online Reservation</title>
        <link rel="shortcut icon" href="img/favicon.png" />
        <link rel="stylesheet" href="css/plugins.css" />
        <link rel="icon" href="img/logo.png" type="image/png">
        <link rel="stylesheet" href="css/style.css" />
        <style>
            .reservations .text a {
                font-size: 15px;
                /* Adjust the font size as needed */
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
        <?php include "nav.php" ?>


        <!-- Header Banner -->
        <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
            data-background="img/slider/1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-90">
                        <h5>Luxury Hotel</h5>
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Amenities and Services  -->
        <section class="rooms-page section-padding" data-scroll-index="1">
            <!-- project content -->

            <div class="row">
                <div class="col animate-box" style="padding-left: 100px;">
                    <div class="col-md-10">
                        <span>
                            <i class="star-rating"></i>
                            <i class="star-rating"></i>
                            <i class="star-rating"></i>
                            <i class="star-rating"></i>
                            <i class="star-rating"></i>
                        </span>
                        <div class="section-subtitle">Amenities and Services</div>
                        <div class="section-title">QUEEN MARICEL INN's FUNCTION HALL</div>
                    </div>
                    <div class="col-md-10">
                        <p class="mb-30">Queen Maricel Inn's Function Hall offers a spacious venue for wedding venues,
                            birthday parties, event place, conference
                            rooms, holiday locations, and corporate event places.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <h6>Function Hall</h6>
                                <ul class="list-unstyled page-list mb-30">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                        <div class="page-list-text">
                                            <p>Sitting capacity of 100-270 guests</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6>Conference Hall</h6>
                                <ul class="list-unstyled page-list mb-30">
                                    <li>
                                        <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                        <div class="page-list-text">
                                            <p>Sitting capacity of 30-40 guests</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-30 animate-box">
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">About Us</div>
                    <div class="section-title">ENJOY A LUXURY EXPERIENCE</div>
                    <p>Queen Maricel Inn! A place where you can find a comfortable and relaxing room with an
                        affordable
                        price and service.</p>


                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p>
                            <a href="tel:0999-345-7528">0999-345-7528 - Globe / TM</a>
                            <br>
                            <a href="tel:0920-417-9974">0920-417-9974 - Smart / TNT</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Services -->
        <section class="facilties section-padding dar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">OUR SERVICES</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                            <span class="flaticon-world"></span>
                            <h5>Pick Up & Drop</h5>
                            <p>Airport transfers made easy. We pick you up and drop you off, ensuring a comfortable
                                journey.
                            </p>
                            <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                            <span class="flaticon-car"></span>
                            <h5>Parking Space</h5>
                            <p>Ample parking space available for your convenience. Park with ease and peace of mind.</p>
                            <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                            <span class="flaticon-bed"></span>
                            <h5>Room Service</h5>
                            <p>Enjoy in-room service at your convenience. We cater to your needs for a comfortable stay.
                            </p>
                            <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                            <span class="flaticon-swimming"></span>
                            <h5>Swimming Pool</h5>
                            <p>Take a dip in our refreshing swimming pool. Relax and unwind in style.</p>
                            <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                            <span class="flaticon-wifi"></span>
                            <h5>Fibre Internet</h5>
                            <p>Stay connected with high-speed Wi-Fi in your space. Enjoy seamless browsing and
                                streaming.
                            </p>
                            <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                            <span class="flaticon-breakfast"></span>
                            <h5>Breakfast</h5>
                            <p>Start your day with a delicious breakfast. Satisfy your taste buds with our morning
                                delights.
                            </p>
                            <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include "footer.php" ?>

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

</php>