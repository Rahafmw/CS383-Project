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

  <script>
  $(document).ready(function()
  {
    $("#show").click(function(){
    $("form1").show(); 
  });

  });

  $(document).ready(function()
  {
    $('.actions').click(function(){
    $("form1").hide(); 
  });

  });

  </script>
</head>

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
            <h3><span class="text-primary">Aramco</span>, Energy Company</h3>
              <ul>
                <li><strong>Location:</strong> Dhahran, Saudi Arabia</li>
                <li><strong>Overview:</strong> We are one of the world's largest integrated energy and chemicals companies, creating value across the hydrocarbon chain, and delivering societal and economic benefits to people and communities around the globe who rely on the vital energy we supply.</li>
                <div class="row header-social-links align-items-center pt-4">
                <li class="col"><strong>Social media:</strong>
                  <a href="#" class="col linkedin"><i class="bi bi-linkedin"></i></a>
                  <a href="#" class="col twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="col twitter"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="col linkedin"><i class="bi bi-globe2"></i></a>
                </div></li>
              </ul>
            </div>

            <div class="portfolio-info">
              <h3>Training Information</h3>
              <ul>
                <li><strong>Registration Start Date:</strong> November 07, 2022  at 8:00 AM</li>
                <li><strong>Registration End Date:</strong> November 15, 2022  at 4:00 PM </li>
                <li><strong>Important Dates</strong>: The first day of the training for the program starts on: December 25, 2022 & January 16, 2023. </li>
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

                            <b>The Goal:</b>
                            <p>Saudi Aramco provides internship opportunities for a limited number of outstanding Saudi diploma students studying in industrial/technical colleges and the Institute of Public Administration. This program aims to help participants gain practical experience and fulfill graduation requirements from their colleges or institutes. At the end of the program, the participants are evaluated to determine their total marks for the training hours required by the college or institute.</p>

                            <b>Eligibility:</b>
                            <p>Applicants eligible to apply for the program are those required by their universities to undergo practical training prior to graduation. They are considered for the program based on the availability of slots and the following criteria:</p>
                            <p>Applicants must have a minimum cumulative GPA of 2.00 out of 4 for technical majors and 2.50 out of 4 for nontechnical majors or equivalent. Priority is given to candidates with the highest GPAs.</p>
                            <ul>
                                <li>The duration of the training required by the school must be at least 8 weeks.</li>
                                <li>Applicant must not have graduated from his/her university.</li>
                                <li>Applicants must complete the training internship in full.</li>
                                <li>Accepted students must not be enrolled in university classes/modules during their training period.</li>
                            </ul>

                            <b>Required Documents</b>
                            <p>Candidates applying for the program need to provide the following documents:</p>
                            <ul>
                                <li>A copy of the Government ID.</li>
                                <li>A copy of the latest official transcript.</li>
                                <li>A letter from the university that shows the objectives and the length of the internship</li>
                            </ul>
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