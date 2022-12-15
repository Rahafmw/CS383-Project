<?php
session_start();
   if(!isset($_SESSION['userid'])) // If session is not set then redirect to Login Page
   {
     header("Location:login.html");  
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Training Details</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/stylle.css" rel="stylesheet">

  </script>
</head>

<body>
  <!-- ======= Header ======= -->
  <?php include("header.php"); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="home.php">Home</a></li>
          <li>Training</li>
        </ol>
        <h2>Training Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/team/Aramco3.jpeg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/aramco.jpg" alt="">
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
            <h3><span class="text-primary"><?php echo $rows['org_name']; ?></span>, <?php echo $rows['org_subtype']; ?></h3>
              <ul>
                <li><strong>Location:</strong> <?php echo $rows['org_place'];?> </li>
                <li><strong>Overview:</strong> <?php echo $rows['org_description']; ?></li>
                <div class="row header-social-links align-items-center pt-4">
                <li class="col"><strong>Social media:</strong>
                  <a href="<?php echo $rows['org_linkedin']; ?>" class="col linkedin"><i class="bi bi-linkedin"></i></a>
                  <a href="<?php echo $rows['org_twitter']; ?>" class="col twitter"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo $rows['org_facebook']; ?>" class="col twitter"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo $rows['org_website']; ?>" class="col linkedin"><i class="bi bi-globe2"></i></a>
                </div></li>
              </ul>
            </div>


            <div class="portfolio-info">
              <h3>Training Information</h3>
              <ul>
                <li><strong>Registration Start Date:</strong> <?php echo $result['post_sdate'] ?></li>
                <li><strong>Registration End Date:</strong> <?php echo $result['post_edate'] ?> </li>
                <li><strong>Important Dates:</strong> <?php echo $result['post_impdate'] ?> </li>
              </ul>
            </div>
          </div>

          <!------Training program details-------->
          <div class="p-4 container rounded bg-white">
                    <div class="row portfolio-info">

                    <div class="col">
                      <div class="row">      
                            <div class="col-12 mt-4 px-5">
                            <h3>University Internship Program Registration</h3>
                            </div>

                        <div class="p-5">
                        <?php echo $result['post_info'] ?>
                        </div>

                        <div class="mt-2 pb-2 col-lg-12 col-md-12 text-center" id="show">
                              <a href="Apply.php" class="team-btn align-middle">Apply</a>
                        </div>
                    </div>
                </div>

        </div>
      </div>

    </section><!-- End Portfolio Details Section -->



    <!----- code for pop up---------->
  <form id="form1" style="display: none;">
      <div class='card pop-up'>
          <div class='header'>
            Do you like blue?
         </div>
         <div class='content'>
          
         </div>
         <div class='actions'>
         <a class='nah' href='#'>Nah</a>
         <a href='#'></a>
         </div>
      </div>
    </form>
    <!------ end pop up ------------->

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