<?php
require_once '../admin/connect.php';

$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
?>

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
    <?php include "nav.php" ?>


    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/2.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <span>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                    <i class="star-rating"></i>
                                </span>
                                <h4>Luxury Hotel & Best Resort</h4>
                                <h1>Enjoy a Luxury Experience</h1>
                                <a href="reservation.php" data-scroll-nav="1">
                                    <div class="butn-light mt-30 mb-30"> <span>Rooms &
                                            Suites</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="2" data-background="img/slider/3.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <span>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                            </span>
                            <h4>Unique Place to Relax & Enjoy</h4>
                            <h1>The Perfect Base For You</h1>
                            <div class="butn-light mt-30 mb-30"><a href="reservation.php"
                                    data-scroll-nav="1"><span>Rooms &
                                        Suites</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/slider/1.jpg">
            <div class="v-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <span>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                            </span>
                            <h4>The Ultimate Luxury Experience</h4>
                            <h1>Enjoy The Best Moments of Life</h1>
                            <div class="butn-light mt-30 mb-30"> <a href="reservation.php"
                                    data-scroll-nav="1"><span>Rooms &
                                        Suites</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- slider reservation -->
        <div class="reservation">
            <a href="tel:00000000">
                <div class="icon d-flex justify-content-center align-items-center">
                    <i class="flaticon-call"></i>
                </div>
                <div class="call"><span>000-000-0000</span> <br>Reservation</div>
            </a>
        </div>
    </header>

    <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Hotel Online Reservation</div>
                    <div class="section-title">Rooms &amp; Suites</div>
                </div>
            </div>
            <?php
            $count = 0; // Initialize a count variable
            
            while ($fetch = $query->fetch_array()) {
                $room_type = $fetch['room_type'];
                $price = $fetch['price'];
                $photo = $fetch['photo'];
                $room_id = $fetch['room_id'];

                // Open a new row after every 3 items
                if ($count % 3 == 0) {
                    echo '<div class="row">';
                }
                ?>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden img-container">
                            <img src="../client/img/rooms/<?php echo $photo; ?>" alt="<?php echo $room_type; ?>"
                                class="img-responsive">
                        </div>
                        <span class="category"><a href="form.php?room_id=<?php echo $room_id; ?>">Book</a></span>
                        <div class="con">
                            <h6><a href="reservation.php">
                                    <?php echo "Price: Php. " . $price . ".00"; ?>
                                </a></h6>
                            <h5><a href="reservation.php">
                                    <?php echo $room_type; ?>
                                </a> </h5>
                            <!-- ... (existing HTML code) ... -->
                        </div>
                    </div>
                </div>
                <?php
                $count++;

                // Close the row after every 3 items
                if ($count % 3 == 0) {
                    echo '</div>';
                }
            }

            // Close the row if there are any remaining items
            if ($count % 3 != 0) {
                echo '</div>';
            }
            ?>
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

</html>