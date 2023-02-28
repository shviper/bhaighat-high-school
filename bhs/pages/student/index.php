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
                    <div class="col-xl-9 col-xxl-12">

                        <div class="card">

                            <div class="card-body">

                                <div class="row align-items-center">

                                    <div class="contact-container">
                                        <div class="contact-left">
                                            <center>
                                                <h1>Student add</h1>
                                            </center>
                                            <form class="contact-form" id="student_add">


                                                <div class="single-row">

                                                    <input type="text" name="Student_Name" placeholder="Student_Name" class="form-in" required>
                                                    <input type="text" name="parent_name" placeholder="parent_name" class="form-in" required>

                                                    <input type="text" name="village" placeholder="village" class="form-in" required>
                                                    <input type="number" name="number" placeholder="01900000" class="form-in" required>

                                                </div>
                                                <div class="single-row">
                                                    <select name="class" class="form-in" required>
                                                        <option value="ষষ্ঠ">ষষ্ঠ শ্রেণী</option>
                                                        <option value="সপ্তম">সপ্তম শ্রেণী</option>
                                                        <option value="অষ্টম">অষ্টম শ্রেণী</option>
                                                        <option value="নবম">নবম শ্রেণী</option>
                                                        <option value="দশম">দশম শ্রেণী</option>
                                                    </select>
                                                    <select name="branch" id="branch" class="form-in" require>
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

                                                    <input type="number" name="roll" placeholder="roll" class="form-in" required>
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
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header d-block d-sm-flex border-0">
                                <div class="me-3">
                                    <h4 class="card-title mb-2">Student List</h4>

                                </div>
                                <div class="card-tabs mt-3 mt-sm-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#six" role="tab">six</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#seven" role="tab">Seven</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#eight" role="tab">Eight</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#nine" role="tab">Nine</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#ten" role="tab">Ten</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body tab-content p-0">
                                <div class="tab-pane active show fade" id="six" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md card-table transactions-table">
                                            <tbody>
                                                <hr>
                                                <tr>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Edit
                                                        </h6>
                                                    </td>

                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Delete
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Roll
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Student Name
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Class
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Branch
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            parents Name
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            village
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Number
                                                        </h6>
                                                    </td>
                                                </tr>


                                                <?php

                                                $sql = "SELECT COUNT(*) as total FROM student_info WHERE class = 'ষষ্ঠ'";

                                                $result = $conn->query($sql);
                                                $row = $result->fetch_assoc();
                                                $total_records = $row['total'];

                                                // Calculate number of pages needed
                                                $records_per_page = 30;
                                                $total_pages = ceil($total_records / $records_per_page);

                                                // Determine current page number
                                                if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                                                    $current_page = (int) $_GET['page'];
                                                } else {
                                                    $current_page = 1;
                                                }
                                                // Set limits for SQL query
                                                $offset = ($current_page - 1) * $records_per_page;
                                                $sql = "SELECT * FROM student_info WHERE class = 'ষষ্ঠ'
                                            ORDER BY
                                                CASE 
                                                    WHEN branch = 'জুই' THEN 1
                                                    WHEN branch = 'বেলী' THEN 2
                                                    ELSE 3
                                                END ASC,
                                                CASE 
                                                    WHEN branch = 'বেলী' THEN roll -- order by roll if branch is বেলী
                                                    ELSE 0 -- otherwise, don't use roll in the order
                                                END ASC
                                            LIMIT $offset, $records_per_page;";
                                                $result = $conn->query($sql);

                                                // Display retrieved records
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {

                                                ?><tr>
                                                            <td>
                                                                <a id="notice_edit" href="edit2.php?id=<?php echo $row['id'] ?>">
                                                                    <h6 class=" fs-16 text-black font-w600 mb-0"><i class="fa-sharp fa-solid fa-file-pen "></i></h6>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a id="delete" href="delete2.php?id=<?php echo $row['id'] ?>">
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash"></i></h6>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['roll'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['Student_Name'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['class'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['branch'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['parent_name'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['village'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['number'] ?>
                                                                </h6>
                                                            </td>
                                                        </tr>

                                                <?php

                                                    }
                                                }
                                                ?>


                                            </tbody>

                                        </table>
                                        <?php

                                        if ($total_pages > 1) {
                                            echo "<div class='pagination'>";
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                if ($i == $current_page) {
                                                    echo "<a class='active'>$i</a>";
                                                } else {
                                                    echo "<a href='?page=$i'>$i</a>";
                                                }
                                            }
                                            echo "</div>";
                                        }

                                        ?>

                                    </div>
                                </div>
                                <div class="tab-pane" id="seven" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md card-table transactions-table">
                                            <tbody>
                                                <hr>
                                                <tr>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Edit
                                                        </h6>
                                                    </td>

                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Delete
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Roll
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Student Name
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Class
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Branch
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            parents Name
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            village
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Number
                                                        </h6>
                                                    </td>
                                                </tr>


                                                <?php

                                                $sql = "SELECT COUNT(*) as total FROM student_info WHERE class = 'সপ্তম'";

                                                $result = $conn->query($sql);
                                                $row = $result->fetch_assoc();
                                                $total_records = $row['total'];

                                                // Calculate number of pages needed
                                                $records_per_page = 30;
                                                $total_pages = ceil($total_records / $records_per_page);

                                                // Determine current page number
                                                if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                                                    $current_page = (int) $_GET['page'];
                                                } else {
                                                    $current_page = 1;
                                                }
                                                // Set limits for SQL query
                                                $offset = ($current_page - 1) * $records_per_page;
                                                $sql = "SELECT * FROM student_info WHERE class = 'সপ্তম'
                                            ORDER BY
                                                CASE 
                                                    WHEN branch = 'দোয়েল' THEN 1
                                                    WHEN branch = 'কোয়েল' THEN 2
                                                    ELSE 3
                                                END ASC,
                                                CASE 
                                                    WHEN branch = 'কোয়েল' THEN roll -- order by roll if branch is বেলী
                                                    ELSE 0 -- otherwise, don't use roll in the order
                                                END ASC
                                            LIMIT $offset, $records_per_page;";
                                                $result = $conn->query($sql);

                                                // Display retrieved records
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {

                                                ?><tr>
                                                            <td>
                                                                <a id="notice_edit" href="edit2.php?id=<?php echo $row['id'] ?>">
                                                                    <h6 class=" fs-16 text-black font-w600 mb-0"><i class="fa-sharp fa-solid fa-file-pen "></i></h6>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a id="delete" href="delete2.php?id=<?php echo $row['id'] ?>">
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash"></i></h6>
                                                                </a>
                                                            </td>

                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['roll'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['Student_Name'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['class'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['branch'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['parent_name'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['village'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['number'] ?>
                                                                </h6>
                                                            </td>
                                                        </tr>

                                                <?php

                                                    }
                                                }
                                                ?>


                                            </tbody>

                                        </table>
                                        <?php

                                        if ($total_pages > 1) {
                                            echo "<div class='pagination'>";
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                if ($i == $current_page) {
                                                    echo "<a class='active'>$i</a>";
                                                } else {
                                                    echo "<a href='?page=$i'>$i</a>";
                                                }
                                            }
                                            echo "</div>";
                                        }

                                        ?>

                                    </div>
                                </div>
                                <div class="tab-pane" id="eight" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md card-table transactions-table">
                                            <tbody>
                                                <hr>
                                                <tr>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Edit
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Delete
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Roll
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Student Name
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Class
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Branch
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            parents Name
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            village
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Number
                                                        </h6>
                                                    </td>
                                                </tr>


                                                <?php

                                                $sql = "SELECT COUNT(*) as total FROM student_info WHERE class = 'অষ্টম'";

                                                $result = $conn->query($sql);
                                                $row = $result->fetch_assoc();
                                                $total_records = $row['total'];

                                                // Calculate number of pages needed
                                                $records_per_page = 30;
                                                $total_pages = ceil($total_records / $records_per_page);

                                                // Determine current page number
                                                if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                                                    $current_page = (int) $_GET['page'];
                                                } else {
                                                    $current_page = 1;
                                                }
                                                // Set limits for SQL query
                                                $offset = ($current_page - 1) * $records_per_page;
                                                $sql = "SELECT * FROM student_info WHERE class = 'অষ্টম'
                                            -- ORDER BY
                                            --     CASE 
                                            --         WHEN branch = 'পদ্মা' THEN 1
                                            --         WHEN branch = 'মেঘনা' THEN 2
                                            --         ELSE 3
                                            --     END ASC,
                                            --     CASE 
                                            --         WHEN branch = 'মেঘনা' THEN roll -- order by roll if branch is বেলী
                                            --         ELSE 0 -- otherwise, don't use roll in the order
                                                -- END ASC
                                            LIMIT $offset, $records_per_page;";
                                                $result = $conn->query($sql);

                                                // Display retrieved records
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {

                                                ?><tr>
                                                            <td>
                                                                <a id="notice_edit" href="edit2.php?id=<?php echo $row['id'] ?>">
                                                                    <h6 class=" fs-16 text-black font-w600 mb-0"><i class="fa-sharp fa-solid fa-file-pen "></i></h6>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a id="delete" href="delete2.php?id=<?php echo $row['id'] ?>">
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash"></i></h6>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['roll'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['Student_Name'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['class'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['branch'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['parent_name'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['village'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['number'] ?>
                                                                </h6>
                                                            </td>
                                                        </tr>

                                                <?php

                                                    }
                                                }
                                                ?>


                                            </tbody>

                                        </table>
                                        <?php

                                        if ($total_pages > 1) {
                                            echo "<div class='pagination'>";
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                if ($i == $current_page) {
                                                    echo "<a class='active'>$i</a>";
                                                } else {
                                                    echo "<a href='?page=$i'>$i</a>";
                                                }
                                            }
                                            echo "</div>";
                                        }

                                        ?>

                                    </div>
                                </div>
                                <div class="tab-pane" id="nine" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md card-table transactions-table">
                                            <tbody>
                                                <hr>
                                                <tr>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Edit
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Delete
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Roll
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Student Name
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Class
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Branch
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            parents Name
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            village
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Number
                                                        </h6>
                                                    </td>
                                                </tr>


                                                <?php

                                                $sql = "SELECT COUNT(*) as total FROM student_info WHERE class = '৯ম'";

                                                $result = $conn->query($sql);
                                                $row = $result->fetch_assoc();
                                                $total_records = $row['total'];

                                                // Calculate number of pages needed
                                                $records_per_page = 30;
                                                $total_pages = ceil($total_records / $records_per_page);

                                                // Determine current page number
                                                if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                                                    $current_page = (int) $_GET['page'];
                                                } else {
                                                    $current_page = 1;
                                                }
                                                // Set limits for SQL query
                                                $offset = ($current_page - 1) * $records_per_page;
                                                $sql = "SELECT * FROM student_info WHERE class = '৯ম'
                                            -- ORDER BY
                                            --     CASE 
                                            --         WHEN branch = 'নজরুল' THEN 1
                                            --         WHEN branch = 'রবীন্দ্র' THEN 2
                                            --         ELSE 3
                                            --     END ASC,
                                            --     CASE 
                                            --         WHEN branch = 'রবীন্দ্র' THEN roll -- order by roll if branch is বেলী
                                            --         ELSE 0 -- otherwise, don't use roll in the order
                                            --     END ASC
                                            LIMIT $offset, $records_per_page;";
                                                $result = $conn->query($sql);

                                                // Display retrieved records
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {

                                                ?><tr>
                                                            <td>
                                                                <a id="notice_edit" href="edit2.php?id=<?php echo $row['id'] ?>">
                                                                    <h6 class=" fs-16 text-black font-w600 mb-0"><i class="fa-sharp fa-solid fa-file-pen "></i></h6>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a id="delete" href="delete2.php?id=<?php echo $row['id'] ?>">
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash"></i></h6>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['roll'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['Student_Name'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['class'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['branch'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['parent_name'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['village'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['number'] ?>
                                                                </h6>
                                                            </td>
                                                        </tr>

                                                <?php

                                                    }
                                                }
                                                ?>


                                            </tbody>

                                        </table>
                                        <?php

                                        if ($total_pages > 1) {
                                            echo "<div class='pagination'>";
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                if ($i == $current_page) {
                                                    echo "<a class='active'>$i</a>";
                                                } else {
                                                    echo "<a href='?page=$i'>$i</a>";
                                                }
                                            }
                                            echo "</div>";
                                        }

                                        ?>

                                    </div>
                                </div>
                                <div class="tab-pane" id="ten" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md card-table transactions-table">
                                            <tbody>
                                                <hr>
                                                <tr>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Edit
                                                        </h6>
                                                    </td>

                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Delete
                                                        </h6>
                                                    </td>

                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Roll
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Student Name
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Class
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Branch
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            parents Name
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            village
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-16 font-w600 mb-0">
                                                            Number
                                                        </h6>
                                                    </td>
                                                </tr>


                                                <?php

                                                $sql = "SELECT COUNT(*) as total FROM student_info WHERE class = '১০ম'";

                                                $result = $conn->query($sql);
                                                $row = $result->fetch_assoc();
                                                $total_records = $row['total'];

                                                // Calculate number of pages needed
                                                $records_per_page = 30;
                                                $total_pages = ceil($total_records / $records_per_page);

                                                // Determine current page number
                                                if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                                                    $current_page = (int) $_GET['page'];
                                                } else {
                                                    $current_page = 1;
                                                }
                                                // Set limits for SQL query
                                                $offset = ($current_page - 1) * $records_per_page;
                                                $sql = "SELECT * FROM student_info WHERE class = '১০ম'
                                            ORDER BY
                                                CASE 
                                                    WHEN branch = 'রোকেয়া' THEN 1
                                                    WHEN branch = 'সুফিয়া' THEN 2
                                                    ELSE 3
                                                END ASC,
                                                CASE 
                                                    WHEN branch = 'সুফিয়া' THEN roll -- order by roll if branch is বেলী
                                                    ELSE 0 -- otherwise, don't use roll in the order
                                                END ASC
                                            LIMIT $offset, $records_per_page;";
                                                $result = $conn->query($sql);

                                                // Display retrieved records
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {

                                                ?><tr>
                                                            <td>
                                                                <a id="notice_edit" href="edit2.php?id=<?php echo $row['id'] ?>">
                                                                    <h6 class=" fs-16 text-black font-w600 mb-0"><i class="fa-sharp fa-solid fa-file-pen "></i></h6>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a id="delete" href="delete2.php?id=<?php echo $row['id'] ?>">
                                                                    <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash"></i></h6>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['roll'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['Student_Name'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['class'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['branch'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['parent_name'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['village'] ?>
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="fs-16 font-w600 mb-0">
                                                                    <?php echo $row['number'] ?>
                                                                </h6>
                                                            </td>
                                                        </tr>

                                                <?php

                                                    }
                                                }
                                                ?>


                                            </tbody>

                                        </table>
                                        <?php

                                        if ($total_pages > 1) {
                                            echo "<div class='pagination'>";
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                if ($i == $current_page) {
                                                    echo "<a class='active'>$i</a>";
                                                } else {
                                                    echo "<a href='?page=$i'>$i</a>";
                                                }
                                            }
                                            echo "</div>";
                                        }

                                        ?>

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