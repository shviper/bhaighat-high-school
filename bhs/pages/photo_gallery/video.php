<?php
include '../../../config/database.php';
?>

<div class="card-body tab-content p-0">
    <div class="tab-pane active show fade" role="tabpanel">
        <div class="table-responsive" style="display: flex;flex-wrap: wrap;">
            <?php
            $sql = "SELECT * FROM `gallery`";
            $gallery = mysqli_query($conn, $sql);

            if (mysqli_num_rows($gallery) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($gallery)) {
            ?>
                    <?php
                    $filename = $row["file"];
                    $type = strtolower(end(explode(".", $filename))); // the name of the file to check
                    if ($type == "mp4" or $type == "webm" or $type == "mkv") {
                    ?>
                        <div class="image-area" style="margin:10px;">
                            <video width="300" height="150" controls>
                                <source src="<?php echo $webName ?>/img/gallery/photo/<?php echo $row["file"] ?>" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>
                        </div>

            <?php

                    } else {
                        continue;
                    }
                }
            }

            ?>


        </div>
    </div>
</div>