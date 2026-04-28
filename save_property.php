<?php
// Xiriirka database-ka
$con = mysqli_connect('localhost', 'root', '', 'hadaf-kaal');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title    = mysqli_real_escape_string($con, $_POST['title']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $price    = mysqli_real_escape_string($con, $_POST['price']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $size     = mysqli_real_escape_string($con, $_POST['size']);
    $beds     = (int)$_POST['beds'];
    $baths    = (int)$_POST['baths'];

    // Maareynta Sawirka
    $image_name = $_FILES['image']['name'];
    $temp_name  = $_FILES['image']['tmp_name'];
    
    // 1. Hubi in magaca folder-ka uu la mid yahay kan computer-kaaga
    $target_dir = "uploads/"; 
    $target_file = $target_dir . basename($image_name);

    // 2. Isku day inaad upload-gareyso
    if (move_uploaded_file($temp_name, $target_file)) {
        
        $sql = "INSERT INTO properties (title, location, price, category, image, size, beds, baths) 
                VALUES ('$title', '$location', '$price', '$category', '$image_name', '$size', '$beds', '$baths')";

        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Al Furqaan Apartment waa la keydiyay!'); window.location.href='service_list.php';</script>";
        } else {
            echo "Khalad Database: " . mysqli_error($con);
        }
    } else {
        // Qaybtan ayaa kuu sheegaysa dhibka jira
        echo "<h3>Khalad ayaa dhacay!</h3>";
        if (!is_dir($target_dir)) {
            echo "Dhibka: Folder-ka 'uploads' ma jiro. Fadlan sameey folder cusub oo magacaas leh.";
        } elseif (!is_writable($target_dir)) {
            echo "Dhibka: Folder-ka 'uploads' ma lahan ogolaansho (Permission).";
        } else {
            echo "Dhibka: PHP ma awoodo inay dhaqaajiso sawirka. Hubi cabirka sawirka.";
        }
    }
}
?>