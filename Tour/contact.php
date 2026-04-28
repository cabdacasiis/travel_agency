<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - HADAF_ KAAL Bootstrap Template</title>
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
  <style>
    /* Weelka guud ee icon-ka iyo select-ka */
    .input-with-icon {
      position: relative;
      display: flex;
      align-items: center;
    }

    /* Icon-ka meesha lagu hagaajinayo */
    .select-icon {
      position: absolute;
      left: 15px;
      /* Masaafada u dhaxaysa geeska iyo icon-ka */
      z-index: 5;
      color: #0d6efd;
      /* Midabka buluugga ah */
      font-size: 1.1rem;
      pointer-events: none;
      /* Inaan icon-ku hor istaagin gujinta select-ka */
    }

    /* Qurxinta Select-ka */
    .custom-select {
      padding-left: 45px !important;
      /* Tani waxay qoraalka ka fogaynaysaa icon-ka (XALKA) */
      height: 55px !important;
      border-radius: 12px !important;
      border: 1px solid #e0e0e0 !important;
      background-color: #f9f9f9 !important;
      font-weight: 500;
      color: #444;
      transition: all 0.3s ease;
      cursor: pointer;
      -webkit-appearance: none;
      appearance: none;
    }

    /* Marka la gujiyo (Focus) */
    .custom-select:focus {
      border-color: #0d6efd !important;
      background-color: #fff !important;
      box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.1) !important;
      outline: none;
    }

    /* Arrow-ga yar ee midigta (Haddii aad rabto inaad adigu xukunto) */
  </style>
</head>

<body class="contact-page">

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

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
      style="background-image: url(assets/img/travel/showcase-8.webp);">
      <div class="container position-relative">
        <h1>Contact</h1>
        <p></p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info Boxes -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Our Address</h4>
                <p> Hantiwadag, Garowe, Puntland Somalia</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="info-content">
                <h4>Email Address</h4>
                <p>info@Hadaf-kaal.com</p>
             
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <div class="info-content">
                <h4>Hours of Operation</h4>
                <p>24HRS</p>
              </div>
            </div>
          </div>
        </div>

      </div>

     <div class="map-section" data-aos="fade-up" data-aos-delay="200">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.423456789012!2d48.4815!3d8.4084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x161decf66c794695%3A0xf857e7dfb947b525!2sHantiwadag%20Garowe!5e0!3m2!1sen!2sso!4v1714123456789!5m2!1sen!2sso"
    width="100%" 
    height="500" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

      <!-- Contact Form Section (Overlapping) -->
      <div class="container form-container-overlap">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-10">
            <div class="contact-form-wrapper">
              <h2 class="text-center mb-4">Get in Touch</h2>

             <form action="contact.php" method="post" class="my-custom-form">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-person"></i>
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-envelope"></i>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <div class="input-with-icon position-relative">
                        <i class="bi bi-tag select-icon"></i>
                        <select class="form-select custom-select" name="Subject" required="">
                          <option value="" selected disabled>Select Subject</option>
                          <option value="Travel">✈️ Travel & Visa Services</option>
                          <option value="Real Estate">🏠 Real Estate</option>
                          <option value="Cargo">📦 Cargo & Logistics</option>
                          <option value="Other">✨ Other</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-phone"></i>
                        <input type="text" class="form-control" name="mobile" placeholder="Phone Number" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-chat-dots message-icon"></i>
                        <textarea class="form-control" name="message" placeholder="Write Message..."
                          style="height: 180px" required=""></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-submit">SEND MESSAGE</button>
                  </div>
                </div>
              </form>
             <?php
// 1. Keen xiriirka database-ka
require_once('conn.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 2. Xogta ka soo qaad Form-ka oo sifeey (Security)
    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    $email     = mysqli_real_escape_string($con, $_POST['email']);
    $mobile    = mysqli_real_escape_string($con, $_POST['mobile']);
    $Subject   = mysqli_real_escape_string($con, $_POST['Subject']);
    $message   = mysqli_real_escape_string($con, $_POST['message']);

    // 3. Hubi inaan meelaha muhiimka ah la dhaafin
    if (empty($full_name) || empty($email) || empty($message)) {
        echo "<script>alert('Fadlan buuxi meelaha daruuriga ah!'); window.history.back();</script>";
        exit();
    }

    // 4. SQL Query - Table-ka 'customer_care'
    $sql = "INSERT INTO customer_care (full_name, email, mobile, Subject, message) 
            VALUES ('$full_name', '$email', '$mobile', '$Subject', '$message')";

    if (mysqli_query($con, $sql)) {
        // Guul: Macmiilka u sheeg, dibna ugu celi contact page-ka
        echo "<script>alert('Sucsess!'); window.location.href='contact.php';</script>";
    } else {
        // Qalad haddii uu dhaco
        echo "Cilad ayaa dhacday: " . mysqli_error($con);
    }
}
?>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background shadow-lg pt-5">

    <div class="footer-newsletter py-5" style="background: rgba(255,255,255,0.03);">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6" data-aos="fade-up">
            <h4 class="fw-bold text-white">Ku soo biir Warsidahayaga</h4>
            <p class="small text-muted mb-4">Halkaan kala soco fursadaha safar ee Somalia, Egypt iyo Kenya.
            </p>
            <form action="" method="post" class="d-flex gap-2">
              <input type="email" name="email" class="form-control rounded-pill border-0 px-4"
                placeholder="Email-kaaga ku qor..." required>
              <button type="submit" class="btn btn-primary rounded-pill px-4 fw-bold">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top py-5">
      <div class="row gy-4">

        <div class="col-lg-4 col-md-12 footer-about">
          <a href="index.php" class="logo d-flex align-items-center mb-3 text-decoration-none">
            <span class="sitename fs-2 fw-bold text-white">HADAF<span class="text-primary">-</span>KAAL</span>
          </a>
          <p class="opacity-75">A global leader in travel consultancy, logistics, and premium real estate
            solutions across East and North Africa.</p>

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
            <li class="mb-2"><a href="visa.php" class="text-decoration-none opacity-75 hover-link">Egypt
                Visa Services</a></li>
            <li class="mb-2"><a href="visa.php" class="text-decoration-none opacity-75 hover-link">Kenya
                e-Visa Portal</a></li>
            <li class="mb-2"><a href="medical.php" class="text-decoration-none opacity-75 hover-link">Medical
                Coordination</a></li>
            <li class="mb-2"><a href="tourism.php" class="text-decoration-none opacity-75 hover-link">Global
                Tourism</a></li>
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
            <li class="mb-2"><a href="contact.php" class="text-decoration-none opacity-75 hover-link">Legal
                Advice</a></li>
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