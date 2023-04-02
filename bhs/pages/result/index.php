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
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <center>
                                <div class="card-header d-block d-sm-flex border-0 row m-1">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6 col-md-12 mb-3">
                                            <a href="#result_add" class="button">Result Data Add</a>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 col-md-12">
                                            <a href="#result_edit" class="button">Result Data Edit</a>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-header d-block d-sm-flex border-0 row m-1">
                                    <div class="row ">
                                        <div class="col-sm-12 col-lg-6 col-md-12 mb-3">
                                            <a href="#download" class="button">Download Marksheet</a>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 col-md-12">
                                            <a href="all_student.php" class="button">View student Info</a>
                                        </div>
                                    </div>


                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-12" id="result_add">

                        <div class="card">

                            <div class="card-body">

                                <div class="row align-items-center">

                                    <div class="contact-container">
                                        <div class="contact-left">
                                            <center>
                                                <h1>Result Data Add</h1>
                                            </center>
                                            <form class="contact-form" method="get" action="add.php">
                                                <div class="single-row">
                                                    <select id="className" onchange="showFields()" name="class" class="form-in" require>
                                                        <option value="">শ্রেণি নির্বাচন করুন ...</option>
                                                        <option value="ষষ্ঠ">ষষ্ঠ</option>
                                                        <option value="সপ্তম">সপ্তম</option>
                                                        <option value="অষ্টম">অষ্টম</option>
                                                        <option value="নবম">নবম</option>
                                                        <option value="দশম">দশম</option>
                                                    </select>
                                                    <select name="branch" id="branch" class="form-in" require>
                                                        <option value="">শাখা নির্বাচন করুন ...</option>
                                                        <option value="জুই">জুই</option>
                                                        <option value="বেলী">বেলী</option>
                                                        <option value="দোয়েল">দোয়েল</option>
                                                        <option value="কোয়েল">কোয়েল</option>
                                                        <option value="পদ্মা">পদ্মা</option>
                                                        <option value="মেঘনা">মেঘনা</option>
                                                        <option value="নজরুল">নজরুল</option>
                                                        <option value="রবীন্দ্র">রবীন্দ্র</option>
                                                        <option value="রোকেয়া">রোকেয়া</option>
                                                        <option value="সুফিয়া">সুফিয়া</option>
                                                    </select>

                                                </div>
                                                <div class="single-row">


                                                    <select name="groupName" id="group" class="form-in" onchange="showFields()">
                                                        <option value="none" selected>গ্রুপ নির্বাচন করুন ...</option>
                                                        <option value="none">none</option>
                                                        <option value="science">Science</option>
                                                        <option value="commerce">Commerce</option>
                                                        <option value="arts">Arts</option>
                                                    </select>
                                                    <select name="exam_type" class="form-in">
                                                        <option value="">পরীক্ষার নাম নির্বাচন করুন ...</option>
                                                        <option value="গঠনকালীন মূল্যায়ণ">গঠনকালীন মূল্যায়ণ</option>
                                                        <option value="শ্রেণি অভিক্ষা-২">শ্রেণি অভিক্ষা-২</option>
                                                        <option value="শ্রেণি অভিক্ষা-১">শ্রেণি অভিক্ষা-১</option>
                                                        <option value="সাপ্তাহিক">সাপ্তাহিক</option>
                                                        <option value="নির্বাচনী">নির্বাচনী</option>
                                                        <option value="বার্ষিক">বার্ষিক</option>
                                                    </select>

                                                </div>


                                                <div class="single-row">
                                                    <select name="subject" class="form-in">
                                                        <option value="" selected>বিষয় নির্বাচন করুন ...</option>
                                                        <option value="bangla_1st">bangla_1st</option>
                                                        <option value="bangla_2nd">bangla_2nd</option>
                                                        <option value="english_1st">english_1st</option>
                                                        <option value="english_2nd">english_2nd</option>
                                                        <option value="math">math</option>
                                                        <option value="bgs">bgs</option>
                                                        <option value="ict">ict</option>
                                                        <option value="religion">religion</option>
                                                        <option value="science">science</option>
                                                        <option value="biology">biology</option>
                                                        <option value="chemistry">chemistry</option>
                                                        <option value="physics">physics</option>
                                                        <option value="higher_math">higher_math</option>
                                                        <option value="agricultural_studies">agricultural_studies</option>
                                                        <option value="economical">economical</option>
                                                        <option value="geography">geography</option>
                                                        <option value="history">history</option>
                                                        <option value="finance">finance</option>
                                                        <option value="accounting">accounting</option>
                                                        <option value="business_ent">business_ent</option>
                                                    </select>
                                                    <input type="number" name="total" class="form-in" placeholder="Full Marks" required>
                                                </div>
                                                <div class="multiple-row">

                                                    <center>
                                                        <input type="submit" class="button" value="Result-Add">
                                                    </center>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-12" id="result_edit">

                        <div class="card">

                            <div class="card-body">

                                <div class="row align-items-center">

                                    <div class="contact-container">
                                        <div class="contact-left">
                                            <center>
                                                <h1>Result Edit</h1>
                                            </center>
                                            <form class="contact-form" method="get" action="edit.php">
                                                <div class="single-row">
                                                    <select id="className" onchange="showFields()" name="class" class="form-in" require>
                                                        <option value="" selected>শ্রেণি নির্বাচন করুন ...</option>
                                                        <option value="ষষ্ঠ">ষষ্ঠ</option>
                                                        <option value="সপ্তম">সপ্তম</option>
                                                        <option value="অষ্টম">অষ্টম</option>
                                                        <option value="নবম">নবম</option>
                                                        <option value="দশম">দশম</option>
                                                    </select>
                                                    <select name="branch" id="branch" class="form-in" require>
                                                        <option value="">শাখা নির্বাচন করুন ...</option>
                                                        <option value="জুই">জুই</option>
                                                        <option value="বেলী">বেলী</option>
                                                        <option value="দোয়েল">দোয়েল</option>
                                                        <option value="কোয়েল">কোয়েল</option>
                                                        <option value="পদ্মা">পদ্মা</option>
                                                        <option value="মেঘনা">মেঘনা</option>
                                                        <option value="নজরুল">নজরুল</option>
                                                        <option value="রবীন্দ্র">রবীন্দ্র</option>
                                                        <option value="রোকেয়া">রোকেয়া</option>
                                                        <option value="সুফিয়া">সুফিয়া</option>
                                                    </select>

                                                </div>
                                                <div class="single-row">


                                                    <select name="groupName" id="group" class="form-in" onchange="showFields()">
                                                        <option value="" selected>গ্রুপ নির্বাচন করুন ...</option>
                                                        <option value="none">none</option>
                                                        <option value="science">Science</option>
                                                        <option value="commerce">Commerce</option>
                                                        <option value="arts">Arts</option>
                                                    </select>
                                                    <select name="exam_type" class="form-in">
                                                        <option value="">পরীক্ষার নাম নির্বাচন করুন ...</option>
                                                        <option value="গঠনকালীন মূল্যায়ণ">গঠনকালীন মূল্যায়ণ</option>
                                                        <option value="শ্রেণি অভিক্ষা-২">শ্রেণি অভিক্ষা-২</option>
                                                        <option value="শ্রেণি অভিক্ষা-১">শ্রেণি অভিক্ষা-১</option>
                                                        <option value="সাপ্তাহিক">সাপ্তাহিক</option>
                                                        <option value="নির্বাচনী">নির্বাচনী</option>
                                                        <option value="বার্ষিক">বার্ষিক</option>
                                                    </select>

                                                </div>


                                                <div class="single-row">
                                                    <select name="subject" class="form-in">
                                                        <option value="" selected>বিষয় নির্বাচন করুন ...</option>
                                                        <option value="bangla_1st">bangla_1st</option>
                                                        <option value="bangla_2nd">bangla_2nd</option>
                                                        <option value="english_1st">english_1st</option>
                                                        <option value="english_2nd">english_2nd</option>
                                                        <option value="math">math</option>
                                                        <option value="bgs">bgs</option>
                                                        <option value="ict">ict</option>
                                                        <option value="religion">religion</option>
                                                        <option value="science">science</option>
                                                        <option value="biology">biology</option>
                                                        <option value="chemistry">chemistry</option>
                                                        <option value="physics">physics</option>
                                                        <option value="higher_math">higher_math</option>
                                                        <option value="agricultural_studies">agricultural_studies</option>
                                                        <option value="economical">economical</option>
                                                        <option value="geography">geography</option>
                                                        <option value="history">history</option>
                                                        <option value="finance">finance</option>
                                                        <option value="accounting">accounting</option>
                                                        <option value="business_ent">business_ent</option>
                                                    </select>

                                                </div>
                                                <div class="multiple-row">

                                                    <center>
                                                        <input type="submit" class="button" value="Edit-Result" style="color: #000;background-color: #31d2f2;border-color: #25cff2">
                                                    </center>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-12" id="download">

                        <div class="card">

                            <div class="card-body">

                                <div class="row align-items-center">

                                    <div class="contact-container">
                                        <div class="contact-left">
                                            <center>
                                                <h1>Download Marksheet</h1>
                                            </center>
                                            <form class="contact-form" method="get" action="download.php">
                                                <div class="single-row">
                                                    <select id="className" onchange="showFields()" name="class" class="form-in" require>
                                                        <option value="" selected>শ্রেণি নির্বাচন করুন ...</option>
                                                        <option value="ষষ্ঠ">ষষ্ঠ</option>
                                                        <option value="সপ্তম">সপ্তম</option>
                                                        <option value="অষ্টম">অষ্টম</option>
                                                        <option value="নবম">নবম</option>
                                                        <option value="দশম">দশম</option>
                                                    </select>
                                                    <select name="branch" id="branch" class="form-in" require>
                                                        <option value="" selected>শাখা নির্বাচন করুন ...</option>
                                                        <option value="জুই">জুই</option>
                                                        <option value="বেলী">বেলী</option>
                                                        <option value="দোয়েল">দোয়েল</option>
                                                        <option value="কোয়েল">কোয়েল</option>
                                                        <option value="পদ্মা">পদ্মা</option>
                                                        <option value="মেঘনা">মেঘনা</option>
                                                        <option value="নজরুল">নজরুল</option>
                                                        <option value="রবীন্দ্র">রবীন্দ্র</option>
                                                        <option value="রোকেয়া">রোকেয়া</option>
                                                        <option value="সুফিয়া">সুফিয়া</option>
                                                    </select>

                                                </div>
                                                <div class="single-row">


                                                    <select name="groupName" id="group" class="form-in" onchange="showFields()">
                                                        <option value="none" selected>গ্রুপ নির্বাচন করুন ...</option>
                                                        <option value="none">none</option>
                                                        <option value="science">Science</option>
                                                        <option value="commerce">Commerce</option>
                                                        <option value="arts">Arts</option>
                                                    </select>
                                                    <select name="exam_type" class="form-in">
                                                        <option value="">পরীক্ষার নাম নির্বাচন করুন ...</option>
                                                        <option value="গঠনকালীন মূল্যায়ণ">গঠনকালীন মূল্যায়ণ</option>
                                                        <option value="শ্রেণি অভিক্ষা-২">শ্রেণি অভিক্ষা-২</option>
                                                        <option value="শ্রেণি অভিক্ষা-১">শ্রেণি অভিক্ষা-১</option>
                                                        <option value="সাপ্তাহিক">সাপ্তাহিক</option>
                                                        <option value="নির্বাচনী">নির্বাচনী</option>
                                                        <option value="বার্ষিক">বার্ষিক</option>
                                                    </select>

                                                </div>


                                                <div class="single-row">
                                                    <select name="subject" class="form-in">
                                                        <option value="" selected>বিষয় নির্বাচন করুন ...</option>
                                                        <option value="bangla_1st">bangla_1st</option>
                                                        <option value="bangla_2nd">bangla_2nd</option>
                                                        <option value="english_1st">english_1st</option>
                                                        <option value="english_2nd">english_2nd</option>
                                                        <option value="math">math</option>
                                                        <option value="bgs">bgs</option>
                                                        <option value="ict">ict</option>
                                                        <option value="religion">religion</option>
                                                        <option value="science">science</option>
                                                        <option value="biology">biology</option>
                                                        <option value="chemistry">chemistry</option>
                                                        <option value="physics">physics</option>
                                                        <option value="higher_math">higher_math</option>
                                                        <option value="agricultural_studies">agricultural_studies</option>
                                                        <option value="economical">economical</option>
                                                        <option value="geography">geography</option>
                                                        <option value="history">history</option>
                                                        <option value="finance">finance</option>
                                                        <option value="accounting">accounting</option>
                                                        <option value="business_ent">business_ent</option>
                                                        <option value="all">All</option>
                                                    </select>

                                                </div>
                                                <div class="multiple-row">

                                                    <center>
                                                        <input type="submit" style="background-color: #0d6efd;border-color: #0d6efd;color: #fff;" class="button" value="Download">
                                                    </center>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

        <script>
            $(document).ready(function() {
                $("#result2").submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: "POST",
                        url: "add.php",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            alert(data);
                        }
                    });
                });
                $("#result3").submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: "POST",
                        url: "Exsel_add.php",
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
            function showFields() {
                var className = document.getElementById("className").value;
                var group = document.getElementById("group").value;

                var science = document.getElementById("science");
                var commerce = document.getElementById("commerce");
                var arts = document.getElementById("arts");

                if (className === "নবম" || className === "দশম") {

                    if (group === "science") {
                        science.style.display = "block";
                        commerce.style.display = "none";
                        arts.style.display = "none";

                    } else if (group === "commerce") {
                        commerce.style.display = "block";
                        science.style.display = "none";
                        arts.style.display = "none";


                    } else if (group === "arts") {

                        arts.style.display = "block";
                        science.style.display = "none";
                        commerce.style.display = "none";

                    } else {
                        science.style.display = "none";
                        commerce.style.display = "none";
                        arts.style.display = "none";
                    }
                }
            }
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
    <!--  vendors -->
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