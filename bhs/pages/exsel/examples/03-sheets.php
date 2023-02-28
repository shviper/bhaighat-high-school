<?php
include '../../../../config/database.php';
/** @noinspection MultiAssignmentUsageInspection */

use Shuchkin\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/../src/SimpleXLSX.php';

if ($xlsx = SimpleXLSX::parse('student_list.xlsx')) {
    echo '<pre>' . print_r($xlsx->sheetNames(), true) . '</pre>';

    echo '<table cellpadding="10">
	<tr><td valign="top">';

    // output worksheet 1 (index = 0)

    $dim = $xlsx->dimension();
    $num_cols = $dim[0];
    $num_rows = $dim[1];

    // echo '<h2>' . $xlsx->sheetName(0) . '</h2>';
    // echo '<table border=1>';
    foreach ($xlsx->rows() as $r) {
        $name = $r[0];
        $p = $r[1];
        $v = $r[2];
        $c = $r[3];
        $b = $r[4];
        $roll = $r[5];
        $num = $r[6];
        $sql = "INSERT INTO student_info (`Student_Name`,`parent_name`,`village`,`class`, `branch`,`rool`,`number`) VALUES ('$name', '$p', '$v', '$c', '$b', '$roll', '$num')";
        mysqli_query($conn, $sql);

        // echo '<tr>';
        // for ($i = 0; $i < $num_cols; $i++) {
        //     // echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;') . '</td>';
        //     // echo $r[$i] . "<br>";
        //     // echo $r[1] . "<br>";
        //     // echo $r[2] . "<br>";
        // }
        // echo '</tr>';
    }
    // echo '</table>';

    // echo '</td><td valign="top">';

    // output worsheet 2 (index = 1)

    $dim = $xlsx->dimension(1);
    $num_cols = $dim[0];
    $num_rows = $dim[1];

    echo '<h2>' . $xlsx->sheetName(1) . '</h2>';
    echo '<table border=1>';
    foreach ($xlsx->rows(1) as $r) {
        echo '<tr>';
        for ($i = 0; $i < $num_cols; $i++) {
            echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;') . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    echo '</td></tr></table>';
} else {
    echo SimpleXLSX::parseError();
}
