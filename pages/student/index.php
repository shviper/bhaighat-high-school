<?php

include("../../config/database.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- link include -->
    <?php include '../../components/link.php'; ?>
    <style>
        .mini-profile-widget .image-container .avatar {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 50%;
            display: block;
            height: 180px;
            margin: 0 auto;
            padding: 4px;
            width: 180px
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
                        <table style="margin: 22px auto 0px;" width="100%" cellspacing="0" cellpadding="3">
                            <tr>
                                <td class="columnStyleLeft">
                                    <div>
                                        <table id="ContentPlaceHolder1_grdvTeachers" style="font-family: Noto Sans Bengali; font-size: 11pt; border-collapse: collapse; margin: 0px auto; width: 100%;" cellspacing="0" cellpadding="3">
                                            <tr style="color: rgb(12, 9, 10); background-color: rgb(242, 242, 242); border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid; font-family: Noto Sans Bengali; font-size: 9pt;" valign="middle" align="center">
                                                <td colspan="1" style="border-width: 0px; text-align: center;">শ্রেণী</td>
                                                <td colspan="3" style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid; text-align: center;">শিক্ষার্থী</td>
                                                <td colspan="3" style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid; text-align: center;">বিভাগ</td>
                                            </tr>
                                            <tr style="color: rgb(12, 9, 10); background-color: rgb(242, 242, 242); border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid; font-family: Noto Sans Bengali; font-size: 9pt;" valign="middle" align="center">
                                                <td scope="col" valign="middle" align="left"></td>
                                                <td scope="col" style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid;" valign="middle" align="center">ছাত্র</td>
                                                <td scope="col" style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid;" valign="middle" align="center">ছাত্রী</td>
                                                <td scope="col" style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid;" valign="middle" align="center">মোট</td>
                                                <td scope="col" style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid;" valign="middle" align="center">বিজ্ঞান</td>
                                                <td scope="col" style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid;" valign="middle" align="center">মানবিক</td>
                                            </tr>
                                            <?php
                                            $sql = "SELECT * FROM `student`";
                                            $student = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($student) > 0) {
                                                // output data of each row
                                                $total_s_student = 0;
                                                $total_s_male = 0;
                                                $total_s_female = 0;
                                                $total_s_sc = 0;
                                                $total_s_hm = 0;

                                                while ($row = mysqli_fetch_assoc($student)) {
                                                    $total_student = $row['male'] + $row['female'];
                                                    $total_s_student = $total_s_student + $total_student;
                                                    $total_s_male = $total_s_male + $row['male'];
                                                    $total_s_female = $total_s_female + $row['female'];
                                                    $total_s_sc = $$total_s_sc + $row['sceince'];
                                                    $total_s_hm = $total_s_hm + $row['humane'];
                                            ?>
                                                    <tr>
                                                        <td style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid; font-family: Century Gothic; font-size: 9pt; width: 75px;" align="center"><?php echo $row['class'] ?></td>
                                                        <td style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid; font-size: 9pt; width: 30px;" align="center"><span id="ContentPlaceHolder1_grdvTeachers_txtmale_0"><?php echo $row['male'] ?></span></td>
                                                        <td style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid; font-size: 9pt; width: 30px;" align="center"><span id="ContentPlaceHolder1_grdvTeachers_txtfemale_0"><?php echo $row['female'] ?></span></td>
                                                        <td style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid; font-size: 9pt; width: 30px;" align="center"><span id="ContentPlaceHolder1_grdvTeachers_txttotal_0"><?php echo $total_student ?></span></td>
                                                        <td style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid; font-size: 9pt; width: 30px;" align="center"><span id="ContentPlaceHolder1_grdvTeachers_txtmuslim_0">
                                                                <?php
                                                                if ($row['sceince'] < 1) {
                                                                    echo "";
                                                                } else {
                                                                    echo $row['sceince'];
                                                                } ?></span></td>
                                                        <td style="border-color: rgb(204, 204, 204); border-width: 1px; border-style: solid; font-size: 9pt; width: 30px;" align="center"><span id="ContentPlaceHolder1_grdvTeachers_txtbouddho_0">
                                                                <?php
                                                                if ($row['humane'] < 1) {
                                                                    echo "";
                                                                } else {
                                                                    echo $row['humane'];
                                                                } ?></span></td>
                                                    </tr>


                                            <?php
                                                }
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div>
                                        <table id="ContentPlaceHolder1_grdvTotal" style="width: 250px; border-collapse: collapse; margin: 0px auto;" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td scope="col">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table width="100%" cellspacing="0" cellpadding="2">
                                                        <tr>
                                                            <td class="firstColumn" style="border-top: 1px solid rgb(204, 204, 204);">
                                                                মোট শিক্ষার্থীর সংখ্যা
                                                            </td>
                                                            <td colspan="3" class="secondColumn" style="border-top: 1px solid rgb(204, 204, 204);">
                                                                <?php echo $total_s_student ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="firstColumn" style="border-top: 1px solid rgb(204, 204, 204);">
                                                                ছাত্র
                                                            </td>
                                                            <td colspan="3" class="secondColumn" style="border-top: 1px solid rgb(204, 204, 204);">
                                                                <?php echo $total_s_male ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="firstColumn" style="border-top: 1px solid rgb(204, 204, 204);">
                                                                ছাত্রী
                                                            </td>
                                                            <td colspan="3" class="secondColumn" style="border-top: 1px solid rgb(204, 204, 204);">
                                                                <?php echo $total_s_female ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="firstColumn" style="border-top: 1px solid rgb(204, 204, 204);">
                                                                বিজ্ঞান বিভাগ
                                                            </td>
                                                            <td colspan="3" class="secondColumn" style="border-top: 1px solid rgb(204, 204, 204);">
                                                                <?php echo $total_s_sc ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="firstColumn" style="border-top: 1px solid rgb(204, 204, 204);">
                                                                মানবিক বিভাগ
                                                            </td>
                                                            <td colspan="3" class="secondColumn" style="border-top: 1px solid rgb(204, 204, 204);">
                                                                <?php echo $total_s_hm ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table> <ins data-ad-client="ca-pub-9489624253487221" data-ad-format="fluid" data-ad-slot="4940322175" data-ad-layout-key="-fb+5w+4e-db+86" class="adsbygoogle" style="display: block;"></ins>



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