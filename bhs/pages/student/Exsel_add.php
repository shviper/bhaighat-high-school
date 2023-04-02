<?php
include '../../../config/database.php';
/** @noinspection MultiAssignmentUsageInspection */

use Shuchkin\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/src/SimpleXLSX.php';



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
            $Student_Name_Bangla = $r[0];
            $Student_Name_English = $r[1];
            $Fathers_Name_Bangla = $r[2];
            $Fathers_Name_English = $r[3];
            $Mothers_Name_Bangla = $r[4];
            $Mothers_Name_English = $r[5];
            $Divission = $r[6];
            $District = $r[7];
            $Upazila = $r[8];
            $Post_office = $r[9];
            $Village = $r[10];
            $Class = $r[11];
            $Section = $r[12];
            $Group = $r[13];
            $Roll_No = $r[14];
            $Session = $r[15];
            $Gender = $r[16];
            $Religion = $r[17];
            $St_Code = $r[18];
            $UID_Number = $r[19];
            $Mobile_Number = $r[20];
            $Blood_Group = $r[21];
            $img = $r[22];

            $sql = "INSERT INTO student_info2 (Student_Name_Bangla, Student_Name_English, Fathers_Name_Bangla, Fathers_Name_English, Mothers_Name_Bangla, Mothers_Name_English, Divission, District, Upazila, Post_office, Village, Class, Section, Group_name, Roll_No, Session, Gender, Religion, St_Code, UID_Number, Mobile_Number, Blood_Group, img)
VALUES ( '$Student_Name_Bangla', '$Student_Name_English', '$Fathers_Name_Bangla', '$Fathers_Name_English', '$Mothers_Name_Bangla', '$Mothers_Name_English', '$Divission', '$District', '$Upazila', '$Post_office', '$Village', '$Class', '$Section', '$Group', '$Roll_No', '$Session', '$Gender', '$Religion', '$St_Code', '$UID_Number', '$Mobile_Number', '$Blood_Group', '$img')
";
            mysqli_query($conn, $sql);
        }
        header("Location: ./index.php");
    } else {
        echo SimpleXLSX::parseError();
    }
}
