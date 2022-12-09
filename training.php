<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Training</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/stylle.css" rel="stylesheet">
  <style >
  img {
    height: 320px !important;
  }
  </style>


<body>

  <!-- ======= Header ======= -->
  <?php include("header.php"); ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="home.php">Home</a></li>
          <li>Taining page</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
  
    <!-- ======= Training Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Avilible training programs </h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Company</li>
              <li data-filter=".filter-card">University</li>
              <li data-filter=".filter-web">Ministry</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/team/Aramco3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Saudi Arabian Oil Company </h4>
                <p>Company</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/team/Aramco3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Saudi Aramco"><i class="bx bx-plus"></i></a>
                <a href="training-details.php" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/team/stc2.png" class="img-tr img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Saudi Telecommunication Company (STC)</h4>
                <p>Company</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/team/stc2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/team/SD1.png" height="200" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDAIA</h4>
                <p>Company</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/team/SD1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/min2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Digital Government Authority</h4>
                <p>Ministry</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/min2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Kaust2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>King Abdullah University of Science and Technology (Kaust)</h4>
                <p>University</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/kaust2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/uni1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>King Abdulaziz University (KAU)</h4>
                <p>University</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/uni1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/com3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>KPMG</h4>
                <p>Company</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/com3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/min3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SAUDI PAYMENTS </h4>
                <p>Company</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/min3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/com4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SABIC</h4>
                <p>Company</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/com4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
      </div>
    </section>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include("footer.html"); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>