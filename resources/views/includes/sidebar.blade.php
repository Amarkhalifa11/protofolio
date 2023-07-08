
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>amar khalifa || mooooooor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('frontend/assets/img/1.jpg') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="{{ route('home') }}">Amar Khalifa</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/Amar_khalifa_11" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/amar.ebrahim.127" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/amar.khalifa_11/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/Amarkhalifa11" class="google-plus"><i class="bx bxl-github"></i></a>
          <a href="https://www.linkedin.com/in/amarkhalifa11/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{ route('home') }}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{ route('frontend.about') }}" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{ route('frontend.skills') }}" class="nav-link scrollto active"><i class="bx bx-server"></i> <span>skills</span></a></li>
          <li><a href="{{ route('frontend.resume') }}" class="nav-link scrollto active"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="{{ route('frontend.portfolio') }}" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="{{ route('frontend.Services') }}" class="nav-link scrollto active"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="{{ route('frontend.contact') }}" class="nav-link scrollto active"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="{{ route('login') }}" class="nav-link scrollto active"><i class="bx bx-server "></i> <span>login</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->