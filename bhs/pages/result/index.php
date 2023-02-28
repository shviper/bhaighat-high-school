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

                                                    <input type="text" name="name" id="name" placeholder="Name" class="form-in" require>
                                                    <input type="text" name="roll" id="roll" placeholder="roll" class="form-in" require>
                                                </div>
                                                <div class="single-row">
                                                    <select id="mySelect" onchange="showFields()" name="class" class="form-in" require>
                                                        <option value="">Select a class</option>
                                                        <option value="ষষ্ঠ">Six</option>
                                                        <option value="সপ্তম">Seven</option>
                                                        <option value="অষ্টম">Eight</option>
                                                        <option value="নবম">Nine</option>
                                                        <option value="দশম">Ten</option>
                                                    </select>
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

                                                </div>
                                                <div class="multiple-row" id="groupdiv" style="display: none;">
                                                    <select name="group" id="group" onchange="showFields()" class="form-in">
                                                        <option value="none">Select a group</option>
                                                        <option value="none">none</option>
                                                        <option value="science">Science</option>
                                                        <option value="humanities">Commerce</option>
                                                        <option value="Arts">Arts</option>
                                                    </select>
                                                </div>

                                                <div class="all">
                                                    <div class="single-row">
                                                        <input type="number" name="bangla_1st" id="bangla" placeholder="bangla 1st" class="form-in" require>
                                                        <input type="number" name="bangla_2nd" id="bangla2" placeholder="bangla 2nd" class="form-in">
                                                        <input type="number" name="english_1st" id="english" placeholder="english 1st" class="form-in" require>
                                                        <input type="number" name="english_2nd" id="english2" placeholder="english 2nd" class="form-in">
                                                    </div>
                                                    <div class="single-row">
                                                        <input type="number" name="math" placeholder="math" class="form-in" require>
                                                        <input type="number" name="bgs" placeholder="Bangladesh And Global Studies" class="form-in" require>
                                                        <input type="number" name="religion" placeholder="religion" class="form-in" require>

                                                    </div>
                                                    <div class="multiple-row" id="gens">
                                                        <input type="number" name="gens" placeholder="science" class="form-in">
                                                    </div>
                                                </div>


                                                <center>
                                                    <h3 id="sub"></h3>
                                                </center>
                                                <div id="science_sub" style="display: none;">
                                                    <div class="single-row">
                                                        <input type="number" name="biology" placeholder="biology" class="form-in">
                                                        <input type="number" name="chemistry" placeholder="chemistry" class="form-in">
                                                    </div>
                                                    <div class="single-row">
                                                        <input type="number" name="physics" placeholder="physics" class="form-in">
                                                        <input type="number" name="higher_math" placeholder="higher math" class="form-in">
                                                        <input type="number" name="Agricultural_Studies" placeholder="Agricultural Studies" class="form-in">

                                                    </div>
                                                </div>
                                                <div id="Commerce" style="display: none;">
                                                    <div class="single-row">
                                                        <input type="number" name="Finance" placeholder="Finance & Banking" class="form-in">
                                                        <input type="number" name="Accounting" placeholder="Accounting" class="form-in">
                                                        <input type="number" name="Business Ent." placeholder="Business Ent" class="form-in">
                                                        <input type="number" name="Agricultural Studies" placeholder="Agricultural Studies" class="form-in">
                                                    </div>


                                                </div>
                                                <div id="Arts" style="display: none;">
                                                    <div class="single-row">

                                                        <input type="number" name="Economical" placeholder="Economical" class="form-in">

                                                        <input type="number" name="Geography_and_Environment" placeholder="Geography_and_Environment" class="form-in">

                                                        <input type="number" name="History" placeholder="History" class="form-in">
                                                        <input type="number" name="Agricultural_Studies" placeholder="Agricultural Studies" class="form-in">
                                                    </div>

                                                </div>

                                                <div class="multiple-row">

                                                    <!-- <center><button class="button" type="submit" name="submit">Publish
                                                        </button></center> -->
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


        <!-- <script>
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
        </script> -->


        <script>
            function showFields() {
                var select = document.getElementById("mySelect");
                var group = document.getElementById("group");
                var groupdiv = document.getElementById("groupdiv");
                var gens = document.getElementById("gens");
                var Commerce = document.getElementById("Commerce");
                var Arts = document.getElementById("Arts");

                var classSelect = select.options[select.selectedIndex].value;
                var groupSelect = group.options[group.selectedIndex].value;
                var science = document.getElementById("science_sub");
                var sub = document.getElementById("sub");

                if (classSelect === "nine" || classSelect === "ten") {
                    groupdiv.style.display = "block";

                    if (groupSelect === "science") {
                        sub.innerText = "science subject";
                        science.style.display = "block";
                        gens.style.display = "none";
                        Commerce.style.display = "none";
                        Arts.style.display = "none";

                    } else if (groupSelect === "humanities") {
                        sub.innerText = "Commerce subject";
                        Commerce.style.display = "block";
                        science.style.display = "none";
                        Arts.style.display = "none";


                    } else if (groupSelect === "Arts") {

                        sub.innerText = "Arts subject";
                        Arts.style.display = "block";
                        science.style.display = "none";
                        Commerce.style.display = "none";


                    } else {
                        science.style.display = "none";
                        Commerce.style.display = "none";
                        Arts.style.display = "none";
                        sub.innerText = "";
                    }
                } else {

                    groupdiv.style.display = "none";
                }
            }
        </script>

        <!-- <script>
            $(document).ready(function() {
                $("#teacher_list").load("./teacher_list.php");
                setInterval(function() {
                    $("#teacher_list").load("./teacher_list.php");

                }, 3000);

            });
        </script> -->

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