<?php
include '../../auth/islogin.php';
include '../../../config/database.php';

if (isset($_GET['Class']) && isset($_GET['Section'])) {
    // All variables have been set in the URL parameters
    $Class = $_GET['Class'];
    $Section = $_GET['Section'];

    if (empty($Class) || empty($Section)) {

        header("Location: index.php");
    }

    $date = date("Y");
    $select_query = "SELECT COUNT(*) as count FROM student_info2 WHERE Class = '$Class' AND Section = '$Section'";
    $result = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    $sql = "SELECT * FROM student_info2 WHERE Class = '$Class' AND Section = '$Section' ORDER BY id ASC";
    $result2 = mysqli_query($conn, $sql);

    if ($count == 0) {
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">';
        echo '<div Class="vh-100 bg-primary">
        <br>
        <br>
        <br>
        <center>
        <h1 Class="text-warning p-5">Class ' . $Class . ' Section ' . $Section . ' Data Found in database,Add data then Edit!
        </h1>
        <br>
        <a href="index.php" Class="btn btn-success">Back</a>
        </center> 
    </div>
    ';
        exit;
    }


    if (isset($_POST['submit'])) {



        // Prepare the INSERT query
        $update_query = "UPDATE student_info2 SET Student_Name_Bangla =?, Class=?,Section=?,Group_name=?,Roll_No=?,Session=?,St_Code=?,UID_Number=?,Mobile_Number=? WHERE id=? ";
        $stmt = mysqli_prepare($conn, $update_query);


        for ($i = 1; $i <= $count; $i++) {

            // Retrieve the value of the input fields
            // echo $i;
            $Student_Name_Bangla = $_POST['Student_Name_Bangla_' . $i];
            $Class = $_POST['Class_' . $i];
            $Section = $_POST['Section_' . $i];
            $Group_name = $_POST['Group_name_' . $i];
            $Roll_No = $_POST['Roll_No_' . $i];
            $Session = $_POST['Session_' . $i];
            $St_Code = $_POST['St_Code_' . $i];
            $UID_Number = $_POST['UID_Number_' . $i];
            $Mobile_Number = $_POST['Mobile_Number_' . $i];
            $id_value = $_POST['id_' . $i];



            mysqli_stmt_bind_param(
                $stmt,
                "sssssssssi",
                $Student_Name_Bangla,
                $Class,
                $Section,
                $Group_name,
                $Roll_No,
                $Session,
                $St_Code,
                $UID_Number,
                $Mobile_Number,
                $id_value
            );

            // Execute the UPDATE query
            mysqli_stmt_execute($stmt);

            // Check for any errors in the query execution
            if (mysqli_stmt_errno($stmt) !== 0) {
                echo "Error inserting data: " . mysqli_stmt_error($stmt);
                break;
            }
        }
        // header("Location: download.php?Class=$Class&Section=$Section&subject=$subject");
    }
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        html,
        body,
        .intro {
            height: 100%;

        }

        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }



        .card {
            border-radius: .5rem;
        }

        .table-scroll {
            border-radius: .5rem;
        }

        .table-scroll table thead th {
            font-size: 1.25rem;
        }

        thead {
            top: 0;
            position: sticky;
        }

        .input {
            background: transparent;
            color: black;
            font-weight: bolder;
        }

        th {
            height: 60px;
            color: black;
            background: #d9d9d9;
            padding: 5px;

        }
    </style>
</head>

