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


    <section>

        <div class="container content_wrap">

            <div class="row">
                <!-- <section> -->
                <?php
                $sql = "SELECT * FROM `dress`";
                $dress = mysqli_query($conn, $sql);

                if (mysqli_num_rows($dress) > 0) {
                    // output data of each row

                    while ($row = mysqli_fetch_assoc($dress)) {
                        $timestamp = $row['time'];

                ?>

                        <div class="card theme_shadow h-100 p-3" style="width: 100%;">
                            <div class="card-footer py-3"><small class="text-muted"><i class="theme_color2 fas fa-calendar-alt"></i><span class="date"> <?php echo $row["time"] ?> </span></small></div>
                            <div class="card-body">
                                <h5 class="card-title theme_color" style="font-size: 35px !important;"><?php echo $row["gander"] ?></h5>
                                <hr>
                                <h5 class="card-title theme_color">Description</h5>
                                <p style="margin-bottom: 30px;"><?php echo $row["discreption"] ?></p>
                                <h5 class="card-title theme_color">Badge</h5>
                                <p style="margin-bottom: 30px;"><?php echo $row["badge"] ?></p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
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