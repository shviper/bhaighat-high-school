<?php
include '../../config/database.php';
$visitor = "SELECT visits FROM Counter WHERE id = 1";
$row = mysqli_fetch_assoc(mysqli_query($conn, $visitor));
echo $row["visits"];
