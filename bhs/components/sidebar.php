<div class="dlabnav">
  <div class="dlabnav-scroll">
    <ul class="metismenu" id="menu">
      <li class="dropdown header-profile">
        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
          <?php
          $id = $_COOKIE['id'];
          $sql = "SELECT * FROM teacher WHERE id = '$id'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          ?>
          <img src="<?php echo $webName ?>/img/teacher/<?php echo $row['Picture'] ?>" width="20" />
          <div class="header-info ms-3">
            <span class="font-w600"><b><?php echo $row['Name'] ?></b></span>
            <small class="text-end font-w400"></small>
          </div>
        </a>
      </li>
      <?php
      if ($row['Designation'] == 'প্রধান শিক্ষক') {
      ?>
        <li>
          <a href="<?php echo $webName ?>/bhs/" aria-expanded="false" style="padding: 10px 20px">
            <i class="flaticon-025-dashboard"></i>
            <span class="nav-text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $webName ?>/bhs/pages/teacher/" aria-expanded="false" style="padding: 10px 20px">
            <i class="fa-sharp fa-solid fa-person-chalkboard"></i>
            <span class="nav-text">Teacher</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $webName ?>/bhs/pages/student/" aria-expanded="false" style="padding: 10px 20px">
            <i class="fa-solid fa-user-graduate"></i>
            <span class="nav-text">Student</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $webName ?>/bhs/pages/result" aria-expanded="false" style="padding: 10px 20px">
            <i class="fa-solid fa-square-poll-vertical"></i>
            <span class="nav-text">Result</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $webName ?>/bhs/pages/photo_gallery/" aria-expanded="false" style="padding: 10px 20px">
            <i class="fa-solid fa-photo-film"></i>
            <span class="nav-text">Gallery</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $webName ?>/bhs/pages/committee/" aria-expanded="false" style="padding: 10px 20px">
            <i class="fa-solid fa-people-roof"></i>
            <span class="nav-text">Committee</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $webName ?>/bhs/pages/message/" class="ai-icon" aria-expanded="false" style="padding: 10px 20px">
            <i class="fa-solid fa-message"></i>
            <span class="nav-text">Message</span>
          </a>
        </li>

        <li>
          <a href="<?php echo $webName ?>/bhs/pages/info" aria-expanded="false" style="padding: 10px 20px">
            <i class="fa-solid fa-circle-info"></i>
            <span class="nav-text">Info</span>
          </a>
        </li>
      <?php } else { ?>
        <li>
          <a href="<?php echo $webName ?>/bhs/pages/result" aria-expanded="false" style="padding: 10px 20px">
            <i class="fa-solid fa-square-poll-vertical"></i>
            <span class="nav-text">Result</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $webName ?>/bhs/pages/student/" aria-expanded="false" style="padding: 10px 20px">
            <i class="fa-solid fa-user-graduate"></i>
            <span class="nav-text">Student</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $webName ?>/bhs/pages/photo_gallery/" aria-expanded="false" style="padding: 10px 20px">
            <i class="fa-solid fa-photo-film"></i>
            <span class="nav-text">Gallery</span>
          </a>
        </li>
      <?php } ?>
    </ul>
  </div>
</div>