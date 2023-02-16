<?php
include '../../config/database.php';
$notice_sql = "SELECT * FROM notice";
$notice = mysqli_query($conn, $notice_sql);
$total_notice = mysqli_num_rows($notice);
if ($total_notice < 10) {
    $total_notice = "0" . $total_notice;
    echo $total_notice;
} else {
    echo $total_notice;
}
