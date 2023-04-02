<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../../../config/database.php';
    $Student_Name_Bangla = $_POST['Student_Name_Bangla'];
    $Student_Name_English = $_POST['Student_Name_English'];
    $Fathers_Name_Bangla = $_POST['Fathers_Name_Bangla'];
    $Fathers_Name_English = $_POST['Fathers_Name_English'];
    $Mothers_Name_Bangla = $_POST['Mothers_Name_Bangla'];
    $Mothers_Name_English = $_POST['Mothers_Name_English'];
    $Divission = $_POST['Divission'];
    $District = $_POST['District'];
    $Upazila = $_POST['Upazila'];
    $Post_office = $_POST['Post_office'];
    $Village = $_POST['Village'];
    $Class = $_POST['Class'];
    $Section = $_POST['Section'];
    $Group = $_POST['Group'];
    $Roll_No = $_POST['Roll_No'];
    $Session = $_POST['Session'];
    $Gender = $_POST['Gender'];
    $Religion = $_POST['Religion'];
    $St_Code = $_POST['St_Code'];
    $UID_Number = $_POST['UID_Number'];
    $Mobile_Number = $_POST['Mobile_Number'];
    $Blood_Group = $_POST['Blood_Group'];
    $image = $_FILES['image']['name'];

    $tmp_image = $_FILES['image']['tmp_name'];
    $folder = "<?php echo $webName ?>/img/student/";

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

    // Do something with the values, such as saving them to a database or processing them in some way
    $sql = "INSERT INTO student_info2 (Student_Name_Bangla, Student_Name_English, Fathers_Name_Bangla, Fathers_Name_English, Mothers_Name_Bangla, Mothers_Name_English, Divission, District, Upazila, Post_office, Village, Class, Section, Group_name, Roll_No, Session, Gender, Religion, St_Code, UID_Number, Mobile_Number, Blood_Group, img)
VALUES ( '$Student_Name_Bangla', '$Student_Name_English', '$Fathers_Name_Bangla', '$Fathers_Name_English', '$Mothers_Name_Bangla', '$Mothers_Name_English', '$Divission', '$District', '$Upazila', '$Post_office', '$Village', '$Class', '$Section', '$Group', '$Roll_No', '$Session', '$Gender', '$Religion', '$St_Code', '$UID_Number', '$Mobile_Number', '$Blood_Group', '$image')
";

    if (mysqli_query($conn, $sql)) {
        echo "Student Data Added successfully";
    } else {
        echo "fail!Some thing is wrong !";
    }
}
