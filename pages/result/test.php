<?php
include("../../config/database.php");
$result = mysqli_query($conn, "DESCRIBE result_info_general");
if ($result) {
    echo $row['Field'] . '<br>';
    $row = mysqli_fetch_assoc($result);
    echo $row['Field'] . '<br>';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
// function calculateGrade($score, $total)
// {
//     // Calculate the percentage
//     $percentage = ($score / $total) * 100;

//     // Determine the grade based on the percentage
//     if ($percentage >= 80) {
//         $grade = 'A+';
//     } elseif ($percentage >= 70) {
//         $grade = 'A';
//     } elseif ($percentage >= 60) {
//         $grade = 'A-';
//     } elseif ($percentage >= 50) {
//         $grade = 'B';
//     } elseif ($percentage >= 40) {
//         $grade = 'C';
//     } elseif ($percentage >= 33) {
//         $grade = 'D';
//     } else {
//         $grade = 'F';
//     }

//     // Return the grade
//     return $grade;
// }
// echo calculateGrade(32, 100);
// $bangla_1st_full_marks = $row['bangla_1st_full_marks'];
// $bangla_1st_MCQ = $row['bangla_1st_MCQ'];
// $bangla_1st_CQ = $row['bangla_1st_CQ'];
// $bangla_2nd_full_marks = $row['bangla_2nd_full_marks'];
// $bangla_2nd_MCQ = $row['bangla_2nd_MCQ'];
// $bangla_2nd_CQ = $row['bangla_2nd_CQ'];
// $english_1st_full_marks = $row['english_1st_full_marks'];
// $english_1st_MCQ = $row['english_1st_MCQ'];
// $english_1st_CQ = $row['english_1st_CQ'];
// $english_2nd_full_marks = $row['english_2nd_full_marks'];
// $english_2nd_MCQ = $row['english_2nd_MCQ'];
// $english_2nd_CQ = $row['english_2nd_CQ'];
// $math_full_marks = $row['math_full_marks'];
// $math_MCQ = $row['math_MCQ'];
// $math_CQ = $row['math_CQ'];
// $bgs_full_marks = $row['bgs_full_marks'];
// $bgs_MCQ = $row['bgs_MCQ'];
// $bgs_CQ = $row['bgs_CQ'];
// $religion_full_marks = $row['religion_full_marks'];
// $religion_MCQ = $row['religion_MCQ'];
// $religion_CQ = $row['religion_CQ'];
// $science_full_marks = $row['science_full_marks'];
// $science_MCQ = $row['science_MCQ'];
// $science_CQ = $row['science_CQ'];
$biology_full_marks = $row['biology_full_marks'];
$biology_MCQ = $row['biology_MCQ'];
$biology_CQ = $row['biology_CQ'];

$biology = $biology_MCQ + $biology_CQ;

$chemistry_full_marks = $row['chemistry_full_marks'];
$chemistry_MCQ = $row['chemistry_MCQ'];
$chemistry_CQ = $row['chemistry_CQ'];

$chemistry = $chemistry_MCQ + $chemistry_CQ;

$physics_full_marks = $row['physics_full_marks'];
$physics_MCQ = $row['physics_MCQ'];
$physics_CQ = $row['physics_CQ'];

$physics = $physics_MCQ + $physics_CQ;

$higher_math_full_marks = $row['higher_math_full_marks'];
$higher_math_MCQ = $row['higher_math_MCQ'];
$higher_math_CQ = $row['higher_math_CQ'];

$h_math = $higher_math_MCQ + $higher_math_CQ;

$agricultural_studies_full_marks = $row['agricultural_studies_full_marks'];
$agricultural_studies_MCQ = $row['agricultural_studies_MCQ'];
$agricultural_studies_CQ = $row['agricultural_studies_CQ'];

$agricultural = $agricultural_studies_MCQ + $agricultural_studies_CQ;


$finance_full_marks = $row['finance_full_marks'];
$finance_MCQ = $row['finance_MCQ'];
$finance_CQ = $row['finance_CQ'];

$finance = $finance_MCQ + $finance_CQ;


$accounting_full_marks = $row['accounting_full_marks'];
$accounting_MCQ = $row['accounting_MCQ'];
$accounting_CQ = $row['accounting_CQ'];

$accounting = $accounting_MCQ + $accounting_CQ;


$business_ent_full_marks = $row['business_ent_full_marks'];
$business_ent_MCQ = $row['business_ent_MCQ'];
$business_ent_CQ = $row['business_ent_CQ'];

$business = $business_ent_MCQ + $business_ent_CQ;


$economical_full_marks = $row['economical_full_marks'];
$economical_MCQ = $row['economical_MCQ'];
$economical_CQ = $row['economical_CQ'];

$economical = $economical_MCQ + $economical_CQ;

$geography_full_marks = $row['geography_full_marks'];
$geography_MCQ = $row['geography_MCQ'];
$geography_CQ = $row['geography_CQ'];

$geography = $geography_MCQ + $geography_CQ;

$history_full_marks = $row['history_full_marks'];
$history_MCQ = $row['history_MCQ'];
$history_CQ = $row['history_CQ'];

$history = $history_MCQ + $history_CQ;