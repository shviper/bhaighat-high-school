<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../../config/database.php';
    $history = $_POST['description'];

    $sql = "UPDATE school_history SET dis='$history' WHERE id=1";

    if (mysqli_query($conn, $sql)) {
        echo "Updated successfully";
    }
}
