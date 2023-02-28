<?php

include("../../config/database.php");
if (isset($_POST['submit'])) {
  $exam_type = $_POST['exam_type'];
  $date = $_POST['date'];
  $class = $_POST['class'];
  $branch = $_POST['branch'];
  $group = $_POST['group'];
  $roll = $_POST['roll'];
  $sql = "SELECT * FROM `result_info` WHERE Exam_Type = '$exam_type' and date = '$date' and class = '$class' and branch = '$branch' and groupName = '$group' and roll = '$roll'";
}
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
                  <form action="index.php" method="post" role="form">
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
                        <option>নির্বাচন করুন ...</option>
                        <option value="2023">
                          2023 </option>
                        <option value="2022">
                          2022 </option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="class">শ্রেণী:</label>
                      <select name="class" class="form-control" id="class">
                        <option>নির্বাচন করুন ...</option>
                        <option value="Ten">
                          Ten </option>
                        <option value="Six">
                          Six </option>
                        <option value="Seven">
                          Seven </option>
                        <option value="Nine">
                          Nine </option>
                        <option value="Eight">
                          Eight </option>
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
                      <select name="group" id="group" class="form-control">
                        <option value="none">none</option>
                        <option value="science">Science</option>
                        <option value="humanities">Commerce</option>
                        <option value="arts">Arts</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="roll">রোল:</label>
                      <input type="number" name="roll" class="form-control" id="roll">
                    </div>

                    <center><input type="submit" value="রেজাল্ট দেখুন" name="submit" class="btn btn-success m-3"></center>
                  </form>
                </div>
              </article>
              <td valign="middle" align="center">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                  <tbody>
                    <tr>
                      <td valign="middle" align="center">
                        <table class="black12" width="100%" cellspacing="1" cellpadding="3" border="0">
                          <tbody>
                            <tr>
                              <td width="12%" valign="middle" bgcolor="#EEEEEE" align="left">Roll No</td>
                              <td width="27%" valign="middle" bgcolor="#EEEEEE" align="left">145222</td>
                              <td width="22%" valign="middle" bgcolor="#EEEEEE" align="left">Name</td>
                              <td width="39%" valign="middle" bgcolor="#EEEEEE" align="left">MD. SAJJAD HOSSAIN RIYADH</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">Board</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">DHAKA</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">Father's Name</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">MD. ATIKUR RAHMAN</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">Group</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">SCIENCE</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">Mother's Name</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">LUCKY KHATUN</td>
                            </tr>

                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">Type</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">REGULAR</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">Date of Birth</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">25-12-2005</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">Result</td>
                              <td class="black12bold" valign="middle" bgcolor="#EEEEEE" align="left">PASSED</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">Institute</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">BHAI GHAT HIGH SCHOOL</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">GPA</td>
                              <td class="black12bold" colspan="3" valign="middle" bgcolor="#EEEEEE" align="left">4.67</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td valign="middle" height="40" align="center"><span class="black16bold">Grade Sheet</span></td>
                    </tr>
                    <tr>
                      <td valign="middle" align="center">
                        <table class="black12" width="100%" cellspacing="1" cellpadding="3" border="0">
                          <tbody>
                            <tr class="black12bold">
                              <td width="19%" valign="middle" bgcolor="#AFB7BE" align="left">Code</td>
                              <td width="66%" valign="middle" bgcolor="#AFB7BE" align="left">Subject</td>
                              <td width="15%" valign="middle" bgcolor="#AFB7BE" align="left">Grade</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">101</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">BANGLA 1st</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left" >A-</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">101</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">BANGLA 2nd</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left" >A-</td>
                            </tr>

                            <tr>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">107</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">ENGLISH</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">A</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">109</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">MATHEMATICS</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">A+</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">150</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">BANGLADESH AND GLOBAL STUDIES</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">A-</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">111</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">ISLAM AND MORAL EDUCATION</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">A</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">136</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">PHYSICS</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">A+</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">137</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">CHEMISTRY</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">A+</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">138</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">BIOLOGY</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">A</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">154</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">INFORMATION AND COMMUNICATION TECHNOLOGY</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">A+</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">126</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">HIGHER MATHEMATICS</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">A+</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">147</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">PHYSICAL EDUCATION, HEALTH &amp; SPORTS</td>
                              <td valign="middle" bgcolor="#EEEEEE" align="left">A+</td>
                            </tr>
                            <tr>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">156</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">CAREER EDUCATION</td>
                              <td valign="middle" bgcolor="#DEE1E4" align="left">A+</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>


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