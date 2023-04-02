<?php

include("../../config/database.php");
if (isset($_POST['class'])) {
    $class = $_POST['class'];
    $branch = $_POST['branch'];
    $subject = $_POST['subject'];
    $groupName = $_POST['groupName'];
    $exam_type = $_POST['exam_type'];
    $date = $_POST['date'];
    $roll = $_POST['roll'];



    if ($class == 'নবম' || $class == 'দশম') {
        if ($groupName == 'science') {
            $sql = "SELECT b1.id, b1.class, b1.branch, b1.groupName, b1.roll, b1.exam_type, b1.date, b1.mcq, b1.cq, b1.total, b1.grade, b1.name,
                        b2.mcq AS bangla_2nd_mcq, b2.cq AS bangla_2nd_cq, b2.total AS bangla_2nd_total, b2.grade AS bangla_2nd_grade,
                        e1.mcq AS english_1st_mcq, e1.cq AS english_1st_cq, e1.total AS english_1st_total, e1.grade AS english_1st_grade,
                        e2.mcq AS english_2nd_mcq, e2.cq AS english_2nd_cq, e2.total AS english_2nd_total, e2.grade AS english_2nd_grade,
                        m.mcq AS math_mcq, m.cq AS math_cq, m.total AS math_total, m.grade AS math_grade,
                        bgs.mcq AS bgs_mcq, bgs.cq AS bgs_cq, bgs.total AS bgs_total, bgs.grade AS bgs_grade,
                        i.mcq AS ict_mcq, i.cq AS ict_cq, i.total AS ict_total, i.grade AS ict_grade,
                        r.mcq AS religion_mcq, r.cq AS religion_cq, r.total AS religion_total, r.grade AS religion_grade,
                        
                        bio.mcq AS biology_mcq, bio.cq AS biology_cq, bio.total AS biology_total, bio.grade AS biology_grade,
                        chem.mcq AS chemistry_mcq, chem.cq AS chemistry_cq, chem.total AS chemistry_total, chem.grade AS chemistry_grade,
                        phy.mcq AS physics_mcq, phy.cq AS physics_cq, phy.total AS physics_total, phy.grade AS physics_grade,
                        hm.mcq AS higher_math_mcq, hm.cq AS higher_math_cq, hm.total AS higher_math_total, hm.grade AS higher_math_grade,
                        ags.mcq AS agricultural_studies_mcq, ags.cq AS agricultural_studies_cq, ags.total AS agricultural_studies_total, ags.grade AS agricultural_studies_grade
                    FROM bangla_1st b1
                    LEFT JOIN bangla_2nd b2 ON b1.id = b2.id AND b1.class = b2.class AND b1.branch = b2.branch
                    LEFT JOIN english_1st e1 ON b1.id = e1.id AND b1.class = e1.class AND b1.branch = e1.branch
                    LEFT JOIN english_2nd e2 ON b1.id = e2.id AND b1.class = e2.class AND b1.branch = e2.branch
                    LEFT JOIN math m ON b1.id = m.id AND b1.class = m.class AND b1.branch = m.branch
                    LEFT JOIN bgs ON b1.id = bgs.id AND b1.class = bgs.class AND b1.branch = bgs.branch
                    LEFT JOIN ict i ON b1.id = i.id AND b1.class = i.class AND b1.branch = i.branch
                    LEFT JOIN religion r ON b1.id = r.id AND b1.class = r.class AND b1.branch = r.branch
                    LEFT JOIN biology bio ON b1.id = bio.id AND b1.class = bio.class AND b1.branch = bio.branch
                    LEFT JOIN chemistry chem ON b1.id = chem.id AND b1.class = chem.class AND b1.branch = chem.branch
                    LEFT JOIN physics phy ON b1.id = phy.id AND b1.class = phy.class AND b1.branch = phy.branch
                    LEFT JOIN higher_math hm ON b1.id = hm.id AND b1.class = hm.class AND b1.branch = hm.branch
                    LEFT JOIN agricultural_studies ags ON b1.id = ags.id AND b1.class = ags.class AND b1.branch = ags.branch WHERE b1.class = '$class' and b1.branch = '$branch' and b1.groupName = '$groupName' and b1.exam_type = '$exam_type' and b1.date = '$date' and b1.roll = '$roll'
        ;";
        } else if ($groupName == 'commerce') {
            $sql = "SELECT b1.id, b1.class, b1.branch, b1.groupName, b1.roll, b1.exam_type, b1.date, b1.mcq, b1.cq, b1.total, b1.grade, b1.name,
            b2.mcq AS bangla_2nd_mcq, b2.cq AS bangla_2nd_cq, b2.total AS bangla_2nd_total, b2.grade AS bangla_2nd_grade,
            e1.mcq AS english_1st_mcq, e1.cq AS english_1st_cq, e1.total AS english_1st_total, e1.grade AS english_1st_grade,
            e2.mcq AS english_2nd_mcq, e2.cq AS english_2nd_cq, e2.total AS english_2nd_total, e2.grade AS english_2nd_grade,
            m.mcq AS math_mcq, m.cq AS math_cq, m.total AS math_total, m.grade AS math_grade,
            bgs.mcq AS bgs_mcq, bgs.cq AS bgs_cq, bgs.total AS bgs_total, bgs.grade AS bgs_grade,
            i.mcq AS ict_mcq, i.cq AS ict_cq, i.total AS ict_total, i.grade AS ict_grade,
            r.mcq AS religion_mcq, r.cq AS religion_cq, r.total AS religion_total, r.grade AS religion_grade,
            s.mcq AS science_mcq, s.cq AS science_cq, s.total AS science_total, s.grade AS science_grade,
            ec.mcq AS economical_mcq, ec.cq AS economical_cq, ec.total AS economical_total, ec.grade AS economical_grade,
            geo.mcq AS geography_mcq, geo.cq AS geography_cq, geo.total AS geography_total, geo.grade AS geography_grade,
            h.mcq AS history_mcq, h.cq AS history_cq, h.total AS history_total, h.grade AS history_grade
        FROM bangla_1st b1
        LEFT JOIN bangla_2nd b2 ON b1.id = b2.id AND b1.class = b2.class AND b1.branch = b2.branch
        LEFT JOIN english_1st e1 ON b1.id = e1.id AND b1.class = e1.class AND b1.branch = e1.branch
        LEFT JOIN english_2nd e2 ON b1.id = e2.id AND b1.class = e2.class AND b1.branch = e2.branch
        LEFT JOIN math m ON b1.id = m.id AND b1.class = m.class AND b1.branch = m.branch
        LEFT JOIN bgs ON b1.id = bgs.id AND b1.class = bgs.class AND b1.branch = bgs.branch
        LEFT JOIN ict i ON b1.id = i.id AND b1.class = i.class AND b1.branch = i.branch
        LEFT JOIN religion r ON b1.id = r.id AND b1.class = r.class AND b1.branch = r.branch
        LEFT JOIN science s ON b1.id = s.id AND b1.class = s.class AND b1.branch = s.branch
        LEFT JOIN economical ec ON b1.id = ec.id AND b1.class = ec.class AND b1.branch = ec.branch
        LEFT JOIN geography geo ON b1.id = geo.id AND b1.class = geo.class AND b1.branch = geo.branch
        LEFT JOIN history h ON b1.id = h.id AND b1.class = h.class AND b1.branch = h.branch WHERE b1.class = '$class' and b1.branch = '$branch' and b1.groupName = '$groupName' and b1.exam_type = '$exam_type' and b1.date = '$date' and b1.roll = '$roll'
        ;";
        } else if ($groupName == 'arts') {
            $sql = "SELECT b1.id, b1.class, b1.branch, b1.groupName, b1.roll, b1.exam_type, b1.date, 
            b1.mcq, b1.cq, b1.total, b1.grade, b1.name,
            b2.mcq AS bangla_2nd_mcq, b2.cq AS bangla_2nd_cq, b2.total AS bangla_2nd_total, b2.grade AS bangla_2nd_grade,
            e1.mcq AS english_1st_mcq, e1.cq AS english_1st_cq, e1.total AS english_1st_total, e1.grade AS english_1st_grade,
            e2.mcq AS english_2nd_mcq, e2.cq AS english_2nd_cq, e2.total AS english_2nd_total, e2.grade AS english_2nd_grade,
            m.mcq AS math_mcq, m.cq AS math_cq, m.total AS math_total, m.grade AS math_grade,
            bgs.mcq AS bgs_mcq, bgs.cq AS bgs_cq, bgs.total AS bgs_total, bgs.grade AS bgs_grade,
            i.mcq AS ict_mcq, i.cq AS ict_cq, i.total AS ict_total, i.grade AS ict_grade,
            r.mcq AS religion_mcq, r.cq AS religion_cq, r.total AS religion_total, r.grade AS religion_grade,
            s.mcq AS science_mcq, s.cq AS science_cq, s.total AS science_total, s.grade AS science_grade,
            fin.mcq AS finance_mcq, fin.cq AS finance_cq, fin.total AS finance_total, fin.grade AS finance_grade,
            acc.mcq AS accounting_mcq, acc.cq AS accounting_cq, acc.total AS accounting_total, acc.grade AS accounting_grade,
            be.mcq AS business_ent_mcq, be.cq AS business_ent_cq, be.total AS business_ent_total, be.grade AS business_ent_grade
        FROM bangla_1st b1
        LEFT JOIN bangla_2nd b2 ON b1.id = b2.id AND b1.class = b2.class AND b1.branch = b2.branch
        LEFT JOIN english_1st e1 ON b1.id = e1.id AND b1.class = e1.class AND b1.branch = e1.branch
        LEFT JOIN english_2nd e2 ON b1.id = e2.id AND b1.class = e2.class AND b1.branch = e2.branch
        LEFT JOIN math m ON b1.id = m.id AND b1.class = m.class AND b1.branch = m.branch
        LEFT JOIN bgs ON b1.id = bgs.id AND b1.class = bgs.class AND b1.branch = bgs.branch
        LEFT JOIN ict i ON b1.id = i.id AND b1.class = i.class AND b1.branch = i.branch
        LEFT JOIN religion r ON b1.id = r.id AND b1.class = r.class AND b1.branch = r.branch
        LEFT JOIN science s ON b1.id = s.id AND b1.class = s.class AND b1.branch = s.branch
        LEFT JOIN finance fin ON b1.id = fin.id AND b1.class = fin.class AND b1.branch =fin.branch
        LEFT JOIN accounting acc ON b1.id = acc.id AND b1.class = acc.class AND b1.branch = acc.branch
        LEFT JOIN business be ON b1.id = be.id AND b1.class = be.class AND b1.branch = be.branch WHERE b1.class = '$class' and b1.branch = '$branch' and b1.groupName = '$groupName' and b1.exam_type = '$exam_type' and b1.date = '$date' and b1.roll = '$roll'
        ;";
        }
    } else {
        $sql = "SELECT b1.id, b1.class, b1.branch, b1.groupName, b1.roll, b1.exam_type, b1.date, b1.mcq, b1.cq, b1.total, b1.grade, b1.name,
       b2.mcq AS bangla_2nd_mcq, b2.cq AS bangla_2nd_cq, b2.total AS bangla_2nd_total, b2.grade AS bangla_2nd_grade,
       e1.mcq AS english_1st_mcq, e1.cq AS english_1st_cq, e1.total AS english_1st_total, e1.grade AS english_1st_grade,
       e2.mcq AS english_2nd_mcq, e2.cq AS english_2nd_cq, e2.total AS english_2nd_total, e2.grade AS english_2nd_grade,
       m.mcq AS math_mcq, m.cq AS math_cq, m.total AS math_total, m.grade AS math_grade,
       bgs.mcq AS bgs_mcq, bgs.cq AS bgs_cq, bgs.total AS bgs_total, bgs.grade AS bgs_grade,
       i.mcq AS ict_mcq, i.cq AS ict_cq, i.total AS ict_total, i.grade AS ict_grade,
       r.mcq AS religion_mcq, r.cq AS religion_cq, r.total AS religion_total, r.grade AS religion_grade,
       s.mcq AS science_mcq, s.cq AS science_cq, s.total AS science_total, s.grade AS science_grade
FROM bangla_1st b1
LEFT JOIN bangla_2nd b2 ON b1.id = b2.id AND b1.class = b2.class AND b1.branch = b2.branch
LEFT JOIN english_1st e1 ON b1.id = e1.id AND b1.class = e1.class AND b1.branch = e1.branch
LEFT JOIN english_2nd e2 ON b1.id = e2.id AND b1.class = e2.class AND b1.branch = e2.branch
LEFT JOIN math m ON b1.id = m.id AND b1.class = m.class AND b1.branch = m.branch
LEFT JOIN bgs ON b1.id = bgs.id AND b1.class = bgs.class AND b1.branch = bgs.branch
LEFT JOIN ict i ON b1.id = i.id AND b1.class = i.class AND b1.branch = i.branch
LEFT JOIN religion r ON b1.id = r.id AND b1.class = r.class AND b1.branch = r.branch
LEFT JOIN science s ON b1.id = s.id AND b1.class = s.class AND b1.branch = s.branch WHERE b1.class = '$class' and b1.branch = '$branch' and b1.groupName = '$groupName' and b1.exam_type = '$exam_type' and b1.date = '$date' and b1.roll = '$roll'

";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>



    <style>
        html,
        body,
        .intro {
            margin: 5px;
            height: 100%;
            font-family: Noto Sans Bengali;
            background: #d9d9d9;

        }

        button {
            padding: 8px;
            background: green;
            color: white;
            font-weight: bolder;
            font-size: larger;
            border-radius: 5px;
            cursor: pointer;
        }

        @media (max-width: 480px) {
            table {
                width: 100%;
                /* height: 200px; */
                margin-bottom: 5px;

            }

            /* styles for mobile devices go here */
        }

        table {
            width: 70%;
            /* height: 200px; */
            margin-bottom: 5px;

        }

        td {
            color: black;
            border-bottom: none;
            border-right: none;
            /* border: none; */
        }









        table {
            border: none;
            border-collapse: collapse;
        }

        th,
        td {
            background: white;
            border-top: 2px solid black;
            border-left: 2px solid black;
            /* border-collapse: collapse; */

        }

        th {
            text-align: center;
        }

        td {
            text-align: left;
        }
    </style>
</head>

<body>
    <center><button class='button' onclick="generatePDF()">Download</button></center>
    <center><a href="index.php" style="font-size: larger;">Back</a></center>
    <br>
    <!-- <h1>Mark Sheet</h1> -->
    <table align="center" id="example">
        <thead>

            <tr>
                <th style="border: none;text-align: left;padding-left:10px">
                    <img src="<?php echo $webName ?>/img/logo/bhaighatlogo1.png" alt="eee" width="70px" height="70px">


                </th>
                <th style="border: none;text-align:right" colspan="6">
                    <h6><?php echo $webName ?>
                </th>

            </tr>
            <tr>
                <th colspan="5" style="border: none;">
                    <h1>ভাইঘাট উচ্চ বিদ্যালয় </h1>
                    ধনবাড়ী ,টাঙ্গাইল
                    <h2><?php echo $row['exam_type'] ?> পরীক্ষার ফলাফল <?php echo $row['date'] ?></h2>
                    <?php
                    $id = $row["id"];
                    $codeResult = mysqli_query($conn, "SELECT * FROM `student_info2` WHERE id = '$id'");
                    if ($codeResult !== false && mysqli_num_rows($codeResult) > 0) {
                        $codeRow = mysqli_fetch_assoc($codeResult);
                        $code = $codeRow["St_Code"];
                        // process the row data with the St_Code value
                    } else {
                        // handle the case where the St_Code is null or the query fails
                        $code = null; // or some default value
                        // you can also continue with the loop here, or skip to the next iteration using "continue;"
                    }
                    ?>
                </th>


            </tr>
            <tr>
                <th colspan="3" rowspan="10" style="border:none">
                    <table style="border-top:none">
                        <tr>
                            <th><?php echo $row['name'] ?></th>
                            <th>আইিড নং: <?php echo $row['id'] ?></th>

                        </tr>
                        <tr>
                            <th>শ্রেণী : <?php echo $row['class'] ?></th>
                            <th>সেকশন : <?php echo $row['branch'] ?></th>
                        </tr>
                        <tr>
                            <th>গ্রুপ : <?php echo $row['groupName'] ?></th>
                            <th>রোল : <?php echo $row['roll'] ?></th>
                        </tr>
                        <tr style="border-bottom: 2px solid black;border-right: 2px solid black;">
                            <th>ST Code : <?php echo $codeRow["St_Code"] ?></th>
                            <th>সেশন : <?php echo $codeRow['Session'] ?></th>
                            <th>
                                <img src="<?php echo $webName ?>/img/student/<?php echo $codeRow['img'] ?>" alt="Image" width="70px" height="70px">
                            </th>
                        </tr>
                    </table>
                </th>
                <th colspan="2">
                    Grade Point
                </th>
            </tr>





            <tr>
            <tr>
                <th>Grade</th>
                <th>Grade Point</th>
            </tr>


            <tr>
                <td>A+</td>
                <td>5.00</td>
            </tr>
            <tr>
                <td>A</td>
                <td>4.00</td>
            </tr>
            <tr>
                <td>A-</td>
                <td>3.50</td>
            </tr>
            <tr>
                <td>B</td>
                <td>3.00</td>
            </tr>
            <tr>
                <td>C</td>
                <td>2.00</td>
            </tr>
            <tr>
                <td>D</td>
                <td>1.00</td>
            </tr>
            <tr>
                <td style="border-bottom: 2px solid black;">F</td>
                <td style="border-bottom: 2px solid black;">0.00</td>

            </tr>
            </tr>



            <tr>
                <th colspan=" 6" style="border:none"><br><br><br></th>
            </tr>
            <tr>


                <th rowspan="2">Subject</th>
                <th colspan="4">Marks</th>
                <!-- <th rowspan="1" style="width: 100px; border:none"></th> -->
            </tr>

            <tr>

                <th style="width: 70px; ">MCQ</th>
                <th>CQ</th>
                <th>Total</th>
                <th>Grade</th>

                <!-- <th style=" border:none"></th> -->
            </tr>
            <?php
            function calculate_grade_point($total_marks, $total_subjects)
            {
                $average_marks = $total_marks / $total_subjects;
                if ($average_marks >= 80) {
                    return '5.00';
                } elseif ($average_marks >= 70) {
                    return '4.00';
                } elseif ($average_marks >= 60) {
                    return '3.50';
                } elseif ($average_marks >= 50) {
                    return '3.00';
                } elseif ($average_marks >= 40) {
                    return '2.00';
                } else {
                    return '0.00';
                }
            }


            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $i = 1;
                $total_marks = 0;
                $total_subjects = 0;

                // echo $name = $row["name"];
            ?>
                <tr>
                    <th>Bangla 1st</th>
                    <td><?php echo $row["mcq"]; ?></td>
                    <td><?php echo $row["cq"]; ?></td>
                    <td><?php echo $row["mcq"] + $row["cq"]; ?></td>
                    <td><?php echo calculate_grade_point($row["mcq"] + $row["cq"], 1); ?></td>
                </tr>
                <tr>
                    <th>Bangla 2nd</th>
                    <td><?php echo $row["bangla_2nd_mcq"]; ?></td>
                    <td><?php echo $row["bangla_2nd_cq"]; ?></td>
                    <td><?php echo $row["bangla_2nd_mcq"] + $row["bangla_2nd_cq"]; ?></td>
                    <td><?php echo calculate_grade_point($row["bangla_2nd_mcq"] + $row["bangla_2nd_cq"], 1); ?></td>
                </tr>
                <tr>
                    <th>English 1st</th>
                    <td><?php echo $row["english_1st_mcq"]; ?></td>
                    <td><?php echo $row["english_1st_cq"]; ?></td>
                    <td><?php echo $row["english_1st_mcq"] + $row["english_1st_cq"]; ?></td>
                    <td><?php echo calculate_grade_point($row["english_1st_mcq"] + $row["english_1st_cq"], 1); ?></td>
                </tr>
                <tr>
                    <th>English 2nd</th>
                    <td><?php echo $row["english_2nd_mcq"]; ?></td>
                    <td><?php echo $row["english_2nd_cq"]; ?></td>
                    <td><?php echo $row["english_2nd_mcq"] + $row["english_2nd_cq"]; ?></td>
                    <td><?php echo calculate_grade_point($row["english_2nd_mcq"] + $row["english_2nd_cq"], 1); ?></td>
                </tr>
                <tr>
                    <th>Math</th>
                    <td><?php echo $row["math_mcq"]; ?></td>
                    <td><?php echo $row["math_cq"]; ?></td>
                    <td><?php echo $row["math_mcq"] + $row["math_cq"]; ?></td>
                    <td><?php echo calculate_grade_point($row["math_mcq"] + $row["math_cq"], 1); ?></td>
                </tr>
                <tr>
                    <th>BGS</th>
                    <td><?php echo $row["bgs_mcq"]; ?></td>
                    <td><?php echo $row["bgs_cq"]; ?></td>
                    <td><?php echo $row["bgs_mcq"] + $row["bgs_cq"]; ?></td>
                    <td><?php echo calculate_grade_point($row["bgs_mcq"] + $row["bgs_cq"], 1); ?></td>
                </tr>
                <tr>
                    <th>ICT</th>
                    <td><?php echo $row["ict_mcq"]; ?></td>
                    <td><?php echo $row["ict_cq"]; ?></td>
                    <td><?php echo $row["ict_mcq"] + $row["ict_cq"]; ?></td>
                    <td><?php echo calculate_grade_point($row["ict_mcq"] + $row["ict_cq"], 1); ?></td>
                </tr>
                <tr>
                    <th>Religion</th>
                    <td><?php echo $row["religion_mcq"]; ?></td>
                    <td><?php echo $row["religion_cq"]; ?></td>
                    <td><?php echo $row["religion_mcq"] + $row["religion_cq"]; ?></td>
                    <td><?php echo calculate_grade_point($row["religion_mcq"] + $row["religion_cq"], 1); ?></td>
                </tr>
                <?php if ($groupName == 'science') {
                } else {
                ?>
                    <th>Science</th>
                    <td><?php echo $row["science_mcq"]; ?></td>
                    <td><?php echo $row["science_cq"]; ?></td>
                    <td><?php echo $row["science_mcq"] + $row["science_cq"]; ?></td>
                    <td><?php echo calculate_grade_point($row["science_mcq"] + $row["science_cq"], 1); ?></td>



                <?php }
                if ($groupName == 'science') { ?>
                    <tr>
                        <th>Biology</th>
                        <td><?php echo $row["biology_mcq"]; ?></td>
                        <td><?php echo $row["biology_cq"]; ?></td>
                        <td><?php echo $row["biology_mcq"] + $row["biology_cq"]; ?></td>
                        <td><?php echo calculate_grade_point($row["biology_mcq"] + $row["biology_cq"], 1); ?></td>
                    </tr>

                    <tr>
                        <th>Chemistry</th>
                        <td><?php echo $row["chemistry_mcq"]; ?></td>
                        <td><?php echo $row["chemistry_cq"]; ?></td>
                        <td><?php echo $row["chemistry_mcq"] + $row["chemistry_cq"]; ?></td>
                        <td><?php echo calculate_grade_point($row["chemistry_mcq"] + $row["chemistry_cq"], 1); ?></td>
                    </tr>

                    <tr>
                        <th>Physics</th>
                        <td><?php echo $row["physics_mcq"]; ?></td>
                        <td><?php echo $row["physics_cq"]; ?></td>
                        <td><?php echo $row["physics_mcq"] + $row["physics_cq"]; ?></td>
                        <td><?php echo calculate_grade_point($row["physics_mcq"] + $row["physics_cq"], 1); ?></td>
                    </tr>

                    <tr>
                        <th>Higher Math</th>
                        <td><?php echo $row["higher_math_mcq"]; ?></td>
                        <td><?php echo $row["higher_math_cq"]; ?></td>
                        <td><?php echo $row["higher_math_mcq"] + $row["higher_math_cq"]; ?></td>
                        <td><?php echo calculate_grade_point($row["higher_math_mcq"] + $row["higher_math_cq"], 1); ?></td>
                    </tr>

                    <tr>
                        <th>Agricultural Studies</th>
                        <td><?php echo $row["agricultural_studies_mcq"]; ?></td>
                        <td><?php echo $row["agricultural_studies_cq"]; ?></td>
                        <td><?php echo $row["agricultural_studies_mcq"] + $row["agricultural_studies_mcq"] ?></td>
                        <td><?php echo calculate_grade_point($row["agricultural_studies_mcq"] + $row["agricultural_studies_mcq"], 1) ?></td>
                    <?php }
                if ($groupName == 'commerce') { ?>
                    <tr>
                        <th>Economics</th>
                        <td><?php echo $row["economics_mcq"]; ?></td>
                        <td><?php echo $row["economics_cq"]; ?></td>
                        <td><?php echo $row["economics_mcq"] + $row["economics_cq"]; ?></td>
                        <td><?php echo calculate_grade_point($row["economics_mcq"] + $row["economics_cq"], 1); ?></td>
                    </tr>
                    <tr>
                    <tr>
                        <th>Geography</th>
                        <td><?php echo $row["geography_mcq"]; ?></td>
                        <td><?php echo $row["geography_cq"]; ?></td>
                        <td><?php echo $row["geography_mcq"] + $row["geography_cq"]; ?></td>
                        <td><?php echo calculate_grade_point($row["geography_mcq"] + $row["geography_cq"], 2); ?></td>
                    </tr>

                    <th>History</th>
                    <td><?php echo $row["history_mcq"]; ?></td>
                    <td><?php echo $row["history_cq"]; ?></td>
                    <td><?php echo $row["history_mcq"] + $row["history_cq"]; ?></td>
                    <td><?php echo calculate_grade_point($row["history_mcq"] + $row["history_cq"], 1); ?></td>
                    </tr>
                <?php }
                if ($groupName == 'commerce') { ?>
                    <tr>
                        <th>Accounting</th>
                        <td><?php echo $row["accounting_mcq"]; ?></td>
                        <td><?php echo $row["accounting_cq"]; ?></td>
                        <td><?php echo $row["accounting_mcq"] + $row["accounting_cq"]; ?></td>
                        <td><?php echo calculate_grade_point($row["accounting_mcq"] + $row["accounting_cq"], 1); ?></td>
                    </tr>
                    <!-- For Finance -->
                    <tr>
                        <th>Finance</th>
                        <td><?php echo $row["finance_mcq"]; ?></td>
                        <td><?php echo $row["finance_cq"]; ?></td>
                        <td><?php echo $row["finance_mcq"] + $row["finance_cq"]; ?></td>
                        <td><?php echo calculate_grade_point($row["finance_mcq"] + $row["finance_cq"], 1); ?></td>
                    </tr>

                    <!-- For Business_ent -->
                    <tr>
                        <th>Business_ent</th>
                        <td><?php echo $row["business_ent_mcq"]; ?></td>
                        <td><?php echo $row["business_ent_cq"]; ?></td>
                        <td><?php echo $row["business_ent_mcq"] + $row["business_ent_cq"]; ?></td>
                        <td><?php echo calculate_grade_point($row["business_ent_mcq"] + $row["business_ent_cq"], 1); ?></td>
                    </tr>

            <?php
                }
            } ?>
            <!-- <tr>
                <th>MCQ</th>
                <th>CQ</th>
                <th>MCQ</th>
                <th>CQ</th>
                <th>MCQ</th>
                <th>CQ</th>
                <th>MCQ</th>
                <th>CQ</th>
                <th>MCQ</th>
                <th>CQ</th>
                <th>MCQ</th>
                <th>CQ</th>
                <th>MCQ</th>
                <th>CQ</th>
                <th>MCQ</th>
                <th>CQ</th>

                <th style="display: <?php if ($groupName == 'science') {
                                        echo "none";
                                    } ?>;">MCQ</th>
                <th style="display: <?php if ($groupName == 'science') {
                                        echo "none";
                                    } ?>;">CQ</th>
                <?php
                if ($groupName == 'science') {
                ?>
                    <th>MCQ</th>
                    <th>CQ</th>
                    <th>MCQ</th>
                    <th>CQ</th>
                    <th>MCQ</th>
                    <th>CQ</th>
                    <th>MCQ</th>
                    <th>CQ</th>
                    <th>MCQ</th>
                    <th>CQ</th>
                <?php
                } else if ($groupName == 'commerce') {
                ?>
                    <th>MCQ</th>
                    <th>CQ</th>
                    <th>MCQ</th>
                    <th>CQ</th>
                    <th>MCQ</th>
                    <th>CQ</th>
                <?php } elseif ($groupName == 'arts') {
                ?>
                    <th>CQ</th>
                    <th>MCQ</th>
                    <th>CQ</th>
                    <th>MCQ</th>
                    <th>CQ</th>
                <?php } ?>
            </tr> -->


        </thead>
        <tbody>
            <!-- Repeat this row for each student -->
        </tbody>
    </table>




</body>


<script>
    function generatePDF() {
        var element = document.getElementById("example");
        var opt = {
            // margin: [0.5, 0.5, 0.5, 0.5], // add 0.5 inch padding on all sides
            filename: 'result.pdf',
            image: {
                type: 'jpeg',
                quality: 5
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter'
            }
        };
        // get the original width and height of the content
        var width = element.offsetWidth;
        var height = element.offsetHeight;
        // set the PDF size to the original size plus padding
        opt.jsPDF.orientation = width > height ? 'landscape' : 'portrait';
        opt.jsPDF.unit = 'in';
        opt.jsPDF.format = [10, 10]; // add 1 inch for padding
        // generate the PDF
        html2pdf().set(opt).from(element).toPdf().get('pdf').then(function(pdf) {
            pdf.save();
        });




    }
</script>



</html>