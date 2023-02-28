<?php
if (isset($_POST['submit'])) {
    include '../../../config/database.php';

    // Get data from form using $_POST
    $exam_type = $_POST['exam_type'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $branch = $_POST['branch'];
    $groupName = $_POST['groupName'];

    $bangla_1st_full_marks = $_POST['bangla_1st_full_marks'];
    $bangla_1st_MCQ = $_POST['bangla_1st_MCQ'];
    $bangla_1st_CQ = $_POST['bangla_1st_CQ'];
    $bangla_2nd_full_marks = $_POST['bangla_2nd_full_marks'];
    $bangla_2nd_MCQ = $_POST['bangla_2nd_MCQ'];
    $bangla_2nd_CQ = $_POST['bangla_2nd_CQ'];
    $english_1st_full_marks = $_POST['english_1st_full_marks'];
    $english_1st_MCQ = $_POST['english_1st_MCQ'];
    $english_1st_CQ = $_POST['english_1st_CQ'];
    $english_2nd_full_marks = $_POST['english_2nd_full_marks'];
    $english_2nd_MCQ = $_POST['english_2nd_MCQ'];
    $english_2nd_CQ = $_POST['english_2nd_CQ'];
    $math_full_marks = $_POST['math_full_marks'];
    $math_MCQ = $_POST['math_MCQ'];
    $math_CQ = $_POST['math_CQ'];
    $bgs_full_marks = $_POST['bgs_full_marks'];
    $bgs_MCQ = $_POST['bgs_MCQ'];
    $bgs_CQ = $_POST['bgs_CQ'];
    $religion_full_marks = $_POST['religion_full_marks'];
    $religion_MCQ = $_POST['religion_MCQ'];
    $religion_CQ = $_POST['religion_CQ'];
    $science_full_marks = $_POST['science_full_marks'];
    $science_MCQ = $_POST['science_MCQ'];
    $science_CQ = $_POST['science_CQ'];

    // sssssssssssssssssssssssss
    $biology_full_marks = $_POST['biology_full_marks'];
    $biology_MCQ = $_POST['biology_MCQ'];
    $biology_CQ = $_POST['biology_CQ'];
    $chemistry_full_marks = $_POST['chemistry_full_marks'];
    $chemistry_MCQ = $_POST['chemistry_MCQ'];
    $chemistry_CQ = $_POST['chemistry_CQ'];
    $physics_full_marks = $_POST['physics_full_marks'];
    $physics_MCQ = $_POST['physics_MCQ'];
    $physics_CQ = $_POST['physics_CQ'];
    $higher_math_full_marks = $_POST['higher_math_full_marks'];
    $higher_math_MCQ = $_POST['higher_math_MCQ'];
    $higher_math_CQ = $_POST['higher_math_CQ'];
    $agricultural_studies_full_marks = $_POST['agricultural_studies_full_marks'];
    $agricultural_studies_MCQ = $_POST['agricultural_studies_MCQ'];
    $agricultural_studies_CQ = $_POST['agricultural_studies_CQ'];
    // cooooooooooooooo
    // Finance
    $finance_full_marks = $_POST['finance_full_marks'];
    $finance_MCQ = $_POST['finance_MCQ'];
    $finance_CQ = $_POST['finance_CQ'];
    $accounting_full_marks = $_POST['accounting_full_marks'];
    $accounting_MCQ = $_POST['accounting_MCQ'];
    $accounting_CQ = $_POST['accounting_CQ'];
    $business_ent_full_marks = $_POST['business_ent_full_marks'];
    $business_ent_MCQ = $_POST['business_ent_MCQ'];
    $business_ent_CQ = $_POST['business_ent_CQ'];

    // arrrrrrrrrrrrrrrrrrr
    // Economics
    $economical_full_marks = $_POST['economical_full_marks'];
    $economical_MCQ = $_POST['economical_MCQ'];
    $economical_CQ = $_POST['economical_CQ'];
    $geography_full_marks = $_POST['geography_full_marks'];
    $geography_MCQ = $_POST['geography_MCQ'];
    $geography_CQ = $_POST['geography_CQ'];
    $history_full_marks = $_POST['history_full_marks'];
    $history_MCQ = $_POST['history_MCQ'];
    $history_CQ = $_POST['history_CQ'];
    $date = date("Y");
    if ($class == "নবম" || $class == "দশম") {
        if ($groupName == 'science') {

            $sql = "INSERT INTO result_info_science (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ, biology_full_marks, biology_MCQ, biology_CQ, chemistry_full_marks, chemistry_MCQ, chemistry_CQ, physics_full_marks, physics_MCQ, physics_CQ, higher_math_full_marks, higher_math_MCQ, higher_math_CQ, agricultural_studies_full_marks, agricultural_studies_MCQ, agricultural_studies_CQ,date)
            VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ', '$biology_full_marks', '$biology_MCQ', '$biology_CQ', '$chemistry_full_marks', '$chemistry_MCQ', '$chemistry_CQ', '$physics_full_marks', '$physics_MCQ', '$physics_CQ', '$higher_math_full_marks', '$higher_math_MCQ', '$higher_math_CQ', '$agricultural_studies_full_marks', '$agricultural_studies_MCQ', '$agricultural_studies_CQ','$date')";

            if (mysqli_query($conn, $sql)) {
                echo "Teacher Data Added successfully";
            } else {
                echo "fail!Some thing is wrong !";
            }
        } else if ($groupName == 'commerce') {
            $sql = "INSERT INTO result_info_commerce (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ, finance_full_marks, finance_MCQ, finance_CQ, accounting_full_marks, accounting_MCQ, accounting_CQ, business_ent_full_marks, business_ent_MCQ, business_ent_CQ,date)
            VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ', '$finance_full_marks', '$finance_MCQ', '$finance_CQ', '$accounting_full_marks', '$accounting_MCQ', '$accounting_CQ', '$business_ent_full_marks', '$business_ent_MCQ', '$business_ent_CQ','$date')";

            if (mysqli_query($conn, $sql)) {
                echo "Teacher Data Added successfully";
            } else {
                echo "fail!Some thing is wrong !";
            }
        } else if ($groupName == 'arts') {
            $sql = "INSERT INTO result_info_arts (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ,economical_full_marks, economical_MCQ, economical_CQ, geography_full_marks, geography_MCQ, geography_CQ, history_full_marks, history_MCQ, history_CQ,date)
            VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ', '$economical_full_marks', '$economical_MCQ', '$economical_CQ', '$geography_full_marks', '$geography_MCQ', '$geography_CQ', '$history_full_marks', '$history_MCQ', '$history_CQ','$date')";

            if (mysqli_query($conn, $sql)) {
                echo "Teacher Data Added successfully";
            } else {
                echo "fail!Some thing is wrong !";
            }
        }
    } else {
        $sql = "INSERT INTO result_info_general (exam_type,roll, class, branch, groupName, bangla_1st_full_marks, bangla_1st_MCQ, bangla_1st_CQ, bangla_2nd_full_marks, bangla_2nd_MCQ, bangla_2nd_CQ, english_1st_full_marks, english_1st_MCQ, english_1st_CQ, english_2nd_full_marks, english_2nd_MCQ, english_2nd_CQ, math_full_marks, math_MCQ, math_CQ, bgs_full_marks, bgs_MCQ, bgs_CQ, religion_full_marks, religion_MCQ, religion_CQ, science_full_marks, science_MCQ, science_CQ,date)
    VALUES ('$exam_type','$roll', '$class', '$branch', '$groupName', '$bangla_1st_full_marks', '$bangla_1st_MCQ', '$bangla_1st_CQ', '$bangla_2nd_full_marks', '$bangla_2nd_MCQ', '$bangla_2nd_CQ', '$english_1st_full_marks', '$english_1st_MCQ', '$english_1st_CQ', '$english_2nd_full_marks', '$english_2nd_MCQ', '$english_2nd_CQ', '$math_full_marks', '$math_MCQ', '$math_CQ', '$bgs_full_marks', '$bgs_MCQ', '$bgs_CQ', '$religion_full_marks', '$religion_MCQ', '$religion_CQ', '$science_full_marks', '$science_MCQ', '$science_CQ','$date')";




        if (mysqli_query($conn, $sql)) {
            echo "Teacher Data Added successfully";
        } else {
            echo "fail!Some thing is wrong !";
        }
    }
}
