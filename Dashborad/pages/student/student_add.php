<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../../config/database.php';
    $class = $_POST['class'];
    $male = $_POST['male'];
    $female = $_POST['female'];
    $sceince = $_POST['sceince'];
    $humane = $_POST['humane'];


    $sql = "INSERT INTO student (class,male,female,sceince,humane) VALUES (
        '$class','$male','$female','$sceince','$humane')";
    if (mysqli_query($conn, $sql)) {
        echo "Student Data Added successfully";
    } else {
        echo "fail!Some thing is wrong !";
    }
}
