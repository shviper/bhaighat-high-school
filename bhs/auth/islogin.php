<?php
$webName = 'http://localhost/bhaighat_high_school_2';
if (!isset($_COOKIE['isLogin']) || $_COOKIE['isLogin'] != 1 && !isset($_COOKIE['id'])) {
    header("Location: $webName/bhs/auth/index.php");
    exit();
}




// Display the index page
