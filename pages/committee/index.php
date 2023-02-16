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
                        $sql = "SELECT * FROM `managing_committee` ";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body">
                                            <div class=" well well-white mini-profile-widget">
                                                <div class="image-container">
                                                    <img src="<?php echo $webName ?>/img/managing_committee/<?php echo $row['Picture'] ?>" width="100%" alt="avatar" class="avatar img-responsive">
                                                </div>
                                                <div class="details">
                                                    <center>
                                                        <h5 style="font-weight: bolder; padding:3px"><?php echo $row['Name'] ?></h5>
                                                    </center>
                                                    <hr>
                                                    <div>
                                                        <b> পদবী </b>: <?php echo $row['Designation'] ?>

                                                    </div>

                                                    <div><b>সময়কাল </b>: <?php echo $row['date'] ?></div>

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