<div class="notice">
  <ul>
    <?php
    $sql = "SELECT * FROM `notice` ORDER BY id DESC LIMIT 3";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <li>
          <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          <a href="<?php echo $webName ?>/pages/notice/notice_view.php?id=<?php echo $row['id'] ?>"><?php echo $row['notice_Headline'] ?></a>
      <?php

      }
    }
      ?>
  </ul>
  <a href="<?php echo $webName ?>/pages/notice/" class="ntcmore"><button type="button" class="btn btn-dark">
      বিস্তারিত..
    </button></a>
</div>