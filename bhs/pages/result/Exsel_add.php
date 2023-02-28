<?php
include '../../../config/database.php';
/** @noinspection MultiAssignmentUsageInspection */

use Shuchkin\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/src/SimpleXLSX.php';



if (isset($_POST['submit2'])) {
    $file = $_FILES['file']['name'];
    $tmp_file = $_FILES['file']['tmp_name'];
    $fileExtension = explode('.', $file);
    $fileExtension = strtolower(end($fileExtension));
    $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;
    $targetDirectory = "upload/" . $newFileName;
    move_uploaded_file($tmp_file, $targetDirectory);


    if ($xlsx = SimpleXLSX::parse($targetDirectory)) {

        $dim = $xlsx->dimension();
        $num_cols = $dim[0];
        $num_rows = $dim[1];

        foreach ($xlsx->rows() as $r) {
            $name = $r[0];
            $roll = $r[1];
            $class = $r[2];
            $branch = $r[3];
            $groupName = $r[4];

            $bangla_1st = $r[5];
            $bangla_2nd = $r[6];
            $english_1st = $r[7];
            $english_2nd = $r[8];
            $math = $r[9];
            $bgs = $r[10];
            $religion = $r[11];
            $gens = $r[12];

            // science sub
            $biology = $r[13];
            $chemistry = $r[14];
            $physics = $r[15];
            $higher_math = $r[16];
            $Agricultural_Studies = $r[17];
            // commerce sub
            $Finance = $r[18];
            $Accounting = $r[19];
            $Business_Ent = $r[20];
            // arts sub
            $Economical = $r[21];
            $Geography_and_Environment = $r[22];
            $History = $r[23];
            $sql = "INSERT INTO result_info
            (name, roll, class, branch, groupName, bangla_1st, bangla_2nd, english_1st, english_2nd, math, bgs, religion, gens, biology, chemistry, physics, higher_math, Agricultural_Studies, Finance, Accounting, Business_Ent, Economical, Geography_and_Environment, History)
            VALUES ('$name','$roll','$class','$branch','$groupName','$bangla_1st','$bangla_2nd','$english_1st','$english_2nd','$math','$bgs','$religion','$gens','$biology','$chemistry','$physics','$higher_math','$Agricultural_Studies','$Finance','$Accounting','$Business_Ent','$Economical','$Geography_and_Environment','$History')";
            mysqli_query($conn, $sql);
        }
        header("Location: ./index.php");
    } else {
        echo SimpleXLSX::parseError();
    }
}
