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
                        <?php
                        $sql = "SELECT * FROM `teacher` ";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body" style="height: 549px;">
                                            <div class=" well well-white mini-profile-widget">
                                                <div class="image-container">
                                                    <img src="../../img/teacher/<?php echo $row['Picture'] ?>" width="100%" alt="avatar" class="avatar img-responsive">
                                                </div>
                                                <div class="details">
                                                    <center>
                                                        <h5 style="font-weight: bolder; padding:3px"><?php echo $row['Name'] ?></h5>
                                                    </center>
                                                    <hr>
                                                    <div>
                                                        <b> পদবী </b>: <?php echo $row['Designation'] ?>

                                                    </div>
                                                    <div><b>শিক্ষাগত যোগ্যতা </b> : <?php echo $row['Educational_Qualifications'] ?></div>
                                                    <div><b>ঠিকানা </b>: <?php echo $row['Address'] ?></div>
                                                    <div><b>মোবাইল </b>: <?php echo $row['Mobile_Number'] ?></div>
                                                    <div><b>যোগদানের তারিখ </b>: <?php echo $row['join_date'] ?></div>
                                                    <div><b>ইমেইল </b>: <a href="mailto:<?php echo $row['Email'] ?>"><?php echo $row['Email'] ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                            }
                        }
                        ?>

                    </div>


                </div>

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="headersidebar" style="text-align: center;">
                        <h1 class="fth">প্রধান শিক্ষক</h1>
                        <div class="text-center m-2">
                            <img src="http://localhost/bhaighat_high_school/img/teacher/img1.jpeg" alt="" width="180px" height="200px" />
                        </div>
                        <p>
                        <h4>মোহাম্মদ মোজাম্মেল হক</h4>
                        <h6>প্রধান শিক্ষক</h6>
                        <h6>ভাইঘাট উচ্চ বিদ্যালয়</h6>


                        </p>
                    </div>

                    <div class="headersidebar" style="text-align: center;">
                        <h1 class="fth">সভাপতি</h1>
                        <div class="text-center m-2">
                            <img src="http://localhost/bhaighat_high_school/img/teacher/Akbar_Hossain.jpg" alt="" width="200px" height="200px" />
                        </div>
                        <p>
                        <h4>মোঃ আকবর হোসেন</h4>
                        <h6>সভাপতি</h6>
                        <h6>ভাইঘাট উচ্চ বিদ্যালয়</h6>
                        </p>
                    </div>

                    <div class="headersidebar">
                        <h1 class="fth">ফেসবুকে আমরা</h1>
                        <center>
                            <div class="fb-page" data-href="https://web.facebook.com/bhs.tgl.bd" data-width="255px" data-height="auto">
                                <blockquote class="fb-xfbml-parse-ignore">
                                    <a href="https://web.facebook.com/bhs.tgl.bd">Bhaighat High School</a>
                                </blockquote>
                            </div>
                        </center>
                    </div>
                    <div class="headersidebar">
                        <h1 class="fth">প্রতিষ্ঠানের অবস্থান</h1>
                        <center>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37629.982223985644!2d89.96688784380783!3d24.620750055391202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd89910aba2215%3A0x46be4875f7d4015!2sBhaighat%20High%20school!5e0!3m2!1sen!2sbd!4v1675401811462!5m2!1sen!2sbd" width="255" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </center>
                    </div>

                    <div class="pd-4"></div>

                    <?php include '../../components/official_link.php'; ?>

                    <div class="pd-4"></div>

                    <div class="headersidebar">
                        <h1 class="fth">ভর্তি চলছে</h1>
                        <div class="important_link">
                            <img src="https://tmitstore.com/schoolthemetwo/wp-content/uploads/2021/07/fff-2.png" alt="" width="260px" height="auto" />
                        </div>
                    </div>

                    <div class="pd-4"></div>

                </div>
            </div>

        </div>

    </section>


    <div class="container content_wrap">
        <footer>
            <section>
                <div class="container content_wrap">
                    <div class="row">
                        <div class="footer_top_bg" style="background: url(&quot;https://tepriganjhighschool.edu.bd/public/assets/img/footer_top_bg.png&quot;) 0% 0% / cover no-repeat; height: 93px;"></div>
                        <div class="col-md-4 col-sm-12">
                            <ul class="footerList">
                                <li><b> পরিকল্পনা ও বাস্তবায়নে:</b> </li>
                                <hr>
                                <li style="list-style: none;">মোহাম্মদ মোজাম্মেল হক</li>
                                <li style="list-style: none;">প্রধান শিক্ষক</li>
                                <li style="list-style: none;">ভাইঘাট উচ্চ বিদ্যালয়</li>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <ul>
                                <li>
                                    <b> কারিগরি সহায়তায়:</b>
                                </li>
                                <hr>
                                <li style="list-style: none;">
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=01635355376&amp;text=I%27m%20interested%20in%20your%20services">সাজ্জাদ হাসান রিয়াদ </a>
                                    </span>
                                </li>
                                <li style="list-style: none;">infinity developers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        </footer>
    </div>






    <?php include '../../components/script.php'; ?>
</body>

</html>