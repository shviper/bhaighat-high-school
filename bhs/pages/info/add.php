<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../../config/database.php';
    $title = $_POST['title'];
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
    $sql = "INSERT INTO slider (title,img) VALUES ('$title','$file')";
    if (mysqli_query($conn, $sql)) {
        echo "slider img Added successfully";
    }
}
