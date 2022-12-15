<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
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
  <script src="assets/js/showhide.js"></script>

<style>
  .reviewbtn[type=submit] {
  background: #009cea;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.reviewbtn[type=submit]:hover {
  background: #1eb4ff;
}

.revieForm{
  display: none;
}

.review-form {
  width: 100%;
  padding: 30px;
  background: #fff;
  border: 2px solid #e9ecee;
  border-radius: 4px;
}

.review-form {
  padding-bottom: 8px;
}

.display_beside{
  float:left;
  width: 400px !important;

}

</style>
</head>

<body>

<?php include("header.php"); ?>

  <!-- ======= Hero Section (At the top of the page) ======= -->
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>COOP FINDER</h1>
            <h2>Where you got to know more about training program</h2>
            <?php
            if(!isset($_SESSION['userid']))  //show this in case there is no session_id --> no user log-in
            {               
            ?>
              <a href="login.html" class="btn-get-started scrollto">Sign in</a>
              <a href="signup.html" class="btn-get-started scrollto">Sign up</a>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="assets/img/hero2-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section> <!-- End Hero -->

  <!-- ===================== About Us ===================== -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 class="text-uppercase">who we are</h2>
          <p>COOP Finder is a platform that connects students who are about to graduate with companies that offer training programs in order to create a practical experience for the student and to develop the facility's training process.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-2 mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Communication</a></h4>
              <p class="description">Coop Finder enable Students interact with media networks and form positive working relationships.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Invest</a></h4>
              <p class="description">Coop Finder aim to Invest youth wealth with their abilities.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Enhance</a></h4>
              <p class="description">Enhancing training opportunities for students.</p>
            </div>
          </div>
        </div>

      </div>
    </section>

  <main id="main">

    <!-- =====================   chat Section ========================= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>CO-Finder Users live chat!</h3>
            <p>start the live chat now.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="ChatApp/index.php">Start the live chat!</a> <!-- not workin yet -->
          </div>
        </div>

      </div>
    </section>

    <!-- =====================  Training section ===================== -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 class=" text-uppercase">Training Program</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in">
              <div class="pic"><img src="assets/img/team/SD1.png" height="150" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>SDAIA</h4>
                <span>Saudi Authority for Data and Artificial Intelligence </span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic">
                <img src="assets/img/team/stc2.png" height="200" class="img-fluid" alt=""/>
              </div>
              <div class="member-info">
                <h4>STC</h4>
                <span>Saudi Telecommunication Company</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-2 col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/Aramco3.jpeg" height="200" class=" test img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Saudi Aramco</h4>
                <span>Saudi Arabian Oil Company</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>>
 
        </div>

        <div class="row">
         <div class="text-center">
            <form action="training.php">
              <button type="submit" class="reviewbtn">See More</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- ====================  What they say about us section ============== -->

    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2 class="text-uppercase">What people say about us</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
           <div class="swiper-wrapper">         
             <div class="testimonial-item ">
          <?php 
            include("dbconnection.php");
            $query = "SELECT * FROM review";
            $result = mysqli_query($conn , $query);
            if(!$result || mysqli_num_rows($result) >  0)
             {
                if (is_iterable($result))
                  {
                    foreach($result as $row) 
                    {
                    ?>
                    <div class="display_beside col-lg-4 mt-5 ml-2">
                        <p>
                           <i class="bx bxs-quote-alt-left quote-icon-left "></i>
                           <?= $row['reviewer_msg']; ?> 
                           <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <?php 
                        if ($row['reviewer_img']=="F")
                         { ?>
                        <img src="assets/img/testimonials/1.png" class="testimonial-img" alt="">
                         <?php
                         }
                         else {
                          ?>
                        <img src="assets/img/testimonials/man1.png" class="testimonial-img" alt="">
                        <?php
                         }
                         ?>
                        <h3><?= $row['reviewer_name']; ?></h3>
                        <h4><?= $row['reviewer_job']; ?></h4>
                    </div>
                    <?php
                    }
                  }
              }
            ?>
        </div>
        </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <div class="row">
      <div class="text-center">
        <button onclick="w3_show()" type="submit" class="reviewbtn">Add a Review</button>
      </div>
    </div><br><br>

   <!-- ============== review form section ============== -->
    <section id="contact" class="contact section-bg">
      <div class="container revieForm" id="demo">
        <div class="section-title" data-aos="fade-up">
          <h2 class="text-uppercase">Review Form</h2>
        </div>

        <div class="row">
        <div class="col-lg mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
        <form method="post" action="review_action.php" class="review-form">

            <div class="row">
                <div class="form-group col-md-6 col-lg-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>

              <div class="form-group mt-3 mt-md-0 col-md-6 col-lg-6">
                <label for="name">Your Job</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div> 
            </div>

              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>

              <div class="form-group mt-3 col-lg-6">
              <p> Gender </p>
              <select name="taskOption"> 
                   <option value="1">Male</option>
                   <option value="2">Female</option>
              </select>
              </div> 

            <div class="mt-3 row">
              <div class="text-center ">
                <button name= "submit" type="submit" class="reviewbtn">Add</button>
              </div>
            </div>

          </form>
          </div>

        </div>

        </div>
       </section><!-- End Contact Section -->

</main>
 <!-- ============== footer ============== -->

<?php include("footer.html"); ?>

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