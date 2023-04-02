<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../../config/database.php';
    $file = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    $folder = "../../../img/header_img/";

    $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $valid_extensions = array("jpeg", "jpg", "png");

    if (!in_array($file_ext, $valid_extensions)) {
        echo "Invalid extension";
        exit;
    }
    if (file_exists($folder . $file)) {
        echo "File already exists.";
        exit;
    }

    move_uploaded_file($tmp_image, $folder . $file);
    $sql = "UPDATE ad_notice SET img='$file' WHERE id=1";
    if (mysqli_query($conn, $sql)) {
        echo "Img Added successfully";
    }
}
