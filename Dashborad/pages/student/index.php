<?php
include '../../auth/islogin.php';
include '../../config/database.php';
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
                                                <h1>Student</h1>
                                            </center>
                                            <form class="contact-form" id="student">

                                                <div class="">
                                                    <center>
                                                        <b><label for="">শ্রেণী</label></b>
                                                    </center>

                                                    <select name="class" class="form-in" required>
                                                        <option value="ষষ্ঠ শ্রেণী">ষষ্ঠ শ্রেণী</option>
                                                        <option value="সপ্তম শ্রেণী">সপ্তম শ্রেণী</option>
                                                        <option value="অষ্টম শ্রেণী">অষ্টম শ্রেণী</option>
                                                        <option value="নবম শ্রেণী">নবম শ্রেণী</option>
                                                        <option value="দশম শ্রেণী">দশম শ্রেণী</option>
                                                    </select>


                                                </div>
                                                <div class="single-row">
                                                    <b><label for="">ছাত্র সংখ্যা</label></b>
                                                    <input type="number" name="male" placeholder="100" class="form-in" required>
                                                    <b><label for="">ছাত্রী সংখ্যা</label></b>
                                                    <input type="number" name="female" placeholder="100" class="form-in" required>
                                                </div>

                                                <div class="single-row">
                                                    <b><label for="">বিজ্ঞান বিভাগ</label></b>
                                                    <input type="number" name="sceince" placeholder="100" class="form-in" required>
                                                    <b><label for="">মানবিক বিভাগ</label></b>
                                                    <input type="number" name="humane" placeholder="100" class="form-in" required>
                                                </div>

                                                <center><button class="button" type="submit" name="submit">Publish
                                                    </button></center>


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
                                    <h4 class="card-title mb-2">Student List</h4>
                                    <!-- <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span> -->
                                </div>
                            </div>
                            <div class="card-body tab-content p-0">
                                <div class="tab-pane active show fade" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md card-table transactions-table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a id="notice_edit" href="edit.php?id=<?php echo $row['Id'] ?>">
                                                            <h6 class=" fs-16 text-black font-w600 mb-0"><i class="fa-sharp fa-solid fa-file-pen "></i></h6>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a id="delete" href="delete.php?id=<?php echo $row['Id'] ?>">
                                                            <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash"></i></h6>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <h6 class="fs-16 text-black font-w600 mb-0">
                                                            শ্রেণী
                                                        </h6>
                                                    </td>

                                                    <td>
                                                        <span class="fs-16 text-black font-w600 mb-0">
                                                            ছাত্র
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <h6 class="fs-16 text-black font-w600 mb-0">
                                                            ছাত্রী
                                                        </h6>
                                                    </td>

                                                    <td>
                                                        <h6 class="fs-16 text-black font-w600 mb-0">
                                                            বিজ্ঞান
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 text-black font-w600 mb-0">
                                                            মানবিক
                                                        </h6>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>


                            </div>
                            <div id="student_list">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <script>
            $(document).ready(function() {
                $("#student").submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: "POST",
                        url: "student_add.php",
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
                setInterval(function() {

                    $("#student_list").load("./student_list.php");

                }, 3000);


            });
        </script>

        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <?php include '../../components/fotter.php'; ?>
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



    <script src="../../js/custom.min.js"></script>
    <script src="../../js/dlabnav-init.js"></script>
    <script src="../../js/styleSwitcher.js"></script>
</body>

</html>