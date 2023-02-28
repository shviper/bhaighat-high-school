<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../../config/database.php';

    $Student_Name = $_POST['Student_Name'];
    $parent_name = $_POST['parent_name'];
    $village = $_POST['village'];
    $number = $_POST['number'];
    $class = $_POST['class'];
    $branch = $_POST['branch'];
    $roll = $_POST['roll'];


    $sql = "INSERT INTO student_info (Student_Name,parent_name,village,number,class,branch,roll) VALUES (
        '$Student_Name','$parent_name','$village','$number','$class','$branch','$roll')";
    if (mysqli_query($conn, $sql)) {
        echo "Student Data Added successfully";
    } else {
        echo "fail!Some thing is wrong !";
    }
}
