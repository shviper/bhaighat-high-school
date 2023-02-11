<?php
include '../../config/database.php';
$notice_sql = "SELECT * FROM notice";
$notice = mysqli_query($conn, $notice_sql);
$total_notice = mysqli_num_rows($notice);
echo $total_notice;
