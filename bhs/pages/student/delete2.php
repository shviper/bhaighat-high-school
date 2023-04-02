<?php
include '../../auth/islogin.php';
include '../../../config/database.php';

// Get the id of the item to be deleted
$id = $_GET['id'];

// Delete the item from the database
$sql = "DELETE FROM student_info2 WHERE id=$id";
mysqli_query($conn, $sql);

header("Location: ./index.php");
