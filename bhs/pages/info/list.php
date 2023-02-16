<?php
include '../../../config/database.php';
?>

<div class="card-body tab-content p-0">
    <div class="tab-pane active show fade" role="tabpanel">
        <div class="table-responsive" style="display: flex;flex-wrap: wrap;">
            <?php
            $sql = "SELECT * FROM `slider`";
            $slider = mysqli_query($conn, $sql);

            if (mysqli_num_rows($slider) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($slider)) {

            ?>
                    <div class="image-area" style="margin:10px;">
                        <img class="img" src="<?php echo $webName ?>/img/header_img/<?php echo $row["img"] ?>" alt="Preview">

                        <a class="remove-image" id="remove" href="delete.php?id=<?php echo $row['id'] ?>" style="display: inline;">&#215;</a>
                    </div>


            <?php
                }
            }

            ?>


        </div>
    </div>
</div>