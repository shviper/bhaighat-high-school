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
                                                <h1>Result</h1>
                                            </center>
                                            <form class="contact-form" action="add.php" method="POST">
                                                <div class="single-row">
                                                    <input type="number" require name="roll" id="roll" placeholder="roll" class="form-in" require>
                                                    <select id="className" onchange="showFields()" name="class" class="form-in" require>
                                                        <option value="">Select a class</option>
                                                        <option value="ষষ্ঠ">Six</option>
                                                        <option value="সপ্তম">Seven</option>
                                                        <option value="অষ্টম">Eight</option>
                                                        <option value="নবম">Nine</option>
                                                        <option value="দশম">Ten</option>
                                                    </select>
                                                </div>
                                                <div class="single-row">

                                                    <select name="branch" id="branch" class="form-in" require>
                                                        <option value="জুই">Jui</option>
                                                        <option value="বেলী">Beli</option>
                                                        <option value="দোয়েল">Duel</option>
                                                        <option value="কোয়েল">Kuel</option>
                                                        <option value="পদ্মা">Meghna</option>
                                                        <option value="মেঘনা">Padma</option>
                                                        <option value="নজরুল">Nazrul</option>
                                                        <option value="রবীন্দ্র">Rabindra</option>
                                                        <option value="রোকেয়া">Rokeya</option>
                                                        <option value="সুফিয়া">Sufia</option>
                                                    </select>
                                                    <select name="group" id="group" class="form-in" onchange="showFields()">
                                                        <option value=" none">none</option>
                                                        <option value="science">Science</option>
                                                        <option value="commerce">Commerce</option>
                                                        <option value="arts">Arts</option>
                                                    </select>
                                                    <select name="exam_type" class="form-in">
                                                        <option value="গঠনকালীন মূল্যায়ণ">গঠনকালীন মূল্যায়ণ</option>
                                                        <option value="শ্রেণি অভিক্ষা-২">শ্রেণি অভিক্ষা-২</option>
                                                        <option value="শ্রেণি অভিক্ষা-১">শ্রেণি অভিক্ষা-১</option>
                                                        <option value="সাপ্তাহিক">সাপ্তাহিক</option>
                                                        <option value="নির্বাচনী">নির্বাচনী</option>
                                                        <option value="বার্ষিক">বার্ষিক</option>
                                                    </select>

                                                </div>

                                                <div class="genarel">
                                                    <center>
                                                        <h4>Bangla</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">

                                                        <input type="number" require name="bangla_1st_full_marks" value="100" placeholder="1st Full Marks" class="form-in">
                                                        <input type="number" require name="bangla_1st_MCQ" placeholder="1st MCQ" class="form-in">
                                                        <input type="number" require name="bangla_1st_CQ" placeholder="1st CQ" class="form-in">
                                                        <input type="number" require name="bangla_2nd_full_marks" value="100" placeholder="2nd Full Marks" class="form-in">
                                                        <input type="number" require name="bangla_2nd_MCQ" placeholder="2nd MCQ" class="form-in">
                                                        <input type="number" require name="bangla_2nd_CQ" placeholder="2nd CQ" class="form-in">

                                                    </div>
                                                    <center>
                                                        <h4>English</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <input type="number" require name="english_1st_full_marks" value="100" placeholder="1st Full Marks" class="form-in">
                                                        <input type="number" require name="english_1st_MCQ" placeholder="1st MCQ" class="form-in">
                                                        <input type="number" require name="english_1st_CQ" placeholder="1st CQ" class="form-in">
                                                        <input type="number" require name="english_2nd_full_marks" value="100" placeholder="2nd Full Marks" class="form-in">
                                                        <input type="number" require name="english_2nd_MCQ" placeholder="2nd MCQ" class="form-in">
                                                        <input type="number" require name="english_2nd_CQ" placeholder="2nd CQ" class="form-in">

                                                    </div>
                                                    <center>
                                                        <h4>Math</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <input type="number" require name="math_full_marks" value="100" placeholder="Math Full Marks" class="form-in">
                                                        <input type="number" require name="math_MCQ" placeholder="Math MCQ" class="form-in">
                                                        <input type="number" require name="math_CQ" placeholder="Math CQ" class="form-in">

                                                    </div>
                                                    <center>
                                                        <h4>bangladesh and global studies</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <input type="text" name="bgs_full_marks" value="100" placeholder="BGS Full Marks" class="form-in">
                                                        <input type="text" name="bgs_MCQ" placeholder="BGS MCQ" class="form-in">
                                                        <input type="text" name="bgs_CQ" placeholder="BGS CQ" class="form-in">

                                                    </div>
                                                    <center>
                                                        <h4>NFORMATION AND COMMUNICATION TECHNOLOGY</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <input type="text" name="ict_full_marks" value="100" placeholder="ICT Full Marks" class="form-in">
                                                        <input type="text" name="ict_MCQ" placeholder="ICT MCQ" class="form-in">
                                                        <input type="text" name="ict_CQ" placeholder="ICT CQ" class="form-in">

                                                    </div>
                                                    <center>
                                                        <h4>Religion</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <input type="number" require name="religion_full_marks" value="100" placeholder="Religion Full Marks" class="form-in">
                                                        <input type="number" require name="religion_MCQ" placeholder="Religion MCQ" class="form-in">
                                                        <input type="number" require name="religion_CQ" placeholder="Religion CQ" class="form-in">

                                                    </div>
                                                    <center>
                                                        <h4>Science</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <input type="number" require name="science_full_marks" value="100" placeholder="science Full Marks" class="form-in">
                                                        <input type="number" require name="science_MCQ" placeholder="science MCQ" class="form-in">
                                                        <input type="number" require name="science_CQ" placeholder="science CQ" class="form-in">

                                                    </div>

                                                </div>

                                                <div id="science" style="display: none;">
                                                    <hr>
                                                    <h2>Science Subject</h2>
                                                    <center>
                                                        <h4>Biology</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <input type="number" require name="biology_full_marks" value="100" class="form-in" placeholder="Biology Full Marks">
                                                        <input type="number" require name="biology_MCQ" class="form-in" placeholder="Biology MCQ">
                                                        <input type="number" require name="biology_CQ" class="form-in" placeholder="Biology CQ">
                                                    </div>
                                                    <center>
                                                        <h4>Chemistry</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <input type="number" require name="chemistry_full_marks" value="100" class="form-in" placeholder="Chemistry Full Marks">
                                                        <input type="number" require name="chemistry_MCQ" class="form-in" placeholder="Chemistry MCQ">
                                                        <input type="number" require name="chemistry_CQ" class="form-in" placeholder="Chemistry CQ">
                                                    </div>
                                                    <center>
                                                        <h4>Physics</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <input type="number" require name="physics_full_marks" value="100" class="form-in" placeholder="Physics Full Marks">
                                                        <input type="number" require name="physics_MCQ" class="form-in" placeholder="Physics MCQ">
                                                        <input type="number" require name="physics_CQ" class="form-in" placeholder="Physics CQ">
                                                    </div>
                                                    <center>
                                                        <h4>Higher Math</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <!-- Higher Math -->
                                                        <input type="number" require name="higher_math_full_marks" value="100" class="form-in" placeholder="Higher Math Full Marks">
                                                        <input type="number" require name="higher_math_MCQ" class="form-in" placeholder="Higher Math MCQ">
                                                        <input type="number" require name="higher_math_CQ" class="form-in" placeholder="Higher Math CQ">
                                                    </div>
                                                    <center>
                                                        <h4>Agricultural Studies</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <!-- Agricultural Studies -->
                                                        <input type="number" require name="agricultural_studies_full_marks" value="100" class="form-in" placeholder="Agricultural Studies Full Marks">
                                                        <input type="number" require name="agricultural_studies_MCQ" class="form-in" placeholder="Agricultural Studies MCQ">
                                                        <input type="number" require name="agricultural_studies_CQ" class="form-in" placeholder="Agricultural Studies CQ">
                                                    </div>

                                                </div>
                                                <div id="commerce" style="display: none;">
                                                    <hr>
                                                    <h2>Commerce Subject</h2>

                                                    <center>
                                                        <h4>Finance</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <!-- Finance -->
                                                        <input type="number" require name="finance_full_marks" value="100" class="form-in" placeholder="Finance Full Marks">
                                                        <input type="number" require name="finance_MCQ" class="form-in" placeholder="Finance MCQ">
                                                        <input type="number" require name="finance_CQ" class="form-in" placeholder="Finance CQ">
                                                    </div>
                                                    <center>
                                                        <h4>Accounting</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <!-- Accounting -->
                                                        <input type="number" require name="accounting_full_marks" value="100" class="form-in" placeholder="Accounting Full Marks">
                                                        <input type="number" require name="accounting_MCQ" class="form-in" placeholder="Accounting MCQ">
                                                        <input type="number" require name="accounting_CQ" class="form-in" placeholder="Accounting CQ">
                                                    </div>
                                                    <center>
                                                        <h4>Business_Ent</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <!-- Business_Ent -->
                                                        <input type="number" require name="business_ent_full_marks" value="100" class="form-in" placeholder="Business_Ent Full Marks">
                                                        <input type="number" require name="business_ent_MCQ" class="form-in" placeholder="Business_Ent MCQ">
                                                        <input type="number" require name="business_ent_CQ" class="form-in" placeholder="Business_Ent CQ">

                                                    </div>
                                                </div>
                                                <div id="arts" style="display: none;">
                                                    <hr>
                                                    <h2>Arts Subject</h2>
                                                    <center>
                                                        <h4>Economical</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <!-- Economical -->
                                                        <input type="number" require name="economical_full_marks" value="100" class="form-in" placeholder="Economical Full Marks">
                                                        <input type="number" require name="economical_MCQ" class="form-in" placeholder="Economical MCQ">
                                                        <input type="number" require name="economical_CQ" class="form-in" placeholder="Economical CQ">
                                                    </div>
                                                    <center>
                                                        <h4>Geography and Environmen</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <!-- Geography and Environment -->
                                                        <input type="number" require name="geography_and_environment_full_marks" value="100" class="form-in" placeholder="Geography and Environment Full Marks">
                                                        <input type="number" require name="geography_and_environment_MCQ" class="form-in" placeholder="Geography and Environment MCQ">
                                                        <input type="number" require name="geography_and_environment_CQ" class="form-in" placeholder="Geography and Environment CQ">
                                                    </div>
                                                    <center>
                                                        <h4>History</h4>
                                                    </center>
                                                    <hr>
                                                    <div class="single-row">
                                                        <!-- History -->
                                                        <input type="number" require name="history_full_marks" value="100" class="form-in" placeholder="History Full Marks">
                                                        <input type="number" require name="history_MCQ" class="form-in" placeholder="History MCQ">
                                                        <input type="number" require name="history_CQ" class="form-in" placeholder="History CQ">
                                                    </div>

                                                </div>

                                                <div class="multiple-row">

                                                    <center>
                                                        <input type="submit" class="button" value="Publish" name="submit">
                                                    </center>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-12">

                        <div class="card">

                            <div class="card-body">

                                <div class="row align-items-center">

                                    <div class="contact-container">
                                        <div class="contact-left">
                                            <center>
                                                <h1>Result Import with Excel</h1>
                                            </center>
                                            <form enctype="multipart/form-data" method="post" class="contact-form" action="Exsel_add.php">

                                                <div class="multiple-row">
                                                    <input class="form-in" type="file" name="file" class="form-in" required>
                                                    <center>
                                                        <input type="submit" class="button" value="Publish" name="submit2">
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