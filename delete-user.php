<?php
include('conn.php');
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL-ka tirtirista
    $sql = "DELETE FROM admin_users WHERE id = $id";

    if (mysqli_query($con, $sql)) {
        $_SESSION['success'] = "User-ka si guul leh ayaa loo tirtiray!";
    } else {
        $_SESSION['error'] = "Waa la tirtiri waayey user-ka.";
    }
}

header("Location: list-user.php");
exit();
?>