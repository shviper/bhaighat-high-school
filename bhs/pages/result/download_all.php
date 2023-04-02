<?php
include '../../auth/islogin.php';
include '../../../config/database.php';
if (isset($_GET['class']) && isset($_GET['branch']) &&  isset($_GET['groupName']) && isset($_GET['exam_type'])) {
    $class = $_GET['class'];
    $branch = $_GET['branch'];
    $groupName = $_GET['groupName'];
    $exam_type = $_GET['exam_type'];

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
                    LEFT JOIN agricultural_studies ags ON b1.id = ags.id AND b1.class = ags.class AND b1.branch = ags.branch WHERE b1.class = '$class' and b1.branch = '$branch' and b1.groupName = '$groupName' and b1.exam_type = '$exam_type'
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
        LEFT JOIN history h ON b1.id = h.id AND b1.class = h.class AND b1.branch = h.branch WHERE b1.class = '$class' and b1.branch = '$branch' and b1.groupName = '$groupName' and b1.exam_type = '$exam_type'
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
        LEFT JOIN business be ON b1.id = be.id AND b1.class = be.class AND b1.branch = be.branch WHERE b1.class = '$class' and b1.branch = '$branch' and b1.groupName = '$groupName' and b1.exam_type = '$exam_type'
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
LEFT JOIN science s ON b1.id = s.id AND b1.class = s.class AND b1.branch = s.branch WHERE b1.class = '$class' and b1.branch = '$branch' and b1.groupName = '$groupName' and b1.exam_type = '$exam_type'

";
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
        /* @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali&display=swap'); */

        html,
        body,
        .intro {
            margin: 5px;
            height: 100%;
            size: 16px;
            font-style: normal;
            font-family: 'Noto Sans Bengali';

        }



        button {
            padding: 5px;
            background: hsl(206deg 100% 73%);
            color: white;
            font-weight: bolder;
            font-size: larger;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 90%;
            /* height: 200px; */
        }

        td {
            color: black;
        }

        table,
        th,
        td {

            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: center;
        }

        @media print {

            section {
                display: none;
            }

            table,
            th,
            td {
                visibility: visible;
                border: 1px solid black;
                border-collapse: collapse;
            }
        }
    </style>
</head>

<body>
    <section>
        <center><button class='button' onclick="printTable()">Print Table</button><button class='button' onclick="generatePDF()">PDF </button></center>
        <center><a href="index.php" style="font-size: larger;">Back</a></center>
    </section>
    <br>
    <!-- <h1>Mark Sheet</h1> -->
    <table align="center" id="example">
        <style>
            table,
            th,
            td {

                border: 1px solid black;
                border-collapse: collapse;
            }

            table {
                counter-reset: serial-number;
                /* initialize counter */
            }

            tbody tr td:first-child:before {
                content: counter(serial-number);
                /* display counter value */
                counter-increment: serial-number;
                /* increment counter */
            }
        </style>
        <thead>

            <tr>
                <th colspan="<?php if ($groupName == 'none') {
                                    echo 25;
                                } else echo 35 ?>">
                    <h3><?php echo $schoolName_bn ?><br>
                        <?php echo $class ?> | <?php echo $branch ?> | <?php echo $exam_type ?>
                    </h3>
                </th>
            </tr>
            <tr>
                <th rowspan="2">Se.No</th>
                <th rowspan="2">Roll No.</th>
                <th rowspan="2">ST Code</th>
                <th rowspan="2">Student Name</th>
                <th colspan="2">Bangla 1st</th>
                <th colspan="2">Bangla 2nd</th>
                <th colspan="2">English 1st</th>
                <th colspan="2">English 2nd</th>
                <th colspan="2">Math</th>
                <th colspan="2">BGS</th>
                <th colspan="2">ICT</th>
                <th colspan="2">Religion</th>
                <th colspan="2" style="display: <?php if ($groupName == 'science') {
                                                    echo "none";
                                                } ?>;">Science</th>
                <?php if ($groupName == 'science') {
                ?>
                    <th colspan="2">Biology</th>
                    <th colspan="2">Chemistry</th>
                    <th colspan="2">physics</th>
                    <th colspan="2">Higher Math</th>
                    <th colspan="2">Agricultural Studies</th>
                <?php
                } else if ($groupName == 'commerce') {
                ?>
                    <th colspan="2">economical</th>
                    <th colspan="2">geography</th>
                    <th colspan="2">history</th>
                <?php } elseif ($groupName == 'arts') {
                ?>
                    <th colspan="2">Finance</th>
                    <th colspan="2">Accounting</th>
                    <th colspan="2">Business_ent</th>
                <?php } ?>
                <th rowspan="2" id="total_marks">Total</th>
                <th rowspan="2">Grade</th>
            </tr>
            <tr>
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
            </tr>
        <tbody>
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
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id"];
                    $codeResult = mysqli_query($conn, "SELECT St_Code FROM `student_info2` WHERE id = '$id'");
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
                    <tr>
                        <td></td>
                        <td class="not"><?php echo $row["roll"]; ?></td>
                        <td class="not"><?php echo $code; ?></td>
                        <td style="text-align: left;"><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["mcq"]; ?></td>
                        <td><?php echo $row["cq"]; ?></td>
                        <td><?php echo $row["bangla_2nd_mcq"]; ?></td>
                        <td><?php echo $row["bangla_2nd_cq"]; ?></td>
                        <td><?php echo $row["english_1st_mcq"]; ?></td>
                        <td><?php echo $row["english_1st_cq"]; ?></td>
                        <td><?php echo $row["english_2nd_mcq"]; ?></td>
                        <td><?php echo $row["english_2nd_cq"]; ?></td>
                        <td><?php echo $row["math_mcq"]; ?></td>
                        <td><?php echo $row["math_cq"]; ?></td>
                        <td><?php echo $row["bgs_mcq"]; ?></td>
                        <td><?php echo $row["bgs_cq"]; ?></td>
                        <td><?php echo $row["ict_mcq"]; ?></td>
                        <td><?php echo $row["ict_cq"]; ?></td>
                        <td><?php echo $row["religion_cq"]; ?></td>
                        <td><?php echo $row["religion_cq"]; ?></td>
                        <?php if (!$groupName == 'science') {
                        } else {
                        ?>
                            <td><?php echo $row["science_mcq"]; ?></td>
                            <td><?php echo $row["science_cq"]; ?></td>
                        <?php }
                        if ($groupName == 'science') {
                            $total_subjects = 13;
                            $total_marks += $row["mcq"] + $row["cq"] + $row["bangla_2nd_mcq"] + $row["bangla_2nd_cq"] + $row["english_1st_mcq"] + $row["english_1st_cq"]  + $row["english_2nd_mcq"] + $row["english_2nd_cq"] + $row["math_mcq"] + $row["math_cq"] + $row["bgs_mcq"] + $row["bgs_cq"] + $row["ict_mcq"] + $row["ict_cq"] + $row["religion_mcq"] + $row["religion_cq"] + $row["science_mcq"] + $row["science_cq"] + $row["biology_mcq"] + $row["chemistry_mcq"] + $row["physics_mcq"] + $row["higher_math_mcq"] + $row["agricultural_studies_mcq"] + $row["biology_cq"] + $row["chemistry_cq"] + $row["physics_cq"] + $row["higher_math_cq"] + $row["agricultural_studies_cq"];
                        ?>
                            <td><?php echo $row["biology_mcq"]; ?></td>
                            <td><?php echo $row["biology_cq"]; ?></td>
                            <td><?php echo $row["chemistry_mcq"]; ?></td>
                            <td><?php echo $row["chemistry_cq"]; ?></td>
                            <td><?php echo $row["physics_mcq"]; ?></td>
                            <td><?php echo $row["physics_cq"]; ?></td>
                            <td><?php echo $row["higher_math_mcq"]; ?></td>
                            <td><?php echo $row["higher_math_cq"]; ?></td>
                            <td><?php echo $row["agricultural_studies_mcq"]; ?></td>
                            <td><?php echo $row["agricultural_studies_cq"]; ?></td>
                            <td id="tomar"><?php echo $total_marks; ?></td>
                            <td id="g"><?php echo calculate_grade_point($total_marks, $total_subjects); ?></td>


                            <!-- for commerce group -->
                        <?php } else if ($groupName == 'commerce') {

                            $total_subjects = 12;
                            $total_marks += $row["mcq"] + $row["cq"] + $row["bangla_2nd_mcq"] + $row["bangla_2nd_cq"] + $row["english_1st_mcq"] + $row["english_1st_cq"]  + $row["english_2nd_mcq"] + $row["english_2nd_cq"] + $row["math_mcq"] + $row["math_cq"] + $row["bgs_mcq"] + $row["bgs_cq"] + $row["ict_mcq"] + $row["ict_cq"] + $row["religion_mcq"] + $row["religion_cq"] + $row["science_mcq"] + $row["science_cq"] + $row["economics_mcq"]
                                + $row["economics_cq"]
                                + $row["geography_mcq"]
                                + $row["geography_cq"]
                                + $row["history_mcq"]
                                + $row["history_cq"];
                        ?>
                            <td><?php echo $row["economics_mcq"]; ?></td>
                            <td><?php echo $row["economics_cq"]; ?></td>
                            <td><?php echo $row["geography_mcq"]; ?></td>
                            <td><?php echo $row["geography_cq"]; ?></td>
                            <td><?php echo $row["history_mcq"]; ?></td>
                            <td><?php echo $row["history_cq"]; ?></td>
                            <td id="tomar"><?php echo $total_marks; ?></td>
                            <td id="g"><?php echo calculate_grade_point($total_marks, $total_subjects); ?></td>


                            <!-- for arts group -->
                        <?php } else if ($groupName == 'arts') {
                            $total_subjects = 12;
                            $total_marks += $row["mcq"] + $row["cq"] + $row["bangla_2nd_mcq"] + $row["bangla_2nd_cq"] + $row["english_1st_mcq"] + $row["english_1st_cq"]  + $row["english_2nd_mcq"] + $row["english_2nd_cq"] + $row["math_mcq"] + $row["math_cq"] + $row["bgs_mcq"] + $row["bgs_cq"] + $row["ict_mcq"] + $row["ict_cq"] + $row["religion_mcq"] + $row["religion_cq"] + $row["science_mcq"] + $row["science_cq"] + $row["finance_mcq"] + $row["finance_cq"] + $row["accounting_mcq"] + $row["accounting_cq"] + $row["business_ent_mcq"] + $row["business_ent_cq"];
                        ?>
                            <td><?php echo $row["finance_mcq"]; ?></td>
                            <td><?php echo $row["finance_cq"]; ?></td>
                            <td><?php echo $row["accounting_mcq"]; ?></td>
                            <td><?php echo $row["accounting_cq"]; ?></td>
                            <td><?php echo $row["business_ent_mcq"]; ?></td>
                            <td><?php echo $row["business_ent_cq"]; ?></td>
                            <td id="tomar"><?php echo $total_marks; ?></td>
                            <td id="g"><?php echo calculate_grade_point($total_marks, $total_subjects); ?></td>
                        <?php } else {

                            $total_subjects = 9;
                            $total_marks += $row["mcq"] + $row["cq"] + $row["bangla_2nd_mcq"] + $row["bangla_2nd_cq"] + $row["english_1st_mcq"] + $row["english_1st_cq"] + $row["english_2nd_mcq"] + $row["english_2nd_cq"] + $row["math_mcq"] + $row["math_cq"] + $row["bgs_mcq"] + $row["bgs_cq"] + $row["ict_mcq"] + $row["ict_cq"] + $row["religion_mcq"] + $row["religion_cq"] + $row["science_mcq"] + $row["science_cq"];

                        ?>
                            <td id="tomar"><?php echo $total_marks; ?></td>
                            <td id="g"><?php echo calculate_grade_point($total_marks, $total_subjects); ?></td>
                    </tr>
        <?php
                        }
                    }
                } ?>
        <!-- </thead> -->

        <!-- Repeat this row for each student -->
        </tbody>
    </table>



</body>


<script>
    function generatePDF() {
        var element = document.getElementById("example");
        var opt = {
            margin: [0.5, 0.5, 0.5, 0.5], // add 0.5 inch padding on all sides
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
        opt.jsPDF.format = [width / 72, height / 72]; // add 1 inch for padding
        // generate the PDF
        html2pdf().set(opt).from(element).toPdf().get('pdf').then(function(pdf) {
            pdf.save();
        });




    }

    function printTable() {
        var table = document.getElementById("example");
        var newWin = window.open('', 'Print-Window');
        newWin.document.open();
        newWin.document.write('<html><body onload="window.print()">' + table.outerHTML + '</body></html>');
        newWin.document.close();
        setTimeout(function() {
            newWin.close();
        }, 10);

    }
    window.addEventListener('keydown', function(e) {
        if (e.ctrlKey && e.key == 'p') {
            e.preventDefault();
            printTable();

        }
    });
</script>

<script>
    const tbody = document.querySelector("#example tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));
    rows.sort((a, b) => {
        const aVal = parseInt(a.querySelector("#tomar").textContent);
        const bVal = parseInt(b.querySelector("#tomar").textContent);
        return bVal - aVal;
    });
    rows.forEach((row) => tbody.appendChild(row));

    // const tdList = document.querySelectorAll('#g');

    // for (let i = 0; i < tdList.length; i++) {
    //     const tdValue = parseInt(tdList[i].textContent);

    //     if (tdValue < 1) {
    //         tdList[i].style.border = '1px solid red';
    //     }
    // }
</script>

</html>