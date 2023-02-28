<?php

include("../../config/database.php");
if (isset($_POST['submit'])) {
    $tableName = 'result_info_general';
    $exam_type = $_POST['exam_type'];
    $date = $_POST['date'];
    $class = $_POST['class'];
    $branch = $_POST['branch'];
    $group = $_POST['group'];
    $roll = $_POST['roll'];
    if ($class == "নবম" || $class == "দশম") {
        if ($group == 'science') {
            $tableName = 'result_info_science';
        } else if ($group == 'commerce') {
            $tableName = 'result_info_commerce';
        } else if ($group == 'arts') {
            $tableName = 'result_info_arts';
        }
    }
    $sql = "SELECT * FROM $tableName 
INNER JOIN student_info ON $tableName.roll = student_info.roll and $tableName.class = student_info.class and $tableName.branch = student_info.branch WHERE $tableName.exam_type = '$exam_type' AND $tableName.class = '$class' AND $tableName.branch = '$branch' AND $tableName.groupName = '$group' AND $tableName.date = $date AND $tableName.roll = $roll;";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name =  $row['Student_Name'];
    $parent_name =  $row['parent_name'];
    $branch =  $row['branch'];
    $class =  $row['class'];
    $roll =  $row['roll'];
    $village =  $row['village'];
    $id =  $row['id'];
    $groupName =  $row['groupName'];

    $bangla_1st_full_marks = $row['bangla_1st_full_marks'];
    $bangla_1st_MCQ = $row['bangla_1st_MCQ'];
    $bangla_1st_CQ = $row['bangla_1st_CQ'];

    $t_bangla_1st = $bangla_1st_MCQ + $bangla_1st_CQ;

    $bangla_2nd_full_marks = $row['bangla_2nd_full_marks'];
    $bangla_2nd_MCQ = $row['bangla_2nd_MCQ'];
    $bangla_2nd_CQ = $row['bangla_2nd_CQ'];

    $t_bangla_2nd = $bangla_2nd_MCQ + $bangla_2nd_CQ;
    $bangla_total = $t_bangla_1st + $t_bangla_2nd;

    $english_1st_full_marks = $row['english_1st_full_marks'];
    $english_1st_MCQ = $row['english_1st_MCQ'];
    $english_1st_CQ = $row['english_1st_CQ'];

    $t_english_1st = $english_1st_MCQ + $english_1st_CQ;

    $english_2nd_full_marks = $row['english_2nd_full_marks'];
    $english_2nd_MCQ = $row['english_2nd_MCQ'];
    $english_2nd_CQ = $row['english_2nd_CQ'];

    $t_english_2nd = $english_2nd_MCQ + $english_2nd_CQ;
    $english_total = $t_english_1st + $t_english_2nd;

    $math_full_marks = $row['math_full_marks'];
    $math_MCQ = $row['math_MCQ'];
    $math_CQ = $row['math_CQ'];

    $math = $math_MCQ + $math_CQ;

    $bgs_full_marks = $row['bgs_full_marks'];
    $bgs_MCQ = $row['bgs_MCQ'];
    $bgs_CQ = $row['bgs_CQ'];

    $bgs = $bgs_MCQ + $bgs_CQ;

    $ict_full_marks = $row['ict_full_marks'];
    $ict_MCQ = $row['ict_MCQ'];
    $ict_CQ = $row['ict_CQ'];
    $ict = $ict_MCQ + $ict_CQ;

    $religion_full_marks = $row['religion_full_marks'];
    $religion_MCQ = $row['religion_MCQ'];
    $religion_CQ = $row['religion_CQ'];

    $religion = $religion_MCQ + $religion_CQ;

    $science_full_marks = $row['science_full_marks'];
    $science_MCQ = $row['science_MCQ'];
    $science_CQ = $row['science_CQ'];

    $science = $science_MCQ + $science_CQ;

    if ($group == 'science') {
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
    } else if ($group == 'commerce') {
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
    } else if ($group == 'arts') {
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
    }

    function calculateGrade($score, $total)
    {
        // Calculate the percentage
        $percentage = ($score / $total) * 100;

        // Determine the grade based on the percentage
        if ($percentage >= 80) {
            $grade = 'A+';
        } elseif ($percentage >= 70) {
            $grade = 'A';
        } elseif ($percentage >= 60) {
            $grade = 'A-';
        } elseif ($percentage >= 50) {
            $grade = 'B';
        } elseif ($percentage >= 40) {
            $grade = 'C';
        } elseif ($percentage >= 33) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        // Return the grade
        return $grade;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- link include -->
    <?php include '../../components/link.php'; ?>

    <style>
        label {
            font-weight: bolder;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            margin: 8px 8px;
            color: green;
        }
    </style>
</head>

<body>

    <!-- header img -->
    <?php include '../../components/header_img.php'; ?>

    <!-- navber -->
    <?php include '../../components/navber.php'; ?>

    <!-- navber down space -->
    <div class="container content_wrap">
        <div class="row">
            <div class="pd-4"></div>
        </div>
    </div>


    <section>
        <div class="container content_wrap">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">

                    <div class="row">
                        <div class="col-12">
                            <?php include '../../components/notice_mar.php'; ?>
                        </div>
                    </div>



                    <div class="row">

                        <div class="contact-wrap w-100 p-md-5">


                            <td valign="middle" align="center">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td valign="middle" align="center">
                                                <table class="black12" width="100%" cellspacing="1" cellpadding="3" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="12%" valign="middle" bgcolor="#EEEEEE" align="left">Roll No</td>
                                                            <td width="27%" valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $roll; ?></td>
                                                            <td width="22%" valign="middle" bgcolor="#EEEEEE" align="left">Name</td>
                                                            <td width="39%" valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $name ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="middle" bgcolor="#AFB7BE" align="left">Board</td>
                                                            <td valign="middle" bgcolor="#AFB7BE" align="left">DHAKA</td>
                                                            <td valign="middle" bgcolor="#AFB7BE" align="left">Parent Name</td>
                                                            <td valign="middle" bgcolor="#AFB7BE" align="left"><?php echo $parent_name ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left">Group</td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $groupName ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left">Village Name</td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $village ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td valign="middle" bgcolor="#AFB7BE" align="left">Type</td>
                                                            <td valign="middle" bgcolor="#AFB7BE" align="left">REGULAR</td>
                                                            <td valign="middle" bgcolor="#AFB7BE" align="left">ID</td>
                                                            <td valign="middle" bgcolor="#AFB7BE" align="left"><?php echo $id ?></td>

                                                        </tr>
                                                        <tr>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left">Result</td>
                                                            <td class="black12bold" valign="middle" bgcolor="#EEEEEE" align="left">PASSED</td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left">Institute</td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left">BHAI GHAT HIGH SCHOOL</td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="middle" bgcolor="#AFB7BE" align="left">GPA</td>
                                                            <td class="black12bold" colspan="3" valign="middle" bgcolor="#AFB7BE" align="left">4.67</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle" height="40" align="center"><span class="black16bold">Grade Sheet</span></td>
                                        </tr>
                                        <tr>
                                            <td valign="middle" align="center">
                                                <table class="black12" width="100%" cellspacing="1" cellpadding="3" border="0">
                                                    <tbody>
                                                        <tr class="black12bold">
                                                            <th valign="middle" bgcolor="#AFB7BE" align="left">Subject</th>
                                                            <th valign="middle" bgcolor="#AFB7BE" align="left">Full Marks</th>
                                                            <th valign="middle" bgcolor="#AFB7BE" align="left">CQ</th>
                                                            <th valign="middle" bgcolor="#AFB7BE" align="left">MCQ</th>
                                                            <th valign="middle" bgcolor="#AFB7BE" align="left">Total</th>
                                                            <th valign="middle" bgcolor="#AFB7BE" align="left">Grade</th>
                                                        </tr>
                                                        <tr>

                                                            <td valign="middle" bgcolor="#EEEEEE" align="left">BANGLA FIRST</td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $bangla_1st_full_marks ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $bangla_1st_CQ ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $bangla_1st_MCQ ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left" rowspan="2"><?php echo $bangla_total ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left" rowspan="2"><?php echo calculateGrade($t_bangla_2nd +  $t_bangla_1st, $bangla_1st_full_marks + $bangla_2nd_full_marks); ?></td>
                                                        </tr>
                                                        <tr>

                                                            <td valign="middle" bgcolor="#EEEEEE" align="left">BANGLA SECOND</td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $bangla_2nd_full_marks ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $bangla_2nd_CQ ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $bangla_2nd_MCQ ?></td>


                                                        </tr>
                                                        <tr>

                                                            <td valign="middle" bgcolor="#DEE1E4" align="left">ENGLISH FIRST</td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $english_1st_full_marks ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $english_1st_CQ ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $english_1st_MCQ ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left" rowspan="2"><?php echo $english_total ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left" rowspan="2"><?php echo calculateGrade($t_english_2nd +  $t_english_1st, $english_1st_full_marks + $english_2nd_full_marks); ?></td>
                                                        </tr>
                                                        <tr>

                                                            <td valign="middle" bgcolor="#DEE1E4" align="left">ENGLISH SECOND</td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $english_2nd_full_marks ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $english_2nd_CQ ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $english_2nd_MCQ ?></td>

                                                        </tr>


                                                        <tr>

                                                            <td valign="middle" bgcolor="#EEEEEE" align="left">MATH</td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $math_full_marks ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $math_CQ ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $math_MCQ ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $math ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo calculateGrade($math, $math_full_marks); ?></td>
                                                        </tr>

                                                        <tr>

                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"> BANGLADESH AND GLOBAL STUDIES</td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $bgs_full_marks ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $bgs_CQ ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $bgs_MCQ ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $bgs ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo calculateGrade($bgs, $bgs_full_marks); ?></td>
                                                        </tr>

                                                        <tr>

                                                            <td valign="middle" bgcolor="#EEEEEE" align="left">RELIGION AND MORAL EDUCATION</td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $religion_full_marks ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $religion_CQ ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $religion_MCQ ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $religion ?></td>
                                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo calculateGrade($religion, $religion_full_marks); ?></td>
                                                        </tr>

                                                        <tr>

                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"> INFORMATION AND COMMUNICATION TECHNOLOGY</td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $ict_full_marks ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $ict_CQ ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $ict_MCQ ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $ict ?></td>
                                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo calculateGrade($ict, $ict_full_marks); ?></td>
                                                        </tr>

                                                        <?php
                                                        if ($group == 'science') {
                                                        ?>
                                                            <tr>

                                                                <td valign="middle" bgcolor="#EEEEEE" align="left">PHYSICS</td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $physics_full_marks ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $physics_CQ ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $physics_MCQ ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $physics ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo calculateGrade($physics, $physics_full_marks); ?></td>
                                                            </tr>
                                                            <tr>

                                                                <td valign="middle" bgcolor="#DEE1E4" align="left">CHEMISTRY</td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $chemistry_full_marks ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $chemistry_CQ ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $chemistry_MCQ ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $chemistry ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo calculateGrade($chemistry, $chemistry_full_marks); ?></td>
                                                            </tr>

                                                            <tr>

                                                                <td valign="middle" bgcolor="#EEEEEE" align="left">BIOLOGY</td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $biology_full_marks ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $biology_CQ ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $biology_MCQ ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $biology ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo calculateGrade($biology, $biology_full_marks); ?></td>
                                                            </tr>
                                                            <tr>

                                                                <td valign="middle" bgcolor="#DEE1E4" align="left">HIGHER MATHEMATICS</td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $higher_math_full_marks ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $higher_math_CQ ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $higher_math_MCQ ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $h_math ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo calculateGrade($h_math, $higher_math_full_marks); ?></td>
                                                            </tr>

                                                            <tr>

                                                                <td valign="middle" bgcolor="#EEEEEE" align="left">BIOLOGY</td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $biology_full_marks ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $biology_CQ ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $biology_MCQ ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $biology ?></td>
                                                                <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo calculateGrade($biology, $biology_full_marks); ?></td>
                                                            </tr>
                                                            <tr>

                                                                <td valign="middle" bgcolor="#DEE1E4" align="left">AGRICULTURAL STUDIES</td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $agricultural_full_marks ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $agricultural_CQ ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $agricultural_MCQ ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $agricultural ?></td>
                                                                <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo calculateGrade($agricultural, $agricultural_full_marks); ?></td>
                                                            </tr>
                                        </tr>
                                    <?php } else if ($group == 'commerce') {
                                    ?>
                                        <tr>

                                            <td valign="middle" bgcolor="#EEEEEE" align="left">FINANCE AND BANKING</td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $finance_full_marks ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $finance_CQ ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $finance_MCQ ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $finance ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo calculateGrade($finance, $finance_full_marks); ?></td>
                                        </tr>

                                        <tr>

                                            <td valign="middle" bgcolor="#DEE1E4" align="left"> ACCOUNTING</td>
                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $accounting_full_marks ?></td>
                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $accounting_CQ ?></td>
                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $accounting_MCQ ?></td>
                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $accounting ?></td>
                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo calculateGrade($accounting, $accounting_full_marks); ?></td>
                                        </tr>
                                        <tr>

                                            <td valign="middle" bgcolor="#EEEEEE" align="left">BUSINESS_ENT</td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $business_ent_full_marks ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $business_ent_CQ ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $business_ent_MCQ ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $business ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo calculateGrade($business, $business_ent_full_marks); ?></td>
                                        </tr>
                                    <?php } else if ($group == 'arts') {
                                    ?>
                                        <tr>

                                            <td valign="middle" bgcolor="#EEEEEE" align="left">ECONOMICAL</td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $economical_full_marks ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $economical_CQ ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $economical_MCQ ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $economical ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo calculateGrade($economical, $economical_full_marks); ?></td>
                                        </tr>
                                        <tr>

                                            <td valign="middle" bgcolor="#DEE1E4" align="left">GEOGRAPHY</td>
                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $geography_full_marks ?></td>
                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $geography_CQ ?></td>
                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $geography_MCQ ?></td>
                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo $geography ?></td>
                                            <td valign="middle" bgcolor="#DEE1E4" align="left"><?php echo calculateGrade($geography, $geography_full_marks); ?></td>
                                        </tr>
                                        <tr>

                                            <td valign="middle" bgcolor="#EEEEEE" align="left">HISTORY</td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $history_full_marks ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $history_CQ ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $history_MCQ ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $history ?></td>
                                            <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo calculateGrade($history, $history_full_marks); ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                            </td>


                        </div>

                    </div>


                </div>

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <?php include '../../components/sideber.php'; ?>

                    <div class="pd-4"></div>

                    <?php include '../../components/official_link.php'; ?>

                    <div class="pd-4"></div>

                    <?php include '../../components/admit_notice.php'; ?>

                    <div class="pd-4"></div>
                </div>
            </div>

        </div>

    </section>


    <div class="container content_wrap">
        <footer>
            <?php include '../../components/fotter.php'; ?>

        </footer>
    </div>






    <?php include '../../components/script.php'; ?>
</body>

</html>