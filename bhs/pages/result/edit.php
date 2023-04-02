<?php
include '../../auth/islogin.php';
include '../../../config/database.php';

if (isset($_GET['class']) && isset($_GET['branch']) && isset($_GET['groupName']) && isset($_GET['exam_type']) && isset($_GET['subject'])) {
    // All variables have been set in the URL parameters
    $class = $_GET['class'];
    $branch = $_GET['branch'];
    $groupName = $_GET['groupName'];
    $exam_type = $_GET['exam_type'];
    $subject = $_GET['subject'];
    if (empty($class) || empty($branch) || empty($groupName) || empty($exam_type) || empty($subject)) {

        header("Location: index.php");
    }

    $date = date("Y");
    $select_query = "SELECT COUNT(*) as count FROM $subject WHERE class = '$class' AND branch = '$branch' and groupName = '$groupName' and exam_type = '$exam_type' ";
    $result = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    $sql = "SELECT * FROM $subject WHERE class = '$class' AND branch = '$branch' and groupName = '$groupName' and exam_type = '$exam_type' ";
    $result2 = mysqli_query($conn, $sql);

    if ($count == 0) {
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">';
        echo '<div class="vh-100 bg-primary">
        <br>
        <br>
        <br>
        <center>
        <h1 class="text-warning p-5">Class ' . $class . ' Branch ' . $branch . ' No Data Found in database,Add data then Edit!
        </h1>
        <br>
        <a href="index.php" class="btn btn-success">Back</a>
        </center> 
    </div>
    ';
        exit;
    }


    if (isset($_POST['submit'])) {


        function calculateGrade($score, $total)
        {
            // Calculate the percentage
            $percentage = ($score / $total) * 100;

            // Determine the grade based on the percentage
            if ($percentage >= 80) {
                $grade = 'A+';
            } elseif ($percentage >= 70) {
                $grade = 'A';
            } elseif ($percentage >= 60) {
                $grade = 'A-';
            } elseif ($percentage >= 50) {
                $grade = 'B';
            } elseif ($percentage >= 40) {
                $grade = 'C';
            } elseif ($percentage >= 33) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }

            // Return the grade
            return $grade;
        }
        // Prepare the INSERT query
        $update_query = "UPDATE $subject SET mcq=?, cq=?, total=?, grade=? WHERE id=? AND roll=? AND exam_type=? AND date=?";
        $stmt = mysqli_prepare($conn, $update_query);


        for ($i = 1; $i <= $count; $i++) {

            // Retrieve the value of the input fields
            // echo $i;
            $id_value = $_POST['id_' . $i];
            $roll_value = $_POST['roll_' . $i];
            $mcq_value = $_POST['mcq_' . $i];
            $cq_value = $_POST['cq_' . $i];
            $total = $_POST['total_' . $i];
            $grade = calculateGrade($mcq_value + $cq_value, $total);

            mysqli_stmt_bind_param(
                $stmt,
                "ssssssss",
                $mcq_value,
                $cq_value,
                $total,
                $grade,
                $id_value,
                $roll_value,
                $exam_type,
                $date
            );

            // Execute the UPDATE query
            mysqli_stmt_execute($stmt);

            // Check for any errors in the query execution
            if (mysqli_stmt_errno($stmt) !== 0) {
                echo "Error inserting data: " . mysqli_stmt_error($stmt);
                break;
            }
        }
        header("Location: download.php?class=$class&branch=$branch&subject=$subject");
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

        thead th {
            color: #fff;
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
    </style>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 col-sm-12 col-md-12 m-3">
                <form method="post">
                    <section class="intro">
                        <div class="bg-image h-100" style="background-color: #f5f7fa;">
                            <div class="mask d-flex align-items-center h-100">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">

                                                        <table class="table table-striped mb-0">
                                                            <center>
                                                                <h2 class="m-3" style="text-transform: uppercase;">ভাইঘাট উচ্চ বিদ্যালয়</h2>
                                                                <h3 class="m-3" style="text-transform: uppercase;"><?php echo $subject ?></h3>
                                                            </center>
                                                            <thead style="background-color: #002d72;">

                                                                <tr>
                                                                    <th scope="col">roll</th>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">MCQ</th>
                                                                    <th scope="col">CQ</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php for ($i = 1; $i <= $count; $i++) {

                                                                    $row = mysqli_fetch_assoc($result2);
                                                                ?>
                                                                    <tr>
                                                                        <input class="input" type="text" style="display: none;" name="id_<?php echo $i; ?>" value="<?php echo $row["id"]; ?>">
                                                                        <input class="input" type="text" style="display: none;" name="total_<?php echo $i; ?>" value="<?php echo $row["total"]; ?>">

                                                                        <td style="width: 25px;">
                                                                            <input style="width: 25px;border: none;" class="input" type="text" name="roll_<?php echo $i; ?>" value="<?php echo $row["roll"]; ?>" />
                                                                        </td>

                                                                        <td>

                                                                            <input style="border: none;" class="input" type="text" value="<?php echo $row["name"]; ?>" />
                                                                        </td>
                                                                        <td>
                                                                            <input type="number" name="mcq_<?php echo $i; ?>" value="<?php echo $row["mcq"]; ?>" placeholder="MCQ" />
                                                                        </td>
                                                                        <td>
                                                                            <input type="number" name="cq_<?php echo $i; ?>" placeholder="CQ" value="<?php echo $row["cq"]; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>

                                                            </tbody>
                                                        </table>

                                                        <center><button type="submit" name="submit" class="btn btn-success m-5">Submit</button></center>

                </form>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</body>

</html>