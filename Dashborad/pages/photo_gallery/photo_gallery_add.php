<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../../config/database.php';
    $title = $_POST['title'];
    $status = 0;
    $files = $_FILES['image']['name'];
    $file_count = count($files);


    for ($i = 0; $i < $file_count; $i++) {
        // echo "into in for loop";
        $file = $_FILES['image']['name'][$i];
        $tmp_image = $_FILES['image']['tmp_name'][$i];
        $folder = "../../../img/gallery/photo/";

        $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $valid_extensions = array("jpeg", "jpg", "png", "mp4", "avi", "mov", "wmv", "flv", "mkv", "m4v", "webm");

        if (!in_array($file_ext, $valid_extensions)) {
            echo "Invalid extension";
            exit;
        }
        if (file_exists($folder . $file)) {
            echo "File already exists.";
            exit;
        }

        move_uploaded_file($tmp_image, $folder . $file);
        $sql = "INSERT INTO gallery (title,file) VALUES ('$title','$file')";
        if (mysqli_query($conn, $sql)) {
            $status = $status + 1;
        }
    }
    if ($file_count == $status) {
        echo "Gallery Added successfully";
    }
}
