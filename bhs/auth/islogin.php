<?php
include '../../config/database.php';
if (!isset($_COOKIE['isLogIn'])) {
    header("Location: $webName/bhs/auth/");
}
