<?php
include '../../auth/islogin.php';
include '../../../config/database.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- PAGE TITLE HERE -->
    <title>Admin</title>

    <link href="../../vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../vendor/nouislider/nouislider.min.css" />
    <!-- Style css -->
    <link href="../../css/style.css" rel="stylesheet" />
    <link href="../../css/style2.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script> -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        video {
            border-radius: 10px;
        }

        .image-area {
            position: relative;
            width: 30%;
            height: 150px;
            background: #333;
            /* overflow: scroll; */
        }

        .image-area img {
            max-width: 100%;
            height: auto;
        }

        .img {
            height: 150px;
        }

        .remove-image {
            display: none;
            position: absolute;
            top: -10px;
            right: -10px;
            border-radius: 10em;
            padding: 2px 6px 3px;
            text-decoration: none;
            font: 700 21px/20px sans-serif;
            background: #555;
            border: 3px solid #fff;
            color: #FFF;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
            -webkit-transition: background 0.5s;
            transition: background 0.5s;
        }

        .remove-image:hover {
            background: #E54E4E;
            padding: 3px 7px 5px;
            top: -11px;
            right: -11px;
        }

        .remove-image:active {
            background: #E54E4E;
            top: -10px;
            right: -11px;
        }
    </style>
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="waviy">
            <span style="--i: 1">L</span>
            <span style="--i: 2">o</span>
            <span style="--i: 3">a</span>
            <span style="--i: 4">d</span>
            <span style="--i: 5">i</span>
            <span style="--i: 6">n</span>
            <span style="--i: 7">g</span>
            <span style="--i: 8">.</span>
            <span style="--i: 9">.</span>
            <span style="--i: 10">.</span>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <?php include '../../components/nav_header.php'; ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php include '../../components/header.php'; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include '../../components/sidebar.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-9 col-xxl-12">

                        <div class="card">

                            <div class="card-body">

                                <div class="row align-items-center">

                                    <div class="contact-container">
                                        <div class="contact-left">
                                            <center>
                                                <h1>Gallery Add</h1>
                                            </center>
                                            <form class="contact-form" id="Gallery" enctype="multipart/form-data">
                                                <div class="multiple-row">

                                                    <input type="text" name="title" id="name" placeholder="Enter Gallery Title" class="form-in" required>

                                                </div>

                                                <div class="multiple-row">

                                                    <input type="file" name="image[]" multiple class="form-in" required>

                                                    <center><button class="button" type="submit" name="submit">Publish
                                                        </button></center>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header d-block d-sm-flex border-0">
                                <div class="me-3">
                                    <h4 class="card-title mb-2">Video...</h4>
                                    <!-- <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span> -->
                                </div>
                            </div>

                            <div id="video_list">

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header d-block d-sm-flex border-0">
                                <div class="me-3">
                                    <h4 class="card-title mb-2">Photo...</h4>
                                    <!-- <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span> -->
                                </div>
                            </div>

                            <div id="Gallery_list">

                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <script>
                $(document).ready(function() {
                    $("#Gallery").submit(function(e) {
                        e.preventDefault();
                        var formData = new FormData(this);
                        $.ajax({
                            type: "POST",
                            url: "photo_gallery_add.php",
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(data) {
                                alert(data);
                            }
                        });
                    });
                });
            </script>

            <script>
                $(document).ready(function() {
                    $("#video_list").load("./video.php");
                    $("#Gallery_list").load("./gallery_list.php");
                    setInterval(function() {
                        $("#Gallery_list").load("./gallery_list.php");
                    }, 3000);

                });
            </script>

            <!--**********************************
            Content body end
        ***********************************-->

            <!--**********************************
            Footer start
        ***********************************-->
            <?php include '../../components/footer.php'; ?>
            <!--**********************************
            Footer end
        ***********************************-->
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->
        <script src="../../vendor/global/global.min.js"></script>
        <script src="../../vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="../../vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>


        <!-- Dashboard 1 -->
        <script src="../../js/dashboard/dashboard-1.js"></script>

        <script src="../../js/custom.min.js"></script>
        <script src="../../js/dlabnav-init.js"></script>
        <script src="../../js/demo.js"></script>
        <script src="../../js/styleSwitcher.js"></script>
</body>

</html>