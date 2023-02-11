<?php
    $sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
    mysqli_query($conn, $sql);

    $sql = "SELECT visits FROM Counter WHERE id = 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $visits = $row["visits"];
        }
    } 
?>