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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .pagination {
            display: flex;
            padding-left: 0;
            list-style: none;
            justify-content: space-around;
            margin: 20px;
        }

        input,
        select {
            width: 100%;
            height: 30px;
        }

        .pagination a {
            display: flex;
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;

            /* justify-content: space-around; */
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
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
                                                <h1>Student Registration</h1>
                                            </center>
                                            <div>
                                                <form action="student_add2.php" method="POST" enctype="multipart/form-data">

                                                    <label for="Student_Name_Bangla">Student Name (Bangla):</label>
                                                    <input type="text" required id="Student_Name_Bangla" name="Student_Name_Bangla"><br>

                                                    <label for="Student_Name_English">Student Name (English):</label>
                                                    <input type="text" required id="Student_Name_English" name="Student_Name_English"><br>

                                                    <label for="Fathers_Name_Bangla">Fathers' Name (Bangla):</label>
                                                    <input type="text" required id="Fathers_Name_Bangla" name="Fathers_Name_Bangla"><br>

                                                    <label for="Fathers_Name_English">Fathers' Name (English):</label>
                                                    <input type="text" required id="Fathers_Name_English" name="Fathers_Name_English"><br>

                                                    <label for="Mothers_Name_Bangla">Mothers' Name (Bangla):</label>
                                                    <input type="text" required id="Mothers_Name_Bangla" name="Mothers_Name_Bangla"><br>

                                                    <label for="Mothers_Name_English">Mothers' Name (English):</label>
                                                    <input type="text" required id="Mothers_Name_English" name="Mothers_Name_English"><br>

                                                    <label for="Divission">Divission:</label>
                                                    <input type="text" required id="Divission" name="Divission"><br>

                                                    <label for="District">District:</label>
                                                    <input type="text" required id="District" name="District"><br>

                                                    <label for="Upazila">Upazila:</label>
                                                    <input type="text" required id="Upazila" name="Upazila"><br>

                                                    <label for="Post_office">Post office:</label>
                                                    <input type="text" required id="Post_office" name="Post_office"><br>

                                                    <label for="Village">Village:</label>
                                                    <input type="text" required id="Village" name="Village"><br>

                                                    <label for="Class">Class:</label>

                                                    <select id="Class" name="Class">
                                                        <option value="ষষ্ঠ">ষষ্ঠ শ্রেণী</option>
                                                        <option value="সপ্তম">সপ্তম শ্রেণী</option>
                                                        <option value="অষ্টম">অষ্টম শ্রেণী</option>
                                                        <option value="নবম">নবম শ্রেণী</option>
                                                        <option value="দশম">দশম শ্রেণী</option>
                                                    </select>

                                                    <label for="Section">Section:</label>
                                                    <select id="Section" name="Section">
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


                                                    <label for="Group">Group:</label>
                                                    <select id="Group" name="Group">
                                                        <option value="none">none</option>
                                                        <option value="science">Science</option>
                                                        <option value="commerce">Commerce</option>
                                                        <option value="arts">Arts</option>
                                                    </select>


                                                    <label for="Roll_No">Roll No:</label>
                                                    <input type="text" required id="Roll_No" name="Roll_No"><br>

                                                    <label for="Session">Session:</label>

                                                    <input type="number" id="Session" name="Session" min="2010" max="2025"><br>

                                                    <label for="Gender">Gender:</label>
                                                    <select id="Gender" name="Gender">
                                                        <option>Select Gender</option>
                                                        <option value="m">Male</option>
                                                        <option value="f">Female</option>
                                                        <option value="o">Other</option>
                                                    </select>


                                                    <label for="Religion">Religion:</label>
                                                    <select id="Religion" name="Religion">
                                                        <option value="Islam">Islam</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Buddhist">Buddhist</option>
                                                        <option value="Christians">Christians</option>
                                                    </select>


                                                    <label for="St_Code">St Code:</label>
                                                    <input type="text" required id="St_Code" name="St_Code"><br>

                                                    <label for="UID_Number">UID Number:</label>
                                                    <input type="text" required id="UID_Number" name="UID_Number"><br>

                                                    <label for="Mobile_Number">Mobile Number:</label>
                                                    <input type="text" required id="Mobile_Number" name="Mobile_Number"><br>

                                                    <label for="Blood_Group">Blood Group:</label>
                                                    <select id="Blood_Group" name="Blood_Group">
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                    </select>
                                                    <input type="file" name="img" style="margin-top: 5px;" required>

                                                    <input type="submit" value="Registration" class="button" value="Edit-Result" style="color: #000;background-color: #31d2f2;border-color: #25cff2" name="submit">

                                                </form>
                                            </div>
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
                                                <h1>Total Student</h1>
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

                    <div class="col-xl-9 col-xxl-12" id="result_edit">

                        <div class="card">

                            <div class="card-body">

                                <div class="row align-items-center">

                                    <div class="contact-container">
                                        <div class="contact-left">
                                            <center>
                                                <h1>Student Edit</h1>
                                            </center>
                                            <form class="contact-form" method="get" action="edit_all.php">
                                                <div class="single-row">
                                                    <select id="className" onchange="showFields()" name="Class" class="form-in" required>
                                                        <option value="" selected>শ্রেণি নির্বাচন করুন ...</option>
                                                        <option value="ষষ্ঠ">ষষ্ঠ</option>
                                                        <option value="সপ্তম">সপ্তম</option>
                                                        <option value="অষ্টম">অষ্টম</option>
                                                        <option value="নবম">নবম</option>
                                                        <option value="দশম">দশম</option>
                                                    </select>
                                                    <select name="Section" class="form-in" require>
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
                    <div class="col-xl-9 col-xxl-12">

                        <div class="card">

                            <div class="card-body">

                                <div class="row align-items-center">

                                    <div class="contact-container">
                                        <div class="contact-left">
                                            <center>
                                                <h1>Import excel file</h1>
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
                    <div class="col-xl-9 col-xxl-12" id="result_edit">

                        <div class="card">

                            <div class="card-body">

                                <div class="row align-items-center">

                                    <div class="contact-container">
                                        <div class="contact-left">
                                            <center>
                                                <h1>View Student</h1>
                                            </center>
                                            <form class="contact-form" method="post" action="view_all.php">
                                                <div class="single-row">
                                                    <select id="className" onchange="showFields()" name="Class" class="form-in" require>
                                                        <option value="" selected>শ্রেণি নির্বাচন করুন ...</option>
                                                        <option value="ষষ্ঠ">ষষ্ঠ</option>
                                                        <option value="সপ্তম">সপ্তম</option>
                                                        <option value="অষ্টম">অষ্টম</option>
                                                        <option value="নবম">নবম</option>
                                                        <option value="দশম">দশম</option>
                                                    </select>
                                                    <select name="Section" id="branch" class="form-in" require>
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




                                                </div>



                                                <div class="multiple-row">

                                                    <center>
                                                        <input type="submit" class="button" value="View-Result" style="color: #000;background-color: #31d2f2;border-color: #25cff2">
                                                    </center>

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
                                                            <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash" onclick="return confirm('Are you sure you want to delete this?')"></i></h6>
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
                $("#student_add").submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                        type: "POST",
                        url: "student_add2.php",
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
                $("#total_message").load("../../data_load/total_message.php");
                $("#student_list").load("./student_list.php");
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