<?php
if (!isset($_COOKIE['isLogIn'])) {
    header("Location: ./auth/index.php");
}
