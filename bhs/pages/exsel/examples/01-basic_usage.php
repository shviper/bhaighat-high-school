<?php

/** @noinspection ForgottenDebugOutputInspection */

use Shuchkin\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/../src/SimpleXLSX.php';

echo '<h1>Parse books.xslx</h1><pre>';
if ($xlsx = SimpleXLSX::parse('student_list.xlsx')) {
    $student = $xlsx->rows();
    print_r($student[0][1]);
} else {
    echo SimpleXLSX::parseError();
}
echo '<pre>';
