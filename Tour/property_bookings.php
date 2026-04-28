<?php
include('conn.php');
session_start();

// 1. Soo qabo xogta guriga si loogu muujiyo foomka dushiisa
$p_id = isset($_GET['id']) ? mysqli_real_escape_string($con, $_GET['id']) : 0;
$prop_name = "Property Inquiry";
$prop_img = "";

if ($p_id > 0) {
    $p_query = "SELECT title, image FROM properties WHERE id = '$p_id'";
    $p_res = mysqli_query($con, $p_query);
    if ($row = mysqli_fetch_assoc($p_res)) {
        $prop_name = $row['title'];
        $prop_img = $row['image'];
    }
}

// 2. Habaynta marka foomka la gudbiyo
if (isset($_POST['btn_booking'])) {
    $p_id        = mysqli_real_escape_string($con, $_POST['property_id']);
    $full_name   = mysqli_real_escape_string($con, $_POST['full_name']);
    $email       = mysqli_real_escape_string($con, $_POST['email']);
    $nationality = mysqli_real_escape_string($con, $_POST['nationality']);
    $city        = mysqli_real_escape_string($con, $_POST['city']);
    $phone       = mysqli_real_escape_string($con, $_POST['phone']);
    $req_type    = mysqli_real_escape_string($con, $_POST['request_type']);
    $message     = mysqli_real_escape_string($con, $_POST['message']);

    if ($p_id > 0) {
        $sql = "INSERT INTO property_bookings (property_id, full_name, email, nationality, city, phone, request_type, message) 
                VALUES ('$p_id', '$full_name', '$email', '$nationality', '$city', '$phone', '$req_type', '$message')";

        if (mysqli_query($con, $sql)) {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire('Success!', 'Your inquiry for $prop_name has been sent.', 'success').then(() => {
                        window.location.href='index.php';
                    });
                });
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inquiry | <?php echo $prop_name; ?></title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Plus Jakarta Jakarta Sans', sans-serif; background-color: #f8f9fa; }
    .booking-card { border: none; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); overflow: hidden; }
    .prop-preview { background: #0d6efd; color: white; padding: 30px; display: flex; align-items: center; gap: 20px; }
    .prop-preview img { width: 100px; height: 100px; object-fit: cover; border-radius: 12px; border: 3px solid rgba(255,255,255,0.2); }
    .form-control, .form-select { border-radius: 10px; padding: 12px 15px; border: 1px solid #e0e0e0; background: #fff; }
    .form-control:focus { border-color: #0d6efd; box-shadow: 0 0 0 4px rgba(13,110,253,0.1); }
    .btn-submit { background: #0d6efd; border: none; padding: 15px; border-radius: 12px; font-weight: 700; transition: 0.3s; }
    .btn-submit:hover { background: #0a58ca; transform: translateY(-2px); }
  </style>
</head>

<body>

<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card booking-card">
                <div class="prop-preview">
                    <?php if($prop_img): ?>
                        <img src="assets/img/gallery/<?php echo $prop_img; ?>" alt="Property">
                    <?php else: ?>
                        <div class="bg-white text-primary rounded-3 p-3"><i class="bi bi-house-door-fill fs-1"></i></div>
                    <?php endif; ?>
                    <div>
                        <span class="badge bg-white text-primary mb-2">Requesting Information</span>
                        <h3 class="fw-bold mb-0"><?php echo $prop_name; ?></h3>
                    </div>
                </div>

                <div class="card-body p-5">
                    <form action="" method="POST">
                        <input type="hidden" name="property_id" value="<?php echo $p_id; ?>">

                        <div class="row g-4">
                            <div class="col-12"><h5 class="fw-bold text-dark border-start border-primary border-4 ps-3">Personal Information</h5></div>
                            
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-person"></i></span>
                                    <input type="text" name="full_name" class="form-control border-start-0 shadow-none" placeholder="Your Name" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control border-start-0 shadow-none" placeholder="name@domain.com" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label small fw-semibold">Phone (WhatsApp)</label>
                                <input type="tel" name="phone" class="form-control shadow-none" placeholder="+252..." required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label small fw-semibold">Nationality</label>
                                <input type="text" name="nationality" class="form-control shadow-none" placeholder="Country" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label small fw-semibold">City of Residence</label>
                                <input type="text" name="city" class="form-control shadow-none" placeholder="" required>
                            </div>

                            <div class="col-12 mt-5"><h5 class="fw-bold text-dark border-start border-primary border-4 ps-3">Inquiry Details</h5></div>

                            <div class="col-md-12">
                                <label class="form-label small fw-semibold">Select Professional Service</label>
                                <select name="request_type" class="form-select shadow-none" required style="border-left: 4px solid #0d6efd;">
                                    <option value="" selected disabled>How can we help you with this property?</option>
                                    <optgroup label="Direct Acquisition">
                                        <option value="Iib (Sale)">🏠 Sales</option>
                                        <option value="Kiro (Rent)">🔑Rent</option>
                                    </optgroup>
                                    <optgroup label="Professional Services">
                                        <option value="Viewing">📅 Schedule a Private Viewing</option>
                                        <option value="Valuation">📊 Property Valuation / Appraisal</option>
                                        <option value="Investment">📈 Investment Consultation</option>
                                        <option value="Management">🛡️ Property Management Inquiry</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label small fw-semibold">Message / Special Requirements</label>
                                <textarea name="message" class="form-control shadow-none" rows="4" placeholder="Tell us more about your requirements..."></textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" name="btn_booking" class="btn btn-submit text-white w-100 shadow-lg">
                                    <i class="bi bi-send-check-fill me-2"></i> SUBMIT PROFESSIONAL INQUIRY
                                </button>
                                <p class="text-center text-muted small mt-3">
                                    <i class="bi bi-shield-lock-fill"></i> Your data is protected by HADAF-KAAL Privacy Policy.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>