<?php
session_start();
require_once "conn.php"; // Hubi in magaca faylkaagu yahay conn.php

// 1. Hubi inuu qofku Login yahay
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// 2. Hubi haddii ID-ga la soo diray
if (isset($_GET['id'])) {
    // Sifee ID-ga si looga hortago SQL Injection
    $id = mysqli_real_escape_string($con, $_GET['id']);

    // 3. Tirtir xogta
    $query = "DELETE FROM property_bookings WHERE id = '$id'";

    if (mysqli_query($con, $query)) {
        // Haddii ay guulaysato, ku noqo bogga weyn adigoo farxad xambaarsan
        header("Location: property_list.php?status=deleted");
        exit();
    } else {
        // Haddii ay cilad dhacdo
        echo "Cilad ayaa dhacday xilli xogta la tirtirayay: " . mysqli_error($con);
    }
} else {
    // Haddii ID-ga la waayo, iska laabo
    header("Location: property_list.php");
    exit();
}
?>