<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once "conn.php";

// 1. Hubi in qofka uu login yahay
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// 2. Soo qabo ID-ga guriga la rabo in la tirtiro
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    // 3. Tirtir xogta guriga
    $sql = "DELETE FROM properties WHERE id = $id";

    if (mysqli_query($con, $sql)) {
        // Halkan ayaan dhigeynaa Alert-ka Ingiriisiga ah
        echo "
        <script>
            alert('deleted successfully!');
            window.location.href='dashboard.php';
        </script>";
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    header("Location: dashboard.php");
    exit();
}
?>