<?php
include '../../../config/database.php';
/** @noinspection MultiAssignmentUsageInspection */

use Shuchkin\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/src/SimpleXLSX.php';

if (isset($_POST['submit'])) {


    $file = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];;

    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExtension));
    $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;
    $targetDirectory = "uploads/" . $newFileName;

    // if (!in_array($file_ext, $valid_extensions)) {
    //     echo "Invalid extension";
    //     exit();
    // }
    move_uploaded_file($tmp_image, $targetDirectory);







    if ($xlsx = SimpleXLSX::parse($targetDirectory)) {

        $dim = $xlsx->dimension();
        $num_cols = $dim[0];
        $num_rows = $dim[1];

        foreach ($xlsx->rows() as $r) {
            $name = $r[0];
            $p = $r[1];
            $v = $r[2];
            $c = $r[3];
            $b = $r[4];
            $roll = $r[5];
            $num = $r[6];
            $sql = "INSERT INTO student_info (`Student_Name`,`parent_name`,`village`,`class`, `branch`,`rool`,`number`) VALUES ('$name', '$p', '$v', '$c', '$b', '$roll', '$num')";
            mysqli_query($conn, $sql);
        }
    } else {
        echo SimpleXLSX::parseError();
    }
}
?>
<form class="contact-form" id="slider" enctype="multipart/form-data" action="index.php" method="post">
    <input type="file" name="image" multiple class="form-in" required>

    <center><button class="button" type="submit" name="submit">Publish
        </button></center>
</form>