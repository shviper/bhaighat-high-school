<?php

include './config/database.php';

$sql = "SELECT * FROM `teacher` ";;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Name"] . "<br>";
    }
} else {
    echo "0 results";
}
