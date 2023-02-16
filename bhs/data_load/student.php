<?php
include '../../config/database.php';
$sql = "SELECT * FROM student";
$student = mysqli_query($conn, $sql);

if (mysqli_num_rows($student) > 0) {
    // output data of each row
    $total_s_student = 0;

    while ($row = mysqli_fetch_assoc($student)) {
        $total_student = $row['male'] + $row['female'];
        $total_s_student = $total_s_student + $total_student;
    }
    echo $total_s_student;
}
