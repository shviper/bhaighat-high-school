<?php
include '../../auth/islogin.php';
include '../../../config/database.php';

if (isset($_GET['id'])) {
    // Get the id of the item to be deleted
    $id = $_GET['id'];
    $sql = "SELECT img FROM slider WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $image = $row['img'];

        unlink("../../../img/header_img/" . $image);

        // Delete the item from the database
        $sql = "DELETE FROM slider WHERE id=$id";
        mysqli_query($conn, $sql);



        header("Location: ./index.php");
    }
}
