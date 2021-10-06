<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Webtexno - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v3.0.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{route('index')}}"><span>Webtexno</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          {{-- <li><a href="#about">Biz haqimizda</a></li> --}}
          <li><a href="#services">Xizmatlar</a></li>
          <li><a href="#team">Jamoa</a></li>
          <li><a href="#pricing">Ta'lim</a></li>
          <li class="drop-down"><a href="#">Maqola</a>
            <ul>
              <li><a href="{{route('article')}}">Maqolalar</a></li>
              <li class="drop-down"><a href="#">Python</a>
                <ul>
                  <li><a href="#">Python haqida</a></li>
                  <li><a href="#">Python freamworks</a></li>
                  <li><a href="#">Django</a></li>
                  <li><a href="#">Django rest api</a></li>
                  <li><a href="#">Flask</a></li>
                  <li><a href="#">Kivy</a></li>
                </ul>
              </li>
              <li><a href="#">IoT</a></li>
              <li><a href="#">SMM</a></li>
              <li><a href="#">Telekommunikatsiya</a></li>
            </ul>
          </li>
          <li><a href="#contact">Bog'lanish</a></li>
        </ul>
      </nav><!-- .nav-menu -->
        <div class="search-bar">
          <div id="custom-search-input">
             <div class="col-md-10 input-group">
                <input type="text" class="form-control input-group" placeholder="Search"/>
                <span class="search-btn">
                  <button class="btn btn-info" type="button">
                    <i class="icofont-search" aria-hidden="true"></i>
                  </button>
                </span>
             </div>
          </div>
        </div>
        <select class="select">
          <option value="uz">O'zb</option>
          <option value="ru">Ru</option>
          <option value="en">En</option>
        </select>
    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Webtexno</strong>.Barcha huquqlar himoyalangan.
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Loyihalashtirilgan <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Uy</a>
            <a href="#about" class="scrollto">Biz haqimizda</a>
            <a href="#">Maxfiylik siyosati</a>
            <a href="#">Foydalanish shartlari</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>