<?php
include('conn.php');
if (isset($_POST['btn_inquiry'])) {
  $p_id = mysqli_real_escape_string($con, $_POST['property_id']);
  $full_name = mysqli_real_escape_string($con, $_POST['first_name'] . " " . $_POST['last_name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $nationality = mysqli_real_escape_string($con, $_POST['nationality']);
  $city = mysqli_real_escape_string($con, $_POST['city']); // Waxaan ku daray City
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $req_type = mysqli_real_escape_string($con, $_POST['HADAF_KAAL_package']);
  $message = mysqli_real_escape_string($con, $_POST['special_requests']);

  $sql = "INSERT INTO property_bookings (property_id, full_name, email, nationality, city, phone, request_type, message) 
            VALUES ('$p_id', '$full_name', '$email', '$nationality', '$city', '$phone', '$req_type', '$message')";

  if (mysqli_query($con, $sql)) {
    echo "<script>alert('Waad ku mahadsantahay! Codsigaaga waa la helay.'); window.location.href='index.php';</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - HADAF_ KAAL Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HADAF_ KAAL
  * Template URL: https://bootstrapmade.com/HADAF_ KAAL-bootstrap-travel-website-template/
  * Updated: Jul 01 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top shadow-sm bg-white">
    <div
      class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename fw-bold text-uppercase m-0" style="letter-spacing: 1.5px; font-size: 24px;">
          <span style="color: #0d6efd;">✈️ HADAF</span><span style="color: #333;">-KAAL</span>
        </h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Travel & Visa</span> <i
                    class="bi bi-chevron-right toggle-dropdown"></i></a>
                <ul>
                  <li><a href="visa.php">Visa Services</a></li>
                  <li><a href="tourism.php">Tourism Packages</a></li>
                  <li><a href="medical.php">Medical Travel</a></li>
                  <li><a href="education.php">Scholarships</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Logistics & Cargo</span> <i
                    class="bi bi-chevron-right toggle-dropdown"></i></a>
                <ul>
                  <li><a href="cargo.php">International Cargo</a></li>
                  <li><a href="cargo.php#local">Local Delivery</a></li>
                  <li><a href="taxi.php">Airport Transfers</a></li>
                </ul>
              </li>
              <li><a href="real-estate.php">Real Estate Solutions</a></li>
            </ul>
          </li>

          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-actions d-flex align-items-center ms-lg-4">


        <div class="auth-buttons d-flex align-items-center gap-2">
          <a href="login.php"
            class="btn btn-link text-decoration-none text-dark fw-medium d-none d-sm-block px-3">Login</a>
          <a href="register.php" class="btn btn-primary rounded-pill px-4 shadow-sm fw-bold">Register</a>
        </div>

      </div>

    </div>
  </header>

  <main class="main">

    <section id="hero" class="hero section position-relative overflow-hidden"
      style="background-color: #002366; min-height: 100vh;">
      <div class="hero-background position-absolute top-0 start-0 w-100 h-100">
        <video autoplay muted loop playsinline class="w-100 h-100 object-fit-cover opacity-60">
          <source src="assets/img/travel/video-2.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"
          style="background: linear-gradient(135deg, rgba(0, 35, 102, 0.9) 30%, rgba(212, 175, 55, 0.2) 100%);"></div>
      </div>

      <div class="container position-relative z-index-1">
        <div class="row min-vh-100 align-items-center">
          <div class="col-lg-8" data-aos="fade-up">
            <div class="hero-text">
              <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase fw-bold shadow-sm"
                style="background-color: #D4AF37; color: #002366; letter-spacing: 2px; font-size: 13px;">
                Global Logistics & Travel Excellence
              </span>
              <h1 class="display-3 fw-bold mb-4 text-white">Your Gateway to <span style="color: #FFD700;">Global</span>
                Success</h1>
              <p class="fs-5 mb-5 text-white opacity-90 border-start border-4 ps-4"
                style="border-color: #FFD700 !important; max-width: 650px; line-height: 1.6;">
                HADAF-KAAL connects you to the world with expert visa processing, seamless cargo logistics, and premium
                real estate solutions.
              </p>
              <div class="hero-buttons d-flex flex-wrap gap-3">
                <a href="#services" class="btn btn-lg px-5 rounded-pill fw-bold transition shadow-lg"
                  style="background-color: #FFD700; color: #002366; border: none;">
                  EXPLORE SERVICES
                </a>
                <a href="https://wa.me/252906299299"
                  class="btn btn-outline-light btn-lg px-4 rounded-pill border-2 transition fw-bold">
                  GET CONSULTATION
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="why-us" class="section py-5" style="background-color: #f0f4f8;">
      <div class="container py-5">
        <div class="row gy-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="pe-lg-5">
              <h6 class="fw-bold text-uppercase mb-3" style="color: #002366; letter-spacing: 2px;">Who We Are</h6>
              <h2 class="display-5 fw-bold mb-4 text-dark">15+ Years of Reliability</h2>
              <p class="text-muted mb-4 lead">HADAF-KAAL is a leading provider of comprehensive travel and customer
                services. We specialize in making global movement easier for everyone.</p>

              <div class="row g-4 mb-5">
                <div class="col-sm-4 text-center border-end border-2">
                  <h3 class="fw-bold mb-0" style="color: #002366;">1200+</h3>
                  <small class="text-uppercase fw-bold text-muted">Customers</small>
                </div>
                <div class="col-sm-4 text-center border-end border-2">
                  <h3 class="fw-bold mb-0" style="color: #002366;">7</h3>
                  <small class="text-uppercase fw-bold text-muted">Continents</small>
                </div>
                <div class="col-sm-4 text-center">
                  <h3 class="fw-bold mb-0" style="color: #002366;">15+</h3>
                  <small class="text-uppercase fw-bold text-muted">Years</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="position-relative p-3 rounded-4 shadow-lg" style="background: white;">
              <img src="assets/img/travel/showcase-8.webp" alt="Professional Travel" class="img-fluid rounded-3 w-100">
              <div class="position-absolute top-0 start-0 translate-middle badge rounded-circle p-4 shadow-lg"
                style="background-color: #FFD700; color: #002366;">
                <i class="bi bi-patch-check-fill fs-3"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="section py-5" style="background-color: #ffffff;">
      <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
          <h2 class="display-6 fw-bold" style="color: #002366;">Our Specialized Expertise</h2>
          <div class="mx-auto" style="height: 4px; width: 60px; background-color: #FFD700; border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="card h-100 border-0 p-4 text-center shadow transition-card"
              style="background-color: #f8fbff; border-top: 5px solid #002366 !important;">
              <div class="icon-box mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm"
                style="width: 80px; height: 80px; background-color: #002366; border-radius: 20px;">
                <i class="bi bi-airplane-engines fs-2 text-white"></i>
              </div>
              <h4 class="fw-bold" style="color: #002366;">Visa Experts</h4>
              <p class="text-muted">Fast and reliable visa processing for tourism, education, and medical travel
                globally.</p>
              <a href="visa.php" class="stretched-link"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="card h-100 border-0 p-4 text-center shadow transition-card"
              style="background-color: #f8fbff; border-top: 5px solid #FFD700 !important;">
              <div class="icon-box mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm"
                style="width: 80px; height: 80px; background-color: #FFD700; border-radius: 20px;">
                <i class="bi bi-truck fs-2" style="color: #002366;"></i>
              </div>
              <h4 class="fw-bold" style="color: #002366;">Smart Logistics</h4>
              <p class="text-muted">International cargo shipping by air and sea with secure real-time tracking.</p>
              <a href="cargo.php" class="stretched-link"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="card h-100 border-0 p-4 text-center shadow transition-card"
              style="background-color: #f8fbff; border-top: 5px solid #002366 !important;">
              <div class="icon-box mx-auto mb-4 d-flex align-items-center justify-content-center shadow-sm"
                style="width: 80px; height: 80px; background-color: #002366; border-radius: 20px;">
                <i class="bi bi-houses fs-2 text-white"></i>
              </div>
              <h4 class="fw-bold" style="color: #002366;">Real Estate</h4>
              <p class="text-muted">Professional consulting for buying and renting premium properties abroad.</p>
              <a href="real-estate.php" class="stretched-link"></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5" style="background: linear-gradient(90deg, #002366 0%, #0044cc 100%);">
      <div class="container py-3">
        <div class="row align-items-center text-center text-lg-start">
          <div class="col-lg-9">
            <h2 class="fw-bold mb-2 text-white">Ready to Start Your Global Journey?</h2>
            <p class="mb-0 text-white-50 fs-5">Get a professional consultation with our experts today.</p>
          </div>
          <div class="col-lg-3 text-lg-end mt-4 mt-lg-0">
            <a href="tel:+252906299299" class="btn btn-lg px-5 rounded-pill fw-bold shadow-sm transition"
              style="background-color: #FFD700; color: #002366; border: none;">
              CALL US NOW
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer id="footer" class="footer position-relative dark-background shadow-lg pt-5">



    <div class="container footer-top py-5">
      <div class="row gy-4">

        <div class="col-lg-4 col-md-12 footer-about">
          <a href="index.php" class="logo d-flex align-items-center mb-3 text-decoration-none">
            <span class="sitename fs-2 fw-bold text-white">HADAF<span class="text-primary">-</span>KAAL</span>
          </a>
          <p class="opacity-75">A global leader in travel consultancy, logistics, and premium real estate solutions
            across East and North Africa.</p>

          <div class="footer-contact mt-4">
            <h6 class="text-uppercase fw-bold text-primary mb-3">Global Support</h6>
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-envelope-fill me-3 text-primary"></i>
              <div>
                <small class="d-block text-muted">General Inquiries</small>
                <a href="mailto:info@hadafkaal.com"
                  class="text-white text-decoration-none fw-bold">info@hadafkaal.com</a>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <i class="bi bi-headset me-3 text-primary"></i>
              <div>
                <small class="d-block text-muted">24/7 Support Center</small>
                <a href="contact.php" class="text-white text-decoration-none fw-bold">Open a Ticket</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h5 class="fw-bold mb-4">Travel Hub</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="visa.php" class="text-decoration-none opacity-75 hover-link">Egypt Visa
                Services</a></li>
            <li class="mb-2"><a href="visa.php" class="text-decoration-none opacity-75 hover-link">Kenya e-Visa
                Portal</a></li>
            <li class="mb-2"><a href="medical.php" class="text-decoration-none opacity-75 hover-link">Medical
                Coordination</a></li>
            <li class="mb-2"><a href="tourism.php" class="text-decoration-none opacity-75 hover-link">Global Tourism</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h5 class="fw-bold mb-4">Real Estate</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="real-estate.php" class="text-decoration-none opacity-75 hover-link">Kenya
                Portfolio</a></li>
            <li class="mb-2"><a href="real-estate.php" class="text-decoration-none opacity-75 hover-link">Somalia
                Listings</a></li>
            <li class="mb-2"><a href="real-estate.php" class="text-decoration-none opacity-75 hover-link">Egypt
                Investments</a></li>
            <li class="mb-2"><a href="contact.php" class="text-decoration-none opacity-75 hover-link">Legal Advice</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h5 class="fw-bold mb-4">Follow Our Growth</h5>
          <div class="social-links d-flex gap-3 mb-4">
            <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="social-btn"><i class="bi bi-twitter-x"></i></a>
            <a href="https://wa.me/252906299299" class="social-btn"><i class="bi bi-whatsapp"></i></a>
          </div>

          <h6 class="text-uppercase fw-bold text-primary mb-3">Operational Hubs</h6>
          <div class="d-flex gap-2 mb-2">
            <span class="badge bg-dark border border-secondary px-3 py-2">Mogadishu</span>
            <span class="badge bg-dark border border-secondary px-3 py-2">Nairobi</span>
            <span class="badge bg-dark border border-secondary px-3 py-2">Cairo</span>
          </div>

          <div class="payment-methods mt-4 fs-3 opacity-50 text-white">
            <i class="bi bi-credit-card-2-front me-2" title="Visa/Mastercard"></i>
            <i class="bi bi-paypal me-2" title="PayPal"></i>
            <i class="bi bi-bank" title="Swift Transfer"></i>
          </div>
        </div>

      </div>
    </div>

    <div class="container border-top border-secondary py-4 mt-4">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start">
          <p class="mb-0 small opacity-50">&copy; <?php echo date('Y'); ?> <strong>Hadaf-Kaal Travel &
              Services</strong>. Corporate Office.</p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="footer-legal small opacity-50">
            <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
            <a href="#" class="text-white text-decoration-none">Terms of Use</a>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>