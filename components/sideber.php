                    <div class="headersidebar" style="text-align: center;">
                        <h1 class="fth">প্রধান শিক্ষক</h1>
                        <div class="text-center m-2">
                            <?php
                            $sql = "SELECT * FROM `teacher` WHERE Designation = 'প্রধান শিক্ষক'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                            ?>
                            <img src="<?php echo $webName ?>/img/teacher/<?php echo $row['Picture'] ?>" alt="" width="180px" height="200px" />
                        </div>
                        <p>
                        <h4><?php echo $row['Name'] ?></h4>
                        <h6><?php echo $row['Designation'] ?></h6>
                        <h6><?php echo $schoolName_bn ?></h6>


                        </p>
                    </div>

                    <div class="headersidebar" style="text-align: center;">
                        <h1 class="fth">সভাপতি</h1>
                        <div class="text-center m-2">
                            <?php
                            $sql = "SELECT * FROM `managing_committee` WHERE id = 1";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                            ?>
                            <img src="<?php echo $webName ?>/img/managing_committee/<?php echo $row['Picture'] ?>" alt="" width="200px" height="200px" />
                        </div>
                        <p>
                        <h4><?php echo $row['Name'] ?></h4>
                        <h6>সভাপতি</h6>
                        <h6><?php echo $schoolName_bn ?></h6>
                        </p>
                    </div>

                    <div class="headersidebar">
                        <h1 class="fth">ফেসবুকে আমরা</h1>
                        <center>
                            <div class="fb-page" data-href="https://web.facebook.com/bhs.tgl.bd" data-width="255px" data-height="auto">
                                <blockquote class="fb-xfbml-parse-ignore">
                                    <a href="https://web.facebook.com/bhs.tgl.bd"><?php echo $schoolName ?></a>
                                </blockquote>
                            </div>
                        </center>
                    </div>
                    <div class="headersidebar">
                        <h1 class="fth">প্রতিষ্ঠানের অবস্থান</h1>
                        <center>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37629.982223985644!2d89.96688784380783!3d24.620750055391202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd89910aba2215%3A0x46be4875f7d4015!2sBhaighat%20High%20school!5e0!3m2!1sen!2sbd!4v1675401811462!5m2!1sen!2sbd" width="255" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </center>
                    </div>