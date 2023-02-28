<div class="mar">
  <marquee class="pused" width="100%" direction="left" height="100px" onMouseOver="this.stop()" onMouseOut="this.start()">
    <?php
    $sql = "SELECT * FROM `notice` ORDER BY id DESC LIMIT 3";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <a href="<?php echo $webName ?>/pages/notice/notice_view.php?id=<?php echo $row['id'] ?>">
          <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
          <?php echo $row['notice_Headline'] ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php

      }
    }
    ?>

  </marquee>
</div>