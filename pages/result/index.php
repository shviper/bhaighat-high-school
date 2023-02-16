<?php

include("../../config/database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- link include -->
  <?php include '../../components/link.php'; ?>
  <style>
    .mini-profile-widget .image-container .avatar {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 50%;
      display: block;
      height: 180px;
      margin: 0 auto;
      padding: 4px;
      width: 180px
    }
  </style>

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
        <div class="col-lg-9 col-md-12 col-sm-12">

          <div class="row">
            <div class="col-12">
              <?php include '../../components/notice_mar.php'; ?>
            </div>
          </div>



          <div class="row">

            <div class="contact-wrap w-100 p-md-5 p-4">
              <div id="form-message-warning" class="mb-4"></div>
              <div>
                <h1>coming soon...</h1>
              </div>
            </div>

          </div>


        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">
          <?php include '../../components/sideber.php'; ?>

          <div class="pd-4"></div>

          <?php include '../../components/official_link.php'; ?>

          <div class="pd-4"></div>

          <?php include '../../components/admit_notice.php'; ?>

          <div class="pd-4"></div>
        </div>
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