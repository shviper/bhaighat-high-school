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
            $religion_full_marks = $r[22];
            $religion_MCQ = $r[23];
            $religion_CQ = $r[24];
            $science_full_marks = $r[25];
            $science_MCQ = $r[26];
            $science_CQ = $r[27];
            $exam_type = $r[$num_cols - 1];
            $date = date("Y");

            if ($class == "নবম" || $class == "দশম") {
                if ($groupName == 'science') {
                    $biology_full_marks = $r[28];
                    $biology_MCQ = $r[29];
                    $biology_CQ = $r[30];
                    $chemistry_full_marks = $r[31];
                    $chemistry_MCQ = $r[32];
                    $chemistry_CQ = $r[33];
                    $physics_full_marks = $r[34];
                    $physics_MCQ = $r[35];
                    $physics_CQ = $r[36];
                    $higher_math_full_marks = $r[37];
                    $higher_math_MCQ = $r[38];
                    $higher_math_CQ = $r[39];
                    $agricultural_studies_full_marks = $r[40];
                    $agricultural_studies_MCQ = $r[41];
                    $agricultural_studies_CQ = $r[42];

                    $sql = "INSERT INTO result_info_science (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ, biology_full_marks, biology_MCQ, biology_CQ, chemistry_full_marks, chemistry_MCQ, chemistry_CQ, physics_full_marks, physics_MCQ, physics_CQ, higher_math_full_marks, higher_math_MCQ, higher_math_CQ, agricultural_studies_full_marks, agricultural_studies_MCQ, agricultural_studies_CQ,date)
            VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ', '$biology_full_marks', '$biology_MCQ', '$biology_CQ', '$chemistry_full_marks', '$chemistry_MCQ', '$chemistry_CQ', '$physics_full_marks', '$physics_MCQ', '$physics_CQ', '$higher_math_full_marks', '$higher_math_MCQ', '$higher_math_CQ', '$agricultural_studies_full_marks', '$agricultural_studies_MCQ', '$agricultural_studies_CQ','$date')";


                    mysqli_query($conn, $sql);
                } else if ($groupName == 'commerce') {
                    $finance_full_marks = $_r[28];
                    $finance_MCQ = $_r[29];
                    $finance_CQ = $_r[30];
                    $accounting_full_marks = $_r[31];
                    $accounting_MCQ = $_r[32];
                    $accounting_CQ = $_r[33];
                    $business_ent_full_marks = $_r[34];
                    $business_ent_MCQ = $_r[35];
                    $business_ent_CQ = $_r[36];
                    $sql = "INSERT INTO result_info_commerce (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ, finance_full_marks, finance_MCQ, finance_CQ, accounting_full_marks, accounting_MCQ, accounting_CQ, business_ent_full_marks, business_ent_MCQ, business_ent_CQ,date)
            VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ', '$finance_full_marks', '$finance_MCQ', '$finance_CQ', '$accounting_full_marks', '$accounting_MCQ', '$accounting_CQ', '$business_ent_full_marks', '$business_ent_MCQ', '$business_ent_CQ','$date')";

                    mysqli_query($conn, $sql);
                } else if ($groupName == 'arts') {
                    $economical_full_marks = $r[28];
                    $economical_MCQ = $r[29];
                    $economical_CQ = $r[30];
                    $geography_full_marks = $r[31];
                    $geography_MCQ = $r[32];
                    $geography_CQ = $r[33];
                    $history_full_marks = $r[34];
                    $history_MCQ = $r[35];
                    $history_CQ = $r[36];

                    $sql = "INSERT INTO result_info_arts (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ,economical_full_marks, economical_MCQ, economical_CQ, geography_full_marks, geography_MCQ, geography_CQ, history_full_marks, history_MCQ, history_CQ,date)
            VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ', '$economical_full_marks', '$economical_MCQ', '$economical_CQ', '$geography_full_marks', '$geography_MCQ', '$geography_CQ', '$history_full_marks', '$history_MCQ', '$history_CQ','$date')";
                    mysqli_query($conn, $sql);
                }
            } else {
                $sql = "INSERT INTO result_info_general (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ,date)
    VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ','$date')";
                mysqli_query($conn, $sql);
            }
        }
        // header("Location: ./index.php");
    } else {
        echo SimpleXLSX::parseError();
    }
}
