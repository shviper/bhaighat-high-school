<?php
include '../../auth/islogin.php';
include '../../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_GET['id'];
    $Name = $_POST['Name'];
    $Designation = $_POST['Designation'];
    $Educational_Qualifications = $_POST['Educational_Qualifications'];
    $Address = $_POST['Address'];
    $Mobile_Number = $_POST['Mobile_Number'];
    $Email = $_POST['Email'];
    $join_date = $_POST['join_date'];

    $sql = "UPDATE teacher SET Name = '$Name', Designation = '$Designation', Educational_Qualifications = '$Educational_Qualifications', Mobile_Number = '$Mobile_Number', Email = '$Email', join_date = '$join_date' WHERE Id = $id";


    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Teacher Data Added successfully')</script>";
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
                                        <?php
                                        $id = $_GET['id'];
                                        $id = mysqli_real_escape_string($conn, $id);
                                        $sql = "SELECT * FROM teacher WHERE Id=$id";
                                        $teacher = mysqli_query($conn, $sql);
                                        mysqli_num_rows($teacher);
                                        $row = mysqli_fetch_assoc($teacher);
                                        ?>
                                        <div class="contact-left">
                                            <center>
                                                <h1>Teacher Add</h1>
                                            </center>
                                            <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $row["Id"] ?>" method="post">
                                                <div class="single-row">

                                                    <input type="text" name="Name" value="<?php echo $row['Name'] ?>" placeholder="Enter teacher Name" class="form-in" required>
                                                    <input type="text" name="Designation" value="<?php echo $row['Designation'] ?>" placeholder="Designation" class="form-in" required>
                                                </div>
                                                <div class="single-row">

                                                    <input type="text" name="Educational_Qualifications" value="<?php echo $row['Educational_Qualifications'] ?>" placeholder="Educational Qualifications" class="form-in" required>
                                                    <input type="text" name="Mobile_Number" value="<?php echo $row['Mobile_Number'] ?>" placeholder="019000000" class="form-in" required>
                                                </div>
                                                <div class="single-row">

                                                    <input type="Email" name="Email" value="<?php echo $row['Email'] ?>" placeholder="example@email.com" class="form-in" required style="text-transform: lowercase;">
                                                    <input type="date" name="join_date" class="form-in" value="<?php echo $row['join_date'] ?>" required>
                                                </div>
                                                <div class="multiple-row">
                                                    <input type="text" name="Address" value="<?php echo $row['Address'] ?>" placeholder="Address" class="form-in" required>
                                                    <!-- <input type="file" name="image" placeholder="pucture" class="form-in" disabled> -->

                                                    <center><button class="button" type="submit" name="submit">Update
                                                        </button></center>
                                                    <a class="button" href="./index.php" style="background: green;">Back</a>
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









        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>
                    © Designed &amp; by
                    <a href="https://web.facebook.com/shviper" target="_blank">Sajjad Hasan Riyad</a> 2023
                </p>
            </div>
        </div>
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