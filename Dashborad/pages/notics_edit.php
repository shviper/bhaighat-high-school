<?php
include '../auth/islogin.php';
include '../../config/database.php';
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $notice_Headline = $_POST['notice_Headline'];
    $categories = $_POST['categories'];
    $description = $_POST['description'];

    $sql = "UPDATE notice SET notice_Headline='$notice_Headline',categories='$categories', description='$description' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Notice updated successfully')</script>";
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

    <link href="../vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet" />
    <link rel="stylesheet" href="../vendor/nouislider/nouislider.min.css" />
    <!-- Style css -->
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/style2.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <?php include '../components/nav_header.php'; ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php include '../components/header.php'; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include '../components/sidebar.php'; ?>
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
                                    <?php
                                    $id = $_GET['id'];
                                    $id = mysqli_real_escape_string($conn, $id);
                                    $notice_sql = "SELECT * FROM `notice` WHERE id=$id";
                                    $notice = mysqli_query($conn, $notice_sql);
                                    mysqli_num_rows($notice);
                                    $row = mysqli_fetch_assoc($notice);
                                    ?>

                                    <div class="contact-container">
                                        <div class="contact-left">
                                            <center>
                                                <h1>Notice Update</h1>
                                            </center>

                                            <form class="contact-form" id="notice" action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $row["id"] ?>" method="post">

                                                <div class="multiple-row">
                                                    <label for="notice_Headline">Notice Headline</label>
                                                    <input type="text" name="notice_Headline" placeholder="headline" class="form-in" value="<?php echo $row["notice_Headline"] ?>" required>

                                                    <label for="notice Categories">Notice Categories</label>
                                                    <select name="categories" class="form-in">
                                                        <option value="পরীক্ষা সংক্রান্ত">পরীক্ষা সংক্রান্ত </option>
                                                        <option value="ফলাফল সংক্রান্ত">ফলাফল সংক্রান্ত </option>
                                                        <option value="">অন্যান্য </option>
                                                    </select>
                                                    <label for="notice description">Notice description</label>
                                                    <textarea placeholder="notice discreption..." class="form-in" name="description" id="description"><?php echo $row["description"] ?></textarea>
                                                    <script>
                                                        tinymce.init({
                                                            selector: "#description",
                                                            plugins: "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                                                            toolbar: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                                                        });
                                                    </script>

                                                    <center><button class="button" type="submit" name="submit">Update</button></center>

                                                    <a class="button" href="../index.php" style="background: green;">Back</a>

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
                $("#notice").submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "../data_load/notics.php",
                        data: $("#notice").serialize(),
                        success: function(response) {
                            alert("Notice Updated Successfully!");
                        }
                    });
                });
            });
        </script> -->





        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <?php include '../components/footer.php'; ?>
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
    <script src="../vendor/global/global.min.js"></script>
    <script src="../vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="../vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>


    <!-- Dashboard 1 -->
    <script src="../js/dashboard/dashboard-1.js"></script>

    <script src="../js/custom.min.js"></script>
    <script src="../js/dlabnav-init.js"></script>
    <script src="../js/demo.js"></script>
    <script src="../js/styleSwitcher.js"></script>
</body>

</html>