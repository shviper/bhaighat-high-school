<?php
include '../../config/database.php';
$sql = "SELECT * FROM message";
$message = mysqli_query($conn, $sql);
$total_message = mysqli_num_rows($message);
echo $total_message;
