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

        h1 {
            font-family: 'Barlow', sans-serif;
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


    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="img/slider/7.png" style="background-image: url(&quot;img/slider/7.png&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Convinence</h5>
                    <h1>Rules & Regulations</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><strong>1. Tariff</strong></h1>
                    <p>The tariff is for the room only and is exclusive of any government taxes applicable. Meals and
                        other
                        services are available at an extra cost. To know your room tariff, please contact the Duty
                        Manager;
                        guest registration forms must be signed on arrivals.</p>

                    <h1><strong>2. Settlement of Bills</strong></h1>
                    <p>Bills must be settled on presentation; personal cheques are not accepted.</p>

                    <h1><strong>3. Company's Lien on Guest's Luggage and Belongings</strong></h1>
                    <p>In the case of default in payment of dues by a guest, the management shall have the lien on their
                        luggage and belongings, and be entitled to detain the same and to sell or auction such property
                        at
                        any time without reference to the guest. The net sale proceeds will be appropriate towards the
                        amount due by the guest without prejudice to the management's rights to adopt such further
                        recovery
                        proceedings as may be required.</p>

                    <h1><strong>4. Check-in</strong></h1>
                    <p>Please present your ID card, Passport, or Temporary Residence Card upon Check-in. By law,
                        visitors
                        must present personal documents for hotel records. These documents will be returned upon
                        departure.
                    </p>

                    <h1><strong>5. Departure</strong></h1>
                    <p>Check-out time is (mention your checkout time here); please inform the reception if you wish to
                        retain your room beyond this time. An extension will be given depending on availability. If the
                        room
                        is available, normal tariff will be charged. On failure of the guest to vacate the room on
                        expiry of
                        the period, the management shall have the right to remove the guest and their belongings from
                        the
                        room occupied by the Guest.</p>

                    <h1><strong>6. Luggage Storage</strong></h1>
                    <p>Subject to the availability of storage space, the guest can store luggage in the luggage room, at
                        the
                        guest's sole risk as to loss or damage from any cause. Luggage may not be stored for a period of
                        over 30 days.</p>

                    <h1><strong>7. Pets</strong></h1>
                    <p>Mention your policy for Pets (allowed or not allowed). (Allow us to make separate arrangements.)
                    </p>

                    <h1><strong>8. Hazardous Goods</strong></h1>
                    <p>Bringing goods and/or storing raw or exposed cinema films, or any other article of a combustible
                        or
                        hazardous nature, and/or prohibited goods and/or goods of objectionable nature is prohibited.
                    </p>

                    <h1><strong>9. Damage to Property</strong></h1>
                    <p>The guest will be held responsible for any loss or damage to the hotel property caused by
                        themselves,
                        their guests, or any person for whom they are responsible.</p>

                    <h1><strong>10. Management's Rights</strong></h1>
                    <p>It is agreed that the guest will conduct themselves in a respectable manner and will not cause
                        any
                        nuisance or annoyance within the hotel premises.</p>

                    <h1><strong>11. Relation between Management and Guest</strong></h1>
                    <p>Nothing herein above shall continue or be deemed to constitute, or create any tenancy or
                        sub-tenancy,
                        or any other right to interact in the hotel premises or any part or portion thereof, in favor of
                        any
                        Guest or resident or visitor, and the Management shall always be deemed to be in full and
                        absolute
                        possession of the whole of the hotel premises.</p>

                    <h1><strong>12. Government Rules and Regulations and Application of Laws</strong></h1>
                    <p>Guests are requested to observe, abide by, conform to, and be bound by all applicable acts and
                        laws
                        and Government rules and regulations in force from time to time.</p>
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

</html>