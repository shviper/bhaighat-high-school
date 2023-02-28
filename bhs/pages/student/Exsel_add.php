<?php
include '../../../config/database.php';
/** @noinspection MultiAssignmentUsageInspection */

use Shuchkin\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/src/SimpleXLSX.php';

function banglaToNum($number)
{
    $engNumber = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $bangNumber = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
    $converted = str_replace($bangNumber, $engNumber, $number);
    return intval($converted);
}


if (isset($_POST['submit2'])) {


    $file = $_FILES['file']['name'];
    $tmp_file = $_FILES['file']['tmp_name'];;
    $fileExtension = explode('.', $file);
    $fileExtension = strtolower(end($fileExtension));
    $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;
    $targetDirectory = "upload/" . $newFileName;

    // if (!in_array($file_ext, $valid_extensions)) {
    //     echo "Invalid extension";
    //     exit();
    // }
    move_uploaded_file($tmp_file, $targetDirectory);







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
            $roll = banglaToNum($r[5]);
            $num = banglaToNum($r[6]);
            $sql = "INSERT INTO student_info (`Student_Name`,`parent_name`,`village`,`class`, `branch`,`roll`,`number`) VALUES ('$name', '$p', '$v', '$c', '$b', '$roll', '$num')";
            mysqli_query($conn, $sql);
        }
        header("Location: ./index.php");
    } else {
        echo SimpleXLSX::parseError();
    }
}
