<?php include '../../config/database.php'; ?>
<?php include '../../counter.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- link include -->
    <?php include '../../components/link.php'; ?>

</head>

<body>

    <!-- header img -->
    <?php include '../../components/header_img.php'; ?>

    <!-- navber -->
    <?php include '../../components/navber.php'; ?>

    <!-- navber down space -->
    <div class="container content_wrap">
        <div class="row">
            <div class="pd-4"></div>
        </div>
    </div>

    <?php

    $id = $_GET['id'];
    $id = mysqli_real_escape_string($conn, $id);
    $notice_sql = "SELECT * FROM `notice` WHERE id=$id";
    $notice = mysqli_query($conn, $notice_sql);
    mysqli_num_rows($notice);
    $row = mysqli_fetch_assoc($notice);
    $timestamp = $row['time'];

    ?>

    <section>

        <div class="container content_wrap">

            <div class="row">
                <!-- <section> -->


                <div class="card theme_shadow h-100 p-3" style="width: 100%;">
                    <div class="card-footer py-3"><small class="text-muted"><i class="theme_color2 fas fa-calendar-alt"></i><span class="date"> <?php echo $row["time"] ?> </span></small></div>
                    <div class="card-body">
                        <h5 class="card-title theme_color" style="font-size: 35px !important;"><?php echo $row["notice_Headline"] ?></h5>
                        <hr>
                        <h5 class="card-title theme_color">Description</h5>
                        <p style="margin-bottom: 30px;"><?php echo $row["description"] ?></p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </div>

    </div>

    </section>


    <div class="container content_wrap">
        <footer>

            <?php include '../../components/fotter.php'; ?>
        </footer>
    </div>






    <?php include '../../components/script.php'; ?>
</body>

</html>