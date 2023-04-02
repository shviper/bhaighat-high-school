<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../../config/database.php';
    $Name = $_POST['name'];
    $Designation = $_POST['Designation'];
    $Educational_Qualifications = $_POST['Educational_Qualifications'];
    $Address = $_POST['Address'];
    $Mobile_Number = $_POST['Mobile_Number'];
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $join_date = $_POST['join_date'];
    $image = $_FILES['image']['name'];

    $tmp_image = $_FILES['image']['tmp_name'];
    $folder = "<?php echo $webName ?>/img/teacher/";

    $image_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png');

    if (!in_array($image_ext, $valid_extensions)) {
        echo "Invalid image extension";
        exit;
    }

    if ($_FILES['image']['size'] > 500000) {
        echo "Image size too large";
        exit;
    }
    if (file_exists($folder . $image)) {
        echo "File already exists.";
        exit;
    }

    move_uploaded_file($tmp_image, $folder . $image);
    $sql = "INSERT INTO teacher (Name,Designation,Educational_Qualifications,Address,Mobile_Number,Email,password,join_date,Picture) VALUES (
        '$Name','$Designation','$Educational_Qualifications','$Address','$Mobile_Number','$Email','$password','$join_date','$image')";
    if (mysqli_query($conn, $sql)) {
        echo "Teacher Data Added successfully";
    } else {
        echo "fail!Some thing is wrong !";
    }
}
