<?php
include '../../../config/database.php';
/** @noinspection MultiAssignmentUsageInspection */

use Shuchkin\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/src/SimpleXLSX.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

            $roll = $r[0];
            $class = $r[1];
            $branch = $r[2];
            $groupName = $r[3];
            $bangla_1st_full_marks = $r[4];
            $bangla_1st_MCQ = $r[5];
            $bangla_1st_CQ = $r[6];
            $bangla_2nd_full_marks = $r[7];
            $bangla_2nd_MCQ = $r[8];
            $bangla_2nd_CQ = $r[9];
            $english_1st_full_marks = $r[10];
            $english_1st_MCQ = $r[11];
            $english_1st_CQ = $r[12];
            $english_2nd_full_marks = $r[13];
            $english_2nd_MCQ = $r[14];
            $english_2nd_CQ = $r[15];
            $math_full_marks = $r[16];
            $math_MCQ = $r[17];
            $math_CQ = $r[18];
            $bgs_full_marks = $r[19];
            $bgs_MCQ = $r[20];
            $bgs_CQ = $r[21];

            $ict_full_marks = $r[22];
            $ict_MCQ = $r[23];
            $ict_CQ = $r[24];
            $religion_full_marks = $r[25];
            $religion_MCQ = $r[26];
            $religion_CQ = $r[27];
            $science_full_marks = $r[28];
            $science_MCQ = $r[29];
            $science_CQ = $r[30];
            $exam_type = $r[$num_cols - 1];
            $date = date("Y");

            if ($class == "নবম" || $class == "দশম") {
                if ($groupName == 'science') {
                    $biology_full_marks = $row[31];
                    $biology_MCQ = $row[32];
                    $biology_CQ = $row[33];
                    $chemistry_full_marks = $row[34];
                    $chemistry_MCQ = $row[35];
                    $chemistry_CQ = $row[36];
                    $physics_full_marks = $row[37];
                    $physics_MCQ = $row[38];
                    $physics_CQ = $row[39];
                    $higher_math_full_marks = $row[40];
                    $higher_math_MCQ = $row[41];
                    $higher_math_CQ = $row[42];
                    $agricultural_studies_full_marks = $row[43];
                    $agricultural_studies_MCQ = $row[44];
                    $agricultural_studies_CQ = $row[45];

                    $sql = "INSERT INTO result_info_science (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ,ict_full_marks, ict_MCQ, ict_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ, biology_full_marks, biology_MCQ, biology_CQ, chemistry_full_marks, chemistry_MCQ, chemistry_CQ, physics_full_marks, physics_MCQ, physics_CQ, higher_math_full_marks, higher_math_MCQ, higher_math_CQ, agricultural_studies_full_marks, agricultural_studies_MCQ, agricultural_studies_CQ,date)
            VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ','$ict_full_marks', '$ict_MCQ', '$ict_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ', '$biology_full_marks', '$biology_MCQ', '$biology_CQ', '$chemistry_full_marks', '$chemistry_MCQ', '$chemistry_CQ', '$physics_full_marks', '$physics_MCQ', '$physics_CQ', '$higher_math_full_marks', '$higher_math_MCQ', '$higher_math_CQ', '$agricultural_studies_full_marks', '$agricultural_studies_MCQ', '$agricultural_studies_CQ','$date')";


                    mysqli_query($conn, $sql);
                } else if ($groupName == 'commerce') {
                    $finance_full_marks = $_r[31];
                    $finance_MCQ = $_r[32];
                    $finance_CQ = $_r[33];
                    $accounting_full_marks = $_r[34];
                    $accounting_MCQ = $_r[35];
                    $accounting_CQ = $_r[36];
                    $business_ent_full_marks = $_r[37];
                    $business_ent_MCQ = $_r[38];
                    $business_ent_CQ = $_r[39];
                    $sql = "INSERT INTO result_info_commerce (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ,ict_full_marks, ict_MCQ, ict_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ, finance_full_marks, finance_MCQ, finance_CQ, accounting_full_marks, accounting_MCQ, accounting_CQ, business_ent_full_marks, business_ent_MCQ, business_ent_CQ,date)
            VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ','$ict_full_marks', '$ict_MCQ', '$ict_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ', '$finance_full_marks', '$finance_MCQ', '$finance_CQ', '$accounting_full_marks', '$accounting_MCQ', '$accounting_CQ', '$business_ent_full_marks', '$business_ent_MCQ', '$business_ent_CQ','$date')";

                    mysqli_query($conn, $sql);
                } else if ($groupName == 'arts') {
                    $economical_full_marks = $r[31];
                    $economical_MCQ = $r[32];
                    $economical_CQ = $r[33];
                    $geography_full_marks = $r[34];
                    $geography_MCQ = $r[35];
                    $geography_CQ = $r[36];
                    $history_full_marks = $r[37];
                    $history_MCQ = $r[38];
                    $history_CQ = $r[39];

                    $sql = "INSERT INTO result_info_arts (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ,ict_full_marks, ict_MCQ, ict_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ,economical_full_marks, economical_MCQ, economical_CQ, geography_full_marks, geography_MCQ, geography_CQ, history_full_marks, history_MCQ, history_CQ,date)
            VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ','$ict_full_marks', '$ict_MCQ', '$ict_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ', '$economical_full_marks', '$economical_MCQ', '$economical_CQ', '$geography_full_marks', '$geography_MCQ', '$geography_CQ', '$history_full_marks', '$history_MCQ', '$history_CQ','$date')";
                    mysqli_query($conn, $sql);
                }
            } else {
                $sql = "INSERT INTO result_info_general (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ,
        ict_full_marks, ict_MCQ, ict_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ,date)
    VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ','$ict_full_marks', '$ict_MCQ', '$ict_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ','$date')";
                mysqli_query($conn, $sql);
            }
        }
        // header("Location: ./index.php");
    } else {
        echo SimpleXLSX::parseError();
    }
}
