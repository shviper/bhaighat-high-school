<div class="headersidebar">
    <h1 class="fth">ভর্তি চলছে</h1>
    <div class="important_link">
        <?php
        $sql = "SELECT * FROM `ad_notice` WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        ?>
        <img src="<?php echo $webName ?>/img/header_img/<?php echo $row['img']; ?>" alt="" width="260px" height="auto" />
    </div>
</div>