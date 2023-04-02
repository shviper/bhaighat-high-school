<?php
include("../../config/database.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- link include -->
  <?php include '../../components/link.php'; ?>

  <style>
    label {
      font-weight: bolder;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      margin: 8px 8px;
      color: green;
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

            <div class="contact-wrap w-100 p-md-5">

              <article style="border: 3px solid #eee;padding: 10px;margin: 10px;">
                <center>
                  <h2 class="title_head">রেজাল্ট</h2>
                  <hr>
                </center>
                <div class="lrform" style="padding: 10px;">
                  <form action="result.php" method="post" role="form">
                    <div class="form-group">
                      <label for="class">পরীক্ষার নাম :</label>
                      <select name="exam_type" class="form-control" id="class">
                        <option value="গঠনকালীন মূল্যায়ণ">গঠনকালীন মূল্যায়ণ</option>
                        <option value="শ্রেণি অভিক্ষা-২">শ্রেণি অভিক্ষা-২</option>
                        <option value="শ্রেণি অভিক্ষা-১">শ্রেণি অভিক্ষা-১</option>
                        <option value="সাপ্তাহিক">সাপ্তাহিক</option>
                        <option value="নির্বাচনী">নির্বাচনী</option>
                        <option value="বার্ষিক">বার্ষিক</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="class">সেশন:</label>
                      <select name="date" class="form-control" id="class">
                        <option value="0000">নির্বাচন করুন ...</option>
                        <option value="2023">
                          2023 </option>
                        <option value="2022">
                          2022 </option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="class">শ্রেণী:</label>
                      <select name="class" class="form-control" id="class">
                        <option value="">নির্বাচন করুন ...</option>
                        <option value="ষষ্ঠ">Six</option>
                        <option value="সপ্তম">Seven</option>
                        <option value="অষ্টম">Eight</option>
                        <option value="নবম">Nine</option>
                        <option value="দশম">Ten</option>
                      </select>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="section">সেকশন:</label>
                      <select name="branch" id="branch" class="form-control" require>
                        <option value="জুই">Jui</option>
                        <option value="বেলী">Beli</option>
                        <option value="দোয়েল">Duel</option>
                        <option value="কোয়েল">Kuel</option>
                        <option value="পদ্মা">Meghna</option>
                        <option value="মেঘনা">Padma</option>
                        <option value="নজরুল">Nazrul</option>
                        <option value="রবীন্দ্র">Rabindra</option>
                        <option value="রোকেয়া">Rokeya</option>
                        <option value="সুফিয়া">Sufia</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="dn">গ্রুপ</label>
                      <select name="groupName" id="group" class="form-control">
                        <option value="none">none</option>
                        <option value="science">Science</option>
                        <option value="commerce">Commerce</option>
                        <option value="arts">Arts</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="roll">রোল:</label>
                      <input type="number" name="roll" class="form-control" id="roll" required>
                    </div>

                    <center><input type="submit" value="রেজাল্ট দেখুন" name="submit" class="btn btn-success m-3"></center>
                  </form>
                </div>
              </article>



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