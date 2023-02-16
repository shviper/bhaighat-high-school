 <?php

    $webName = "http://localhost/bhaighat_high_school%20(copy)";
    $schoolName = "Bhaighat High School";
    // database config
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bhs";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        // die("Connection failed: " . mysqli_connect_error());
    }

    ?> 