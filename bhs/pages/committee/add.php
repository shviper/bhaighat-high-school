<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../../config/database.php';
    $Name = $_POST['name'];
    $date = $_POST['date'];
    $Designation = $_POST['Designation'];
    $image = $_FILES['image']['name'];

    $tmp_image = $_FILES['image']['tmp_name'];
    $folder = "../../../img/managing_committee/";

    $image_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png');

    if (!in_array($image_ext, $valid_extensions)) {
        echo "Invalid image extension";
        exit;
    }

    if ($_FILES['image']['size'] > 500000) {
        echo "Image size too large";
        exit;
    }
    if (file_exists($folder . $image)) {
        echo "File already exists.";
        exit;
    }

    move_uploaded_file($tmp_image, $folder . $image);
    $sql = "INSERT INTO managing_committee (Name,Designation,date,Picture) VALUES (
        '$Name','$Designation','$date','$image')";
    if (mysqli_query($conn, $sql)) {
        echo "Data Added successfully";
    } else {
        echo "fail!Some thing is wrong !";
    }
}
