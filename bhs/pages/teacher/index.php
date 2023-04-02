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
                                                <h1>Teacher Add</h1>
                                            </center>
                                            <form class="contact-form" id="teacher" enctype="multipart/form-data">
                                                <div class="single-row">

                                                    <input type="text" name="name" id="name" placeholder="Enter teacher Name" class="form-in" required>
                                                    <input type="text" name="Designation" id="Designation" placeholder="Designation" class="form-in" required>
                                                </div>
                                                <div class="single-row">

                                                    <input type="text" name="Educational_Qualifications" id="Educational_Qualifications" placeholder="Educational Qualifications" class="form-in" required>
                                                    <input type="text" name="Mobile_Number" placeholder="019000000" class="form-in" required>
                                                </div>
                                                <div class="single-row">
                                                    <input type="text" name="Address" id="Address" placeholder="Address" class="form-in" required>

                                                    <input type="date" name="join_date" class="form-in" required>
                                                </div>
                                                <div class="single-row">
                                                    <input type="Email" name="Email" id="Email" placeholder="example@email.com" class="form-in" required style="text-transform: lowercase;">
                                                    <input type="text" name="password" id="password" placeholder="password" class="form-in" required>

                                                </div>
                                                <div class="multiple-row">

                                                    <input type="file" name="image" id="image" placeholder="pucture" class="form-in" required>

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
                                    <h4 class="card-title mb-2">Teacher List</h4>
                                    <!-- <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span> -->
                                </div>
                            </div>

                            <div id="teacher_list">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <script>
            $(document).ready(function() {
                $("#teacher").submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: "POST",
                        url: "teacher_add.php",
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
                $("#teacher_list").load("./teacher_list.php");
                setInterval(function() {
                    $("#teacher_list").load("./teacher_list.php");

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