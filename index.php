<?php include './config/database.php'; ?>
<?php include './counter.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- link include -->
  <?php include './components/link.php'; ?>

</head>

<body>

  <!-- header img -->
  <?php include './components/header_img.php'; ?>

  <!-- navber -->
  <?php include './components/navber.php'; ?>

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
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <?php include './components/slider.php'; ?>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="pd-4"></div>

          <?php include './components/notice_mar.php'; ?>


          <div class="pd-4"></div>

          <h1 class="fth">নোটিশ</h1>
          <?php include './components/notice_view.php'; ?>

          <div class="pd-4"></div>

          <div class="block_wrap">
            <h1 class="fth">বিস্তারিত</h1>
            <div class="">
              <div class="card-body">
                <h5 class="card-title fth">শিক্ষা</h5>
                <div class="bicn">

                  <p>
                    <?php
                    $sql = "SELECT * FROM `school_history` WHERE id = 2";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    echo $row['dis'];
                    ?>

                  </p>
                </div>
                <div class="card-text">

                </div>
              </div>
            </div>



          </div>

          <div class="">
            <div class="card-body">
              <h5 class="card-title fth">প্রতিষ্ঠানের ইতিহাস </h5>
              <div class="bicn">
                <p>
                  <?php
                  $sql = "SELECT * FROM `school_history` WHERE id = 1";
                  $result = mysqli_query($conn, $sql);
                  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                  echo $row['dis'];
                  ?>

                </p>
              </div>
              <div class="card-text">

              </div>
            </div>
          </div>




          <div class="pd-4"></div>

          <div class="bolg_wrap">
            <h1 class="fth smt"> আরও...</h1>
            <div class="blog_card">

              <h1 class="blog_title">

                <div class="card-body">
                  <h5 class="card-title"> পাঠ্যপুস্তক</h5>
                  <div class="bicn">
                    <i class="fa-solid fa-book"></i>

                  </div>
                  <div class="card-text">
                    <ul>
                      <li><i class="fas fa-arrow-circle-right" aria-hidden="true"></i>&nbsp;<a href="#"> ষষ্ঠ শ্রেণি</a></li>
                      <li><i class="fas fa-arrow-circle-right" aria-hidden="true"></i>&nbsp;<a href="#"> সপ্তম শ্রেণি</a></li>
                      <li><i class="fas fa-arrow-circle-right" aria-hidden="true"></i>&nbsp;<a href="#"> অষ্টম শ্রেণি</a></li>
                      <li><i class="fas fa-arrow-circle-right" aria-hidden="true"></i>&nbsp;<a href="#"> নবম-দশম শ্রেণি</a></li>
                    </ul>
                  </div>
                </div>

            </div>

          </div>
          <div class="bolg_wrap">

            <div class="blog_card">

              <h1 class="blog_title">

                <div class="card-body">
                  <h5 class="card-title">প্রাতিষ্ঠানিক </h5>
                  <div class="bicn">
                    <i class="fas fa-school" aria-hidden="true"></i>
                  </div>
                  <div class="card-text">
                    <ul>
                      <li><i class="fas fa-arrow-circle-right" aria-hidden="true"></i>&nbsp;<a href="#">রুটিন </a></li>
                      <li><i class="fas fa-arrow-circle-right" aria-hidden="true"></i>&nbsp;<a href="#">একাডেমিক ক্যালেন্ডার</a></li>
                      <li><i class="fas fa-arrow-circle-right" aria-hidden="true"></i>&nbsp;<a href="./pages/dress/">বিদ্যালয়ের পোশাক</a></li>
                      <li><i class="fas fa-arrow-circle-right" aria-hidden="true"></i>&nbsp;<a href="#">ভর্তি বিষয়ক</a></li>
                    </ul>
                  </div>
                </div>

            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">


          <?php include './components/sideber.php'; ?>

          <div class="pd-4"></div>

          <?php include './components/official_link.php'; ?>

          <div class="pd-4"></div>

          <?php include './components/admit_notice.php'; ?>

          <div class="pd-4"></div>



        </div>
      </div>

    </div>

  </section>


  <div class="container content_wrap">
    <?php include './components/fotter.php'; ?>
  </div>






  <?php include './components/script.php'; ?>
</body>

</html>