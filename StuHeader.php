<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Header ( menue )</title>
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
<script src="assets/js/main.js"></script>

</head>
<body>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center"> <!-- d flix like top margin -->
    <div class="container d-flex align-items-center">
    <?php
     if(isset($_SESSION['userid']))
      {
        if (($_SESSION['type_of_user']) == "std")
      {
      ?>
      
      <div class="logo me-auto">
        <h1><a href="home.html"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
         <li><a class="nav-link scrollto " href="training.php">Training</a></li>
        <li><a class="nav-link scrollto" href="stdDashboard.php">Dashboard</a></li>
        <li class="dropdown">
          <a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a class="nav-link scrollto" href="home.php"> Who we are? </a></li>
              <li><a class="nav-link scrollto" href="home.php"> what they say about us?</a></li>
              <li><a class="nav-link scrollto" href="home.php">Reach to us!</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="logout.php"> Log Out </a></li> 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
  <?php
  }
  else if(($_SESSION['type_of_user']) == "org")
  {
  ?>
      <div class="logo me-auto">
        <h1><a href="home.html"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
          <li><a class="nav-link scrollto " href="training.php">Training</a></li>
          <li><a class="nav-link scrollto" href="Org_Dashboard/Org_Dashboard.php">Dashboard</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="home.php"> Who we are? </a></li>
              <li><a class="nav-link scrollto" href="home.php"> what they say about us?</a></li>
              <li><a class="nav-link scrollto" href="home.php">Reach to us!</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="logout.php"> Log Out </a></li> 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

  <?php
  }
}
else
{
?>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="home.php">Home</a></li>    
            <li><a class="nav-link scrollto " href="training.php">Training</a></li>
          <li><a class="nav-link scrollto" href="stdDashboard.php">Dashboard</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="home.php"> Who we are? </a></li>
              <li><a class="nav-link scrollto" href="home.php"> what they say about us?</a></li>
              <li><a class="nav-link scrollto" href="home.php">Reach to us!</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
<?php
}
?>
</div>
</header> <!-- End Header -->
</body>
</html>

