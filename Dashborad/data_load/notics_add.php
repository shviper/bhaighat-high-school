<?php
// Connect to the database
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include '../../config/database.php';

    $notice_Headline = $_POST['notice_Headline'];
    $categories = $_POST['categories'];
    $description = $_POST['description'];

    $sql = "INSERT INTO notice (notice_Headline,description, categories) VALUES ('$notice_Headline', '$description', '$categories')";
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    }
}
