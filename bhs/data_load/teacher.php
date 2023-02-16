<?php
include '../../config/database.php';
$sql = "SELECT * FROM teacher";
$teacher = mysqli_query($conn, $sql);
$total_teacher = mysqli_num_rows($teacher);

if ($total_teacher < 10) {
    $total_teacher = "0" . $total_teacher;
    echo $total_teacher;
} else {
    echo $total_teacher;
}
