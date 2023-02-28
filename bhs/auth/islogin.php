<?php
$webName = 'http://localhost/bhaighat_high_school%20(copy)';
if (!isset($_COOKIE['isLogin']) || $_COOKIE['isLogin'] != 1) {
    header("Location: $webName/bhs/auth/");
    exit();
}

// Display the index page
