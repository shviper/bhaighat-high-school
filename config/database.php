 <?php

    // if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    //     $url = "https://"; // HTTPS
    // else
    //     $url = "http://"; // HTTP

    // $url .= $_SERVER['HTTP_HOST'];


    $webName = "http://localhost/bhaighat_high_school_2";
    $schoolName = "Bhaighat High School";
    $schoolName_bn = "ভাইঘাট উচ্চ বিদ্যালয়";
    // database config
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "bhs";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    ?> 

    