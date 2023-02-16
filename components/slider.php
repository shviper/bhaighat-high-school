<div class="carousel-inner">
  <?php
  $sql = "SELECT * FROM `slider`";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

  ?>
      <div class="carousel-item
      <?php
      if ($row['id'] == 1) {
        echo "active";
      } else {
        echo "";
      }
      ?>">
        <img src="<?php echo $webName ?>/img/header_img/<?php echo $row['img'] ?>" class="d-block w-100" alt="..." />
      </div>
  <?php
    }
  }
  ?>
</div>