<?php include './auth/islogin.php';

include '../config/database.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- PAGE TITLE HERE -->
  <title>Admin</title>

  <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet" />
  <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css" />
  <!-- Style css -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/style2.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script> -->
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
  <!--*******************
        Preloader start
    ********************-->
  <div id="preloader">
    <div class="waviy">
      <span style="--i: 1">L</span>
      <span style="--i: 2">o</span>
      <span style="--i: 3">a</span>
      <span style="--i: 4">d</span>
      <span style="--i: 5">i</span>
      <span style="--i: 6">n</span>
      <span style="--i: 7">g</span>
      <span style="--i: 8">.</span>
      <span style="--i: 9">.</span>
      <span style="--i: 10">.</span>
    </div>
  </div>
  <!--*******************
        Preloader end
    ********************-->

  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
    <?php include './components/nav_header.php'; ?>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <?php include './components/header.php'; ?>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    <?php include './components/sidebar.php'; ?>
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
      <!-- row -->
      <div class="container-fluid">
        <div class="row invoice-card-row">
          <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="card bg-warning invoice-card">
              <div class="card-body d-flex">
                <div class="icon me-3">
                  <svg height="33px" width="32px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                    <style type="text/css">
                      .st0 {
                        fill: #000000;
                      }
                    </style>
                    <g>
                      <path class="st0" d="M366.042,378.266c-26.458-9.72-49.309-18.113-51.793-42.026c-1.149-11.024-0.214-23.982,2.702-37.507
                      c9.144-9.798,16.72-23.936,24.484-45.691c15.458-5.955,25.31-19.192,30.109-40.442c2.461-10.885-1.058-22.073-9.655-30.807
                      c0.773-13.206,0.095-13.928-0.402-14.456l-0.542-0.536H151.497v14.914c-9.897,9.115-13.61,19.503-11.038,30.885
                      c4.794,21.242,14.648,34.48,30.12,40.442c7.762,21.754,15.332,35.885,24.464,45.675c2.06,9.518,4.158,23.61,2.71,37.523
                      c-2.484,23.913-25.336,32.306-51.795,42.026c-36.32,13.338-77.484,28.462-77.484,88.641C68.474,485.634,126.653,512,256,512
                      c129.347,0,187.526-26.366,187.526-45.093C443.526,406.729,402.362,391.605,366.042,378.266z M233.908,484.578L203.021,359.12
                      l37.47,15.598l-2.302,20.66l6.572-0.148L233.908,484.578z M277.101,395.378l-2.302-20.66l37.47-15.598l-30.887,125.458
                      l-10.854-89.348L277.101,395.378z" />
                      <path class="st0" d="M91.083,82.779l54.864,24.13v36.397h222.66v-36.397l22.395-9.852v51.234c-4.75,0.753-8.389,4.728-8.389,9.495
                      c0,4.146,2.741,7.74,6.704,9.053l-6.378,40.217c-0.421,2.663,0.34,5.357,2.081,7.392c1.739,2.042,4.28,3.214,6.972,3.214h16.792
                      c2.692,0,5.233-1.172,6.968-3.214c1.745-2.034,2.506-4.728,2.085-7.392l-6.374-40.217c3.969-1.312,6.714-4.907,6.714-9.053
                      c0-4.767-3.643-8.742-8.397-9.495V88.804l13.686-6.017c2.696-1.172,4.439-3.789,4.439-6.654c0-2.85-1.739-5.458-4.433-6.646
                      L272.931,3.284C267.987,1.102,262.72,0,257.273,0c-5.446,0-10.712,1.102-15.652,3.284L91.081,69.487
                      c-2.692,1.188-4.431,3.796-4.431,6.646C86.649,79.006,88.392,81.614,91.083,82.779z" />
                    </g>
                  </svg>
                </div>
                <div>
                  <h2 class="text-white invoice-num" id="students"></h2>
                  <span class="text-white fs-18">Total Students</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="card bg-success invoice-card">
              <div class="card-body d-flex">
                <div class="icon me-3">
                  <svg height="33px" width="32px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                    <style type="text/css">
                      .st0 {
                        fill: #000000;
                      }
                    </style>
                    <g>
                      <path class="st0" d="M366.042,378.266c-26.458-9.72-49.309-18.113-51.793-42.026c-1.149-11.024-0.214-23.982,2.702-37.507
                      c9.144-9.798,16.72-23.936,24.484-45.691c15.458-5.955,25.31-19.192,30.109-40.442c2.461-10.885-1.058-22.073-9.655-30.807
                      c0.773-13.206,0.095-13.928-0.402-14.456l-0.542-0.536H151.497v14.914c-9.897,9.115-13.61,19.503-11.038,30.885
                      c4.794,21.242,14.648,34.48,30.12,40.442c7.762,21.754,15.332,35.885,24.464,45.675c2.06,9.518,4.158,23.61,2.71,37.523
                      c-2.484,23.913-25.336,32.306-51.795,42.026c-36.32,13.338-77.484,28.462-77.484,88.641C68.474,485.634,126.653,512,256,512
                      c129.347,0,187.526-26.366,187.526-45.093C443.526,406.729,402.362,391.605,366.042,378.266z M233.908,484.578L203.021,359.12
                      l37.47,15.598l-2.302,20.66l6.572-0.148L233.908,484.578z M277.101,395.378l-2.302-20.66l37.47-15.598l-30.887,125.458
                      l-10.854-89.348L277.101,395.378z" />
                      <path class="st0" d="M91.083,82.779l54.864,24.13v36.397h222.66v-36.397l22.395-9.852v51.234c-4.75,0.753-8.389,4.728-8.389,9.495
                      c0,4.146,2.741,7.74,6.704,9.053l-6.378,40.217c-0.421,2.663,0.34,5.357,2.081,7.392c1.739,2.042,4.28,3.214,6.972,3.214h16.792
                      c2.692,0,5.233-1.172,6.968-3.214c1.745-2.034,2.506-4.728,2.085-7.392l-6.374-40.217c3.969-1.312,6.714-4.907,6.714-9.053
                      c0-4.767-3.643-8.742-8.397-9.495V88.804l13.686-6.017c2.696-1.172,4.439-3.789,4.439-6.654c0-2.85-1.739-5.458-4.433-6.646
                      L272.931,3.284C267.987,1.102,262.72,0,257.273,0c-5.446,0-10.712,1.102-15.652,3.284L91.081,69.487
                      c-2.692,1.188-4.431,3.796-4.431,6.646C86.649,79.006,88.392,81.614,91.083,82.779z" />
                    </g>
                  </svg>
                </div>
                <div>
                  <h2 class="text-white invoice-num" id="teacher_total"></h2>
                  <span class="text-white fs-18">Total Teachers</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="card bg-info invoice-card">
              <div class="card-body d-flex">
                <div class="icon me-3">
                  <svg fill="#000000" width="33px" height="33px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <title>notice</title>
                    <path d="M15.5 3.5c-7.18 0-13 5.82-13 13s5.82 13 13 13 13-5.82 13-13-5.82-13-13-13zM15.5 23.875c-0.829 0-1.5-0.672-1.5-1.5s0.671-1.5 1.5-1.5c0.828 0 1.5 0.672 1.5 1.5s-0.672 1.5-1.5 1.5zM17 17.375c0 0.828-0.672 1.5-1.5 1.5-0.829 0-1.5-0.672-1.5-1.5v-7c0-0.829 0.671-1.5 1.5-1.5 0.828 0 1.5 0.671 1.5 1.5v7z"></path>
                  </svg>
                </div>
                <div>
                  <h2 class="text-white invoice-num" id="notice_show"></h2>
                  <span class="text-white fs-18">Total Notice</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-3 col-sm-6">
            <div class="card bg-secondary invoice-card">
              <div class="card-body d-flex">
                <div class="icon me-3">
                  <svg height="32px" width="32px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 502.664 502.664" xml:space="preserve">
                    <g>
                      <g>
                        <path style="fill:#010002;" d="M235.704,0c0,16.976,0,59.988,0,77.008c10.98,0,20.255,0,31.234,0c0-17.019,0-60.031,0-77.008
                          C255.959,0,246.662,0,235.704,0z M89.476,73.449c12.036,12.036,42.494,42.494,54.509,54.488
                          c7.765-7.744,14.345-14.345,22.132-22.045c-12.036-12.058-42.494-42.516-54.531-54.553
                          C103.842,59.104,97.241,65.705,89.476,73.449z M336.569,105.869c7.744,7.701,14.345,14.301,22.11,22.045
                          c12.036-12.058,42.451-42.473,54.488-54.488c-7.744-7.722-14.366-14.28-22.11-22.088
                          C379.042,63.375,348.605,93.833,336.569,105.869z M387.519,197.524c0,11.023,0,20.298,0,31.299c16.998,0,60.053,0,77.051,0
                          c0-11.001,0-20.277,0-31.299C447.572,197.524,404.517,197.524,387.519,197.524z M38.116,197.524
                          c0,11.023-0.022,20.298-0.022,31.256c16.998,0.022,60.075,0.022,77.072,0.065c0-11.001,0-20.277,0-31.299
                          C98.169,197.524,55.092,197.524,38.116,197.524z" />
                        <path style="fill:#010002;" d="M320.11,324.748H182.618c-24.548,0-44.695,22.585-44.695,50.195v127.721h226.903V374.943
                          C364.805,347.333,344.701,324.748,320.11,324.748z" />
                        <path style="fill:#010002;" d="M251.278,302.595c43.055,0,77.763-34.729,77.763-77.612c0-42.926-34.707-77.676-77.763-77.676
                          c-42.818,0-77.525,34.707-77.525,77.676C173.774,267.844,208.438,302.595,251.278,302.595z" />
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                    </g>
                  </svg>
                </div>
                <div>
                  <h2 class="text-white invoice-num" id="visits"></h2>
                  <span class="text-white fs-18">Total Visits</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-9 col-xxl-12">

            <div class="card">

              <div class="card-body">

                <div class="row align-items-center">

                  <div class="contact-container">
                    <div class="contact-left">
                      <center>
                        <h1>Notice</h1>
                      </center>
                      <form class="contact-form" id="notice">

                        <div class="multiple-row">
                          <label for="notice_Headline">Notice Headline</label>
                          <input type="text" name="notice_Headline" placeholder="headline" class="form-in" required>

                          <label for="notice Categories">Notice Categories</label>
                          <select name="categories" class="form-in">
                            <option value="পরীক্ষা সংক্রান্ত">পরীক্ষা সংক্রান্ত </option>
                            <option value="ফলাফল সংক্রান্ত">ফলাফল সংক্রান্ত </option>
                            <option value="">অন্যান্য </option>
                          </select>
                          <label for="notice description">Notice description</label>
                          <textarea placeholder="notice discreption..." class="form-in" name="description" id="description"></textarea>
                          <script>
                            tinymce.init({
                              selector: "#description",
                              plugins: "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                              toolbar: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                            });
                          </script>

                          <center><button class="button" type="submit" name="submit">Publish </button></center>

                        </div>
                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-xxl-12">
            <div class="card">
              <div class="card-header d-block d-sm-flex border-0">
                <div class="me-3">
                  <h4 class="card-title mb-2">Previous Notice</h4>
                  <!-- <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span> -->
                </div>
              </div>

              <div id="notice_preview">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
      $(document).ready(function() {
        $("#notice").submit(function(e) {
          e.preventDefault();
          $.ajax({
            type: "POST",
            url: "./data_load/notics_add.php",
            data: $("#notice").serialize(),
            success: function(response) {
              alert("notice published successfully!");
            }
          });
        });
      });
    </script>



    <script>
      $(document).ready(function() {
        $("#notice_show").load("./data_load/notics.php");
        $("#notice_preview").load("./data_load/notice_hading.php");
        $("#visits").load("./data_load/visits.php");
        $("#teacher_total").load("./data_load/teacher.php");
        $("#students").load("./data_load/student.php");
        $("#total_message").load("./data_load/total_message.php");
        setInterval(function() {
          $("#notice_show").load("./data_load/notics.php");
          $("#notice_preview").load("./data_load/notice_hading.php");
          $("#visits").load("./data_load/visits.php");
          $("#teacher_total").load("./data_load/teacher.php");
          $("#students").load("./data_load/student.php");
          $("#total_message").load("./data_load/total_message.php");
        }, 3000);
      });
    </script>



    <!--**********************************
            Content body end
        ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    <?php include './components/footer.php'; ?>?>
    <!--**********************************
            Footer end
        ***********************************-->
  </div>
  <!--**********************************
        Main wrapper end
    ***********************************-->

  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src="vendor/global/global.min.js"></script>
  <script src="vendor/chart.js/Chart.bundle.min.js"></script>
  <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>


  <!-- Dashboard 1 -->
  <script src="js/dashboard/dashboard-1.js"></script>

  <script src="js/custom.min.js"></script>
  <script src="js/dlabnav-init.js"></script>
  <script src="js/demo.js"></script>
  <script src="js/styleSwitcher.js"></script>
</body>

</html>