<?php
require_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HADAF_ KAAL - HADAF_ KAAL Bootstrap Template</title>
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
    .property-card {
      transition: all 0.3s ease-in-out;
    }

    .property-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15) !important;
    }

    .price-badge {
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(4px);
      font-weight: 700;
    }
    /* Filter Container-ka guud */
    .filter-wrapper {
        background: #ffffff;
        border-radius: 20px;
        padding: 25px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: 1px solid #f1f1f1;
    }

    /* Label-ka (Location, Property Type, etc.) */
    .filter-label {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #888;
        font-weight: 700;
        margin-bottom: 8px;
        display: block;
    }

    /* Input-yada iyo Select-ka */
    .filter-control {
        border: 2px solid #f8f9fa !important;
        background-color: #f8f9fa !important;
        border-radius: 12px !important;
        padding: 12px 15px !important;
        font-size: 14px !important;
        color: #333 !important;
        transition: all 0.3s ease;
    }

    .filter-control:focus {
        background-color: #fff !important;
        border-color: #0d6efd !important;
        box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.1) !important;
    }

    /* Badhanka Find Property */
    .btn-search {
        background: linear-gradient(45deg, #0d6efd, #004dc7);
        border: none;
        border-radius: 12px;
        font-weight: 600;
        letter-spacing: 0.5px;
        padding: 14px;
        transition: all 0.3s ease;
    }

    .btn-search:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
    }

  </style>
</head>

<body class="HADAF_ KAAL-page">

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

    <div class="page-title dark-background" data-aos="fade"
      style="background-image: url(assets/img/travel/showcase-8.webp);">
      <div class="container position-relative text-center">
        <h1 class="display-4 fw-bold">Hadaf-Kaal</h1>
        <p class="lead">Excellence in Modern Living & Luxury Real Estate in Garowe.</p>
        <div class="mt-4">
          <a href="#properties" class="btn btn-primary btn-lg rounded-pill me-2">View Properties</a>
          <a href="https://wa.me/252906299299" class="btn btn-outline-light btn-lg rounded-pill">Contact
            Agent</a>
        </div>
      </div>
    </div>

    <section id="properties" class="section bg-light">
      <div class="container" data-aos="fade-up">

        <div class="row mb-5">
          <div class="col-lg-6">
            <h2 class="fw-bold text-dark">Featured Listings</h2>
            <p class="text-muted">High-quality homes and strategic lands curated by HADAF-KAAL.</p>
          </div>
          <div class="col-lg-6 d-flex align-items-center justify-content-lg-end">
            <nav class="breadcrumbs">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary">Real Estate</li>
              </ol>
            </nav>
          </div>
        </div>
      <?php
// 1. Dhis Query-ga guud
$query = "SELECT * FROM properties WHERE 1=1";

if (!empty($_GET['location'])) {
    $location = mysqli_real_escape_string($con, $_GET['location']);
    $query .= " AND location = '$location'";
}

if (!empty($_GET['category'])) {
    $category = mysqli_real_escape_string($con, $_GET['category']);
    $query .= " AND category = '$category'";
}

// 2. Price Filter Logic
if (!empty($_GET['price_range'])) {
    $range = $_GET['price_range'];
    if ($range == '100-200') {
        $query .= " AND price BETWEEN 100 AND 200";
    } elseif ($range == '200-500') {
        $query .= " AND price BETWEEN 200 AND 500";
    } elseif ($range == '500+') {
        $query .= " AND price >= 500";
    }
}

// 3. Ordering & Limit
if (empty($_GET['location']) && empty($_GET['category']) && empty($_GET['price_range'])) {
    $query .= " ORDER BY id DESC LIMIT 6";
} else {
    $query .= " ORDER BY id DESC";
}

$result = mysqli_query($con, $query);
?>

        <main class="nxl-container">
          <div class="container p-4">
<form action="" method="GET">
    <div class="row mb-5">
        <div class="col-12">
            <div class="filter-wrapper">
                <div class="row g-3 align-items-end">
                    
                   <div class="col-lg-3 col-md-6">
    <label class="filter-label"><i class="bi bi-geo-alt me-1"></i> Location</label>
    <select name="location" class="form-select filter-control">
        <option value="">All Neighborhoods</option>
        <?php
        // 1. Soo saar dhammaan meelaha (locations) ku jira miiska properties
        // Waxaan isticmaalaynaa DISTINCT si aan hal magac u helno mar kaliya
        $loc_query = "SELECT DISTINCT location FROM properties ORDER BY location ASC";
        $loc_result = mysqli_query($con, $loc_query);

        if ($loc_result) {
            while ($loc_row = mysqli_fetch_assoc($loc_result)) {
                $location_name = $loc_row['location'];
                
                // 2. Hubi haddii meeshan horay loo doortay si ay u sii muuqato (selected)
                $selected = (isset($_GET['location']) && $_GET['location'] == $location_name) ? 'selected' : '';
                
                // 3. Soo daabac Option-ka
                echo "<option value='" . htmlspecialchars($location_name) . "' $selected>" . htmlspecialchars($location_name) . "</option>";
            }
        }
        ?>
    </select>
</div>

                    <div class="col-lg-3 col-md-6">
                        <label class="filter-label"><i class="bi bi-house me-1"></i> Property Type</label>
                        <select name="category" class="form-select filter-control">
                            <option value="">All Types</option>
                            <option value="For Rent">For Rent</option>
                            <option value="For Sale">For Sale</option>
                        </select>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <label class="filter-label"><i class="bi bi-cash-stack me-1"></i> Price Range</label>
                        <select name="price_range" class="form-select filter-control">
                            <option value="">Any Price</option>
                            <option value="100-200">$100 - $200</option>
                            <option value="200-500">$200 - $500</option>
                            <option value="500+">$500+</option>
                        </select>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <button type="submit" class="btn btn-primary w-100 btn-search">
                            <i class="bi bi-search me-2"></i> Find Property
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</form>

            <div class="row g-4">
              <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                  <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden property-card">
                      <div class="position-relative overflow-hidden">
                        <img src="../uploads/<?php echo $row['image']; ?>" class="w-100"
                          style="height: 240px; object-fit: cover;" alt="Property">

                        <span class="badge bg-primary position-absolute top-0 start-0 m-3 px-3 py-2 shadow-sm rounded-pill">
                          <?php echo htmlspecialchars($row['category']); ?>
                        </span>
                      </div>

                      <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <h5 class="fw-bold text-dark mb-0 text-truncate" style="max-width: 70%;">
                            <?php echo htmlspecialchars($row['title']); ?>
                          </h5>
                          <h5 class="text-primary fw-bold mb-0">
                            $<?php echo is_numeric($row['price']) ? number_format($row['price']) : htmlspecialchars($row['price']); ?>
                          </h5>
                        </div>

                        <p class="text-muted small mb-4">
                          <i class="bi bi-geo-alt-fill text-danger me-1"></i>
                          <?php echo htmlspecialchars($row['location']); ?>
                        </p>

                        <div class="d-flex justify-content-between border-top pt-3 text-muted small">
                          <span><i class="bi bi-door-open text-primary me-1"></i> <?php echo $row['beds']; ?> Beds</span>
                          <span><i class="bi bi-droplet text-primary me-1"></i> <?php echo $row['baths']; ?> Baths</span>
                          <span><i class="bi bi-arrows-fullscreen text-primary me-1"></i>
                            <?php echo htmlspecialchars($row['size']); ?></span>
                        </div>
                      </div>

                      <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="property_bookings.php?id=<?php echo $row['id']; ?>"
                          class="btn btn-primary w-100 rounded-pill fw-bold shadow-sm">
                          Inquire Now
                        </a>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php else: ?>
                <div class="col-12 text-center py-5">
                  <div class="mb-3">
                    <i class="bi bi-search text-muted" style="font-size: 3rem;"></i>
                  </div>
                  <h4 class="text-muted">Wax natiijo ah laguma helin raadintaada.</h4>
                  <p class="text-secondary">Fadlan isku day inaad beddesho meesha ama nooca guriga.</p>
                  <a href="?" class="btn btn-primary rounded-pill px-4">Arag Dhammaan</a>
                </div>
              <?php endif; ?>
            </div>

          </div>
        </main>
        <footer id="footer" class="footer position-relative dark-background shadow-lg">

          <div class="footer-newsletter py-5">
            <div class="container">
              <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                  <h2 class="fw-bold">✈️ HADAF-KAAL TRAVEL & SERVICES</h2>
                  <p class="lead">Waxaan macaamiisheena u fidinnaa adeegyo dhammaystiran oo la isku
                    halayn karo, laga bilaabo Visaha ilaa Real Estate.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="container footer-top py-5">
            <div class="row gy-4">

              <div class="col-lg-4 col-md-12 footer-about">
                <a href="index.php" class="logo d-flex align-items-center mb-3">
                  <span class="sitename fs-3 fw-bold">HADAF-KAAL</span>
                </a>
                <p>Waxaan kuu fududaynaynaa safarka caalamka, gaarsiinta xamuulka, iyo helitaanka hoyga
                  riyadaada. Kalsoonidu waa hadafkayaga.</p>

                <div class="footer-contact pt-3">
                  <h5 class="fw-bold border-bottom pb-2 mb-3">📞 Nala Soo Xiriir (Hotline)</h5>
                  <p class="mb-0">
                    <span class="badge bg-success me-2">🇸🇴 Somalia:</span>
                    <a href="tel:+252906299299" class="text-white">+252 90 6299299</a>
                  </p>
                </div>
              </div>

              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Travel & Visa</h4>
                <ul>
                  <li><i class="bi bi-airplane text-primary"></i> <a href="visa.php">Visa Services</a>
                  </li>
                  <li><i class="bi bi-hospital text-primary"></i> <a href="medical.php">Medical
                      Tourism</a></li>
                  <li><i class="bi bi-book text-primary"></i> <a href="education.php">Scholarships</a>
                  </li>
                  <li><i class="bi bi-geo-alt text-primary"></i> <a href="tourism.php">Tourism
                      Packages</a></li>
                </ul>
              </div>

              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Services</h4>
                <ul>
                  <li><i class="bi bi-box-seam text-primary"></i> <a href="cargo.php">International
                      Cargo</a></li>
                  <li><i class="bi bi-car-front text-primary"></i> <a href="taxi.php">Airport Taxi</a>
                  </li>
                  <li><i class="bi bi-house-door text-primary"></i> <a href="real-estate.php">Real
                      Estate</a></li>
                  <li><i class="bi bi-shield-check text-primary"></i> <a href="contact.php">Support</a></li>
                </ul>
              </div>

              <div class="col-lg-4 col-md-12 footer-social">
                <h4>Follow Us</h4>
                <p>Nagala soco baraha bulshada si aad u hesho xogta

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