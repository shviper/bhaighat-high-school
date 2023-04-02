<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../../config/database.php';
    $about = $_POST['description'];

    $sql = "UPDATE school_history SET dis='$about' WHERE id=2";

    if (mysqli_query($conn, $sql)) {
        echo "Updated successfully";
    }
}
