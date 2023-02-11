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
                <section>
                    <div class="container content_wrap">
                        <div class="row">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">ক্রমিক নং</th>
                                        <th scope="col">নোটিশ</th>
                                        <th scope="col">তারিখ</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <?php
                                $notice_sql = "SELECT * FROM `notice` ORDER BY id DESC";
                                $notice = mysqli_query($conn, $notice_sql);

                                if (mysqli_num_rows($notice) > 0) {
                                    // output data of each row
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($notice)) {
                                        $timestamp = $row['time'];

                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $row["notice_Headline"] ?></td>
                                                <td><?php echo date("Y-m-d", strtotime($timestamp)); ?></td>
                                                <td><a href="<?php echo "./notice_view.php?id=" . $row['id'] ?>" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                            </tr>


                                        </tbody>
                                <?php
                                    }
                                }
                                ?>
                            </table>
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