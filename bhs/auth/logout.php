<?php
include '../../config/database.php';
// unset($_COOKIE["isLogIn"]);
setcookie("isLogIn", "", time() - 3600, "/");
header("Location: {$webName}/");
exit();
