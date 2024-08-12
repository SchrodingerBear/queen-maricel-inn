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
    <?php include "nav.php" ?>

    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="img/slider/3.jpg" style="background-image: url(&quot;img/slider/3.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Images &amp; Videos</h5>
                    <h1>Our Gallery</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Images</div>
                    <div class="section-title">Hotel Gallery</div>
                </div>
            </div>
            <div class="gallerypop"></div>
    </section>

    <script>
        var paths = [
            "img/gallery/1.jpg",
            "img/gallery/2.jpg",
            "img/gallery/3.jpg",
            "img/gallery/4.jpg",
            "img/gallery/5.jpg",
            "img/gallery/6.jpg",
            "img/gallery/7.jpg",
            "img/gallery/8.jpg",
            "img/gallery/9.jpg",
            "img/gallery/10.jpg",
            "img/gallery/11.jpg",
            "img/gallery/12.jpg",
            "img/gallery/13.jpg",
            "img/gallery/14.jpg",
            "img/gallery/15.jpg",
            "img/gallery/16.jpg",
            "img/gallery/17.jpg",
        ];

        // Get the gallery section element
        var gallerySection = document.querySelector('.gallerypop');

        // Loop through the paths array and create gallery items for each image
        for (var i = 0; i < paths.length; i++) {
            var imagePath = paths[i];

            // Create a new gallery item div
            var galleryItem = document.createElement('div');
            galleryItem.className = 'col-md-20 gallery-item';

            // Create a link element with the image
            var galleryLink = document.createElement('a');
            galleryLink.href = imagePath;
            galleryLink.title = '';
            galleryLink.className = 'img-zoom';

            // Create a div for the gallery box
            var galleryBox = document.createElement('div');
            galleryBox.className = 'gallery-box';

            // Create a div for the gallery image
            var galleryImageDiv = document.createElement('div');
            galleryImageDiv.className = 'gallery-img';

            // Create an img element and set its src attribute
            var galleryImage = document.createElement('img');
            galleryImage.src = imagePath;
            galleryImage.className = 'img-fluid mx-auto d-block';
            galleryImage.alt = 'work-img';

            // Append the elements to the DOM in the correct hierarchy
            galleryImageDiv.appendChild(galleryImage);
            galleryBox.appendChild(galleryImageDiv);
            galleryLink.appendChild(galleryBox);
            galleryItem.appendChild(galleryLink);
            gallerySection.appendChild(galleryItem);
        }
    </script>

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