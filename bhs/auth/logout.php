<?php
setcookie('isLogin', '', time() - 3600, '/');
header("Location: ../../index.php");
exit();
// echo $_COOKIE['isLogin'];