<body>

    <div Class="container">



        <form method="post">


            <table>
                <center><a href="./index.php" style="font-size: larger;">Back</a></center>
                <center>
                    <h2 Class="m-3" style="text-transform: uppercase;"><?php echo $schoolName_bn ?></h2>
                    <!-- <h3 Class="m-3" style="text-transform: uppercase;"><?php echo $subject ?></h3> -->
                </center>
                <thead style="background-color: #002d72;">

                    <tr>
                        <!-- <th>ID Number</th> -->
                        <th>Delete</th>
                        <th>Student Name</th>
                        <!-- <th>Student Name (English)</th> -->
                        <!-- <th>Father's Name</th> -->
                        <!-- <th>Father's Name (English)</th>
                    <th>Mother's Name (Bangla)</th>
                    <th>Mother's Name (English)</th> -->
                        <!-- <th>Division</th>
                    <th>District</th>
                    <th>Upazila</th>
                    <th>Post Office</th> -->
                        <!-- <th>Village</th> -->
                        <th>Class</th>
                        <th>Section</th>
                        <th>Group</th>
                        <th>Roll No</th>
                        <th>Session</th>
                        <!-- <th>Gender</th> -->
                        <!-- <th>Religion</th> -->
                        <th>St_Code</th>
                        <th>UID Number</th>
                        <th>Mobile Number</th>
                        <!-- <th>Blood Group</th> -->
                        <!-- <th>Picture</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= $count; $i++) {

                        $row = mysqli_fetch_assoc($result2);
                    ?>
                        <tr>
                            <td>
                                <a href="delete2.php?id=<?php echo $row['id'] ?>">Delete</a>
                            </td>
                            <td style="display: none;">
                                <input type="number" name="id_<?php echo $i; ?>" value="<?php echo $row['id'] ?>" style="width: 80px;">
                            </td>
                            <td>
                                <input type="text" name="Student_Name_Bangla_<?php echo $i; ?>" value="<?php echo $row['Student_Name_Bangla'] ?>" style="width: 150px;">
                            </td>
                            <td>
                                <select name="Class_<?php echo $i; ?>">
                                    <option value="<?php echo $row['Class'] ?>"><?php echo $row['Class'] ?> শ্রেণী</option>
                                    <option value="ষষ্ঠ">ষষ্ঠ শ্রেণী</option>
                                    <option value="সপ্তম">সপ্তম শ্রেণী</option>
                                    <option value="অষ্টম">অষ্টম শ্রেণী</option>
                                    <option value="নবম">নবম শ্রেণী</option>
                                    <option value="দশম">দশম শ্রেণী</option>
                                </select>
                            </td>
                            <td>
                                <select name="Section_<?php echo $i; ?>">
                                    <option value="<?php echo $row['Section'] ?>"><?php echo $row['Section'] ?></option>
                                    <option value="জুই">জুই</option>
                                    <option value="বেলী">বেলী</option>
                                    <option value="দোয়েল">দোয়েল</option>
                                    <option value="কোয়েল">কোয়েল</option>
                                    <option value="পদ্মা">পদ্মা</option>
                                    <option value="মেঘনা">মেঘনা</option>
                                    <option value="নজরুল">নজরুল</option>
                                    <option value="রবীন্দ্র">রবীন্দ্র</option>
                                    <option value="রোকেয়া">রোকেয়া</option>
                                    <option value="সুফিয়া">সুফিয়া</option>
                                </select>
                            </td>
                            <td>
                                <select name="Group_name_<?php echo $i; ?>">
                                    <option value="<?php echo $row['Group_name'] ?>" selected><?php echo $row['Group_name'] ?></option>
                                    <option value="none">none</option>
                                    <option value="science">Science</option>
                                    <option value="commerce">Commerce</option>
                                    <option value="arts">Arts</option>
                                </select>
                            </td>
                            <td>
                                <input type="number" name="Roll_No_<?php echo $i; ?>" value="<?php echo $row['Roll_No'] ?>" style="width: 80px;">
                            </td>

                            <td>
                                <input type="text" name="Session_<?php echo $i; ?>" value="<?php echo $row['Session'] ?>" style="width: 150px;">
                            </td>
                            <td>
                                <input type="text" name="St_Code_<?php echo $i; ?>" value="<?php echo $row['St_Code'] ?>" style="width: 150px;">
                            </td>



                            <td>
                                <input type="number" name="UID_Number_<?php echo $i; ?>" value="<?php echo $row['UID_Number'] ?>" style="width: 80px;">
                            </td>
                            <td>
                                <input type="number" name="Mobile_Number_<?php echo $i; ?>" value="<?php echo $row['Mobile_Number'] ?>">
                            </td>







                        </tr>
                    <?php } ?>

                </tbody>
            </table>

            <center><button type="submit" name="submit" Class="btn btn-success m-5">Submit</button></center>

        </form>
    </div>



</body>

</html>