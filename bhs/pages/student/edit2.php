<?php
include '../../auth/islogin.php';
include '../../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_GET['id'];
    $Student_Name = $_POST['Student_Name'];
    $parent_name = $_POST['parent_name'];
    $village = $_POST['village'];
    $number = $_POST['number'];
    $class = $_POST['class'];
    $branch = $_POST['branch'];
    $roll = $_POST['roll'];

    $sql = "UPDATE student_info SET Student_Name = '$Student_Name',parent_name = '$parent_name',village = '$village',number = '$number',class = '$class',branch = '$branch',roll = '$roll'
     WHERE Id = $id";


    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Student Data updated successfully')</script>";
    } else {
        echo "script>alert('fail!Some thing is wrong !')</script>";
    }
}

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
                                                <h1>Student add</h1>
                                            </center>

                                            <?php
                                            $id = $_GET['id'];
                                            $id = mysqli_real_escape_string($conn, $id);
                                            $sql = "SELECT * FROM student_info WHERE Id=$id";
                                            $student = mysqli_query($conn, $sql);
                                            mysqli_num_rows($student);
                                            $row = mysqli_fetch_assoc($student);
                                            ?>

                                            <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $row['id'] ?>" method="post">


                                                <div class="single-row">

                                                    <input type="text" name="Student_Name" placeholder="Student_Name" value="<?php echo $row['Student_Name'] ?>" class="form-in" required>


                                                    <input type="text" name="parent_name" value="<?php echo $row['parent_name'] ?>" placeholder="parent_name" class="form-in" required>

                                                    <input type="text" name="village" placeholder="village" class="form-in" required value="<?php echo $row['village'] ?>">
                                                    <input type="number" name="number" placeholder="01900000" class="form-in" required value="<?php echo $row['number'] ?>">

                                                </div>
                                                <div class="single-row">
                                                    <select name="class" class="form-in" required>
                                                        <option value="<?php echo $row['class'] ?>"><?php echo $row['class'] ?> শ্রেণী</option>
                                                        <option value="ষষ্ঠ">ষষ্ঠ শ্রেণী</option>
                                                        <option value="সপ্তম">সপ্তম শ্রেণী</option>
                                                        <option value="অষ্টম">অষ্টম শ্রেণী</option>
                                                        <option value="নবম">নবম শ্রেণী</option>
                                                        <option value="দশম">দশম শ্রেণী</option>
                                                    </select>
                                                    <select name="branch" id="branch" class="form-in" require>
                                                        <option value="<?php echo $row['branch'] ?>"><?php echo $row['branch'] ?></option>
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

                                                    <input type="number" value="<?php echo $row['roll'] ?>" name="roll" placeholder="roll" class="form-in" required>
                                                </div>
                                                <center><button class="button" type="submit" name="submit">Publish
                                                    </button></center>
                                                <a class="button" href="./index.php" style="background: green;">Back</a>


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