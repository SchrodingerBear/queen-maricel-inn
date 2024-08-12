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
    <nav class="navbar navbar-expand">
        <div>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservation.php">Make a Reservation</a></li>
                    <li class="nav-item"><a class="nav-link" href="rules.php">Rules & Regulation</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="img/slider/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Book with Us!</h5>
                    <h1>Reservation</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider -->

    <?php
    require_once '../admin/connect.php';
    $query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
    $fetch = $query->fetch_array();
    ?>

    <div class="col">
        <section style="margin-top: 50px;">
            <div class="rooms2 mb-90 left animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                <figure><img style="margin-left: 50px;" src="../client/img/rooms/<?php echo $fetch['photo'] ?>" alt=""
                        class="img-fluid"></figure>

                <div class="caption" style="padding-right: 50px; margin-top: 50px">
                    <form action="" class="form1">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Price:</h5>
                                <div class="col-md-16 form-group">
                                    <input name="name" type="text"
                                        placeholder="<?php echo "Php. " . $fetch['price'] . ".00"; ?>" disabled>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="input1_wrapper">
                                    <h5>First Name</h5>
                                    <div class="col-md-16 form-group">
                                        <input name="firstname" type="text" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="input1_wrapper">
                                    <h5>Middle Name</h5>
                                    <div class="col-md-16 form-group">
                                        <input name="middlename" type="text" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input1_wrapper">
                                    <h5>Last Name</h5>
                                    <div class="col-md-16 form-group">
                                        <input name="lastname" type="text" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input1_wrapper">
                                    <h5>Address</h5>
                                    <div class="col-md-16 form-group">
                                        <input name="address" type="text" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input1_wrapper">
                                    <h5>Contact Number</h5>
                                    <div class="col-md-16 form-group">
                                        <input name="contactno" type="text" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Check in</label>
                                <input type="date" class="form-control" name="date" required="required" />
                            </div>

                            <div class="form-group">
                                <button class="btn-form1-submit mt-15" name="add_guest">Submit</button>
                            </div>

                            <?php require_once 'add_query_reserve.php' ?>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

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