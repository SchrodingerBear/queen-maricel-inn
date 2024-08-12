<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Hotel Online Reservation</title>
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/gallery.js"></script>
    <script src="js/rates.js"></script>

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
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Navbar -->
    <?php include "nav.php" ?>


    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="img/slider/4.jpg" style="background-image: url(&quot;img/slider/4.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Relax &amp; Enjoy</h5>
                    <h1>Reservation</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php
                    require_once '../admin/connect.php';
                    $design = "left";

                    $query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());

                    while ($fetch = $query->fetch_array()) {
                        $room_type = $fetch['room_type'];
                        $price = $fetch['price'];
                        $photo = $fetch['photo'];
                        $room_id = $fetch['room_id'];
                        $availableroom = $fetch['available'];

                        $css_class = ($design == "left") ? "rooms2 mb-90 left" : "rooms2 mb-90";

                        echo '<div class="' . $css_class . ' animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                        <figure><img src="../admin/images/' . $photo . '" alt="' . $room_type . '" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>' . "Price: Php. " . $price . ".00" . '</h3>
                            <h4>' . $room_type . '</h4>
                            <hr class="border-2">
                            <div class="info-wrapper">';

                        if ($availableroom > 0) {
                            echo '<a href="room-details.html" class="link-btn" tabindex="0">Available Rooms: ' . $availableroom . '  </a>';
                            echo '<div class="butn-dark"> 
                            <a href="#" class="book-now-btn" data-room-id="' . $room_id . '">
                                <span>Book Now</span>
                            </a> 
                          </div>';
                        } else {
                            echo 'No available rooms';
                        }

                        echo '</div>
                        </div>
                    </div>';

                        $design = ($design == "left") ? "right" : "left";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Structure -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Room Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe id="bookingIframe" src="" width="100%" height="400px" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.book-now-btn').on('click', function (event) {
                event.preventDefault(); // Prevent the default anchor behavior

                var roomId = $(this).data('room-id');

                var iframeUrl = "form.php?room_id=" + roomId;

                $('#bookingIframe').attr('src', iframeUrl);

                $('#bookingModal').modal('show');
            });
        });

        $(document).ready(function () {
            $('#bookingModal .btn-close').click(function () {
                $('#bookingModal').modal('hide');
            });
        });

    </script>




    <section class="facilties section-padding">
        <div class="section-title text-center">ROOM RATES</div>
        <div class="container">
            <div class="row">
                <div id="pricing-container" class="pricing-container">
                    <!-- Pricing cards will be dynamically added here -->
                </div>
            </div>

        </div>
    </section>

    <?php include "footer.php" ?>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>