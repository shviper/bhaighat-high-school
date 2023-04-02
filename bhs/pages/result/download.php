<?php
include '../../auth/islogin.php';
include '../../../config/database.php';
if (isset($_GET['class']) && isset($_GET['branch']) &&  isset($_GET['subject'])) {
    $class = $_GET['class'];
    $branch = $_GET['branch'];
    $subject = $_GET['subject'];
    $groupName = $_GET['groupName'];
    $exam_type = $_GET['exam_type'];
    $date = date("Y");
    if ($subject == 'all') {
        header("Location: download_all.php?class=$class&branch=$branch&groupName=$groupName&exam_type=$exam_type&date=$date");
    }
    if (empty($class) || empty($branch) || empty($subject)) {
        header("Location: index.php");
    }
    $select_query = "SELECT COUNT(*) as count FROM $subject WHERE class = '$class' AND branch = '$branch'";
    $result = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    if ($count == 0) {
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">';
        echo '<div class="vh-100 bg-primary">
        <br>
        <br>
        <br>
        <center>
        <h1 class="text-warning p-5">No Data Found for Download!
        </h1>
        <br>
        <a href="index.php" class="btn btn-success">Back</a>
        </center> 
    </div>
    ';
        exit;
    }
    $sql = "SELECT * FROM $subject WHERE class = '$class' AND branch = '$branch'";
    $teacher = mysqli_query($conn, $sql);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.bootstrap5.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+Bengali&display=swap" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>


    <style>
        html,
        body,
        .intro {
            height: 100%;
            font-family: Noto Sans Bengali;

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
            font-size: 1rem;
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

        @media print {
            .dataTables_info {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 col-sm-12 col-md-12 m-3">
                <!-- <form method="post"> -->
                <section class="intro">
                    <div class="bg-image h-100" style="background-color: #f5f7fa;">
                        <div class="mask d-flex align-items-center h-100">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                                                    <center>
                                                        <a href="index.php" style="font-size: larger;">Back</a>
                                                        <h2 class="m-3" style="text-transform: uppercase;">ভাইঘাট উচ্চ বিদ্যালয়</h2>
                                                        <h3 class="m-3" style="text-transform: uppercase;"><?php echo $subject ?></h3>
                                                    </center>
                                                    <table id="example" class="table table-striped" style="width:100%">
                                                        <thead style="background-color: #002d72;">

                                                            <tr>

                                                                <th scope="col">ST CODE</th>
                                                                <th scope="col">CLASS</th>
                                                                <th scope="col">SECTION</th>
                                                                <th scope="col">ROLL NO</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">MCQ</th>
                                                                <th scope="col">CQ</th>
                                                                <th scope="col">TOTAL</th>
                                                                <th scope="col">GRADE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            while ($row = mysqli_fetch_assoc($teacher)) {
                                                                $id = $row["id"];
                                                                $code = "SELECT St_Code FROM `student_info2` where id = '$id'";
                                                                $result = mysqli_query($conn, $code);
                                                                $r = mysqli_fetch_assoc($result);
                                                            ?>
                                                                <tr>



                                                                    <td style="width: 25px;">
                                                                        <?php echo $r["St_Code"]; ?>
                                                                    </td>
                                                                    <td style="width: 25px;">
                                                                        <?php echo $row["class"]; ?>
                                                                    </td>
                                                                    <td style="width: 25px;">
                                                                        <?php echo $row["branch"]; ?>
                                                                    </td>
                                                                    <td style="width: 25px;">
                                                                        <?php echo $row["roll"]; ?>
                                                                    </td>

                                                                    <td style="font-family: Noto Sans Bengali">
                                                                        <?php echo $row["name"]; ?>


                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row["mcq"]; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row["cq"]; ?>
                                                                    </td>
                                                                    <td id="tomar">
                                                                        <?php echo $row["mcq"] + $row["cq"]; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row["grade"]; ?>
                                                                    </td>
                                                                </tr>
                                                            <?php

                                                            }
                                                            ?>

                                                        </tbody>
                                                    </table>

                                                    <!-- </form> -->
                                                </div>
                                                <div class="col-lg-1"></div>
                                            </div>
                                        </div>

</body>


<script>
    function generatePDF() {
        var element = document.getElementById("example");
        var opt = {

            margin: [0.8, 0.5, 0, 0],
            filename: 'result.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
        };
        html2pdf().set(opt).from(element).toPdf().get('pdf').then(function(pdf) {

            var totalPages = pdf.internal.getNumberOfPages();
            for (var i = 1; i <= totalPages; i++) {

                if (i === 1) {

                    pdf.setPage(i);

                    pdf.setFontSize(15);
                    pdf.setFontStyle('bold');

                    pdf.text('<?php echo $schoolName ?>', pdf.internal.pageSize.getWidth() / 2, 0.5, {
                        align: 'center'
                    });
                    pdf.setFontSize(10);
                    pdf.setFontStyle('normal');
                    pdf.text("<?php echo $subject ?>".toUpperCase(), pdf.internal.pageSize.getWidth() / 2, 0.8, {
                        align: 'center'
                    });
                }
            }
            pdf.save();
        });

        // html2pdf().set(opt).from(element).save();
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
<!-- <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.colVis.min.js"></script> -->

<script>
    $(document).ready(function() {
        $.fn.dataTable.ext.buttons.PDF = {
            text: 'PDF',
            action: function(e, dt, node, config) {
                generatePDF()
            }
        };

        var table = $('#example').DataTable({
            "pageLength": 100,
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            paging: true,
            lengthChange: true,
            buttons: ['PDF', 'copy', 'excel', {
                extend: 'print',
                text: 'Print',
                title: '<h3><?php echo $schoolName ?></h3><h4><?php echo $subject ?></h4>',
                customize: function(win) {
                    $(win.document.body).find('h3').css('text-align', 'center');
                    $(win.document.body).find('h4').css('text-align', 'center');
                    $(win.document.body).find('h4').css('text-transform', 'uppercase');
                }

            }, 'lengthMenu']

        });


        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');

    });
</script>
<script>
    const tbody = document.querySelector("#example tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));
    rows.sort((a, b) => {
        const aVal = parseInt(a.querySelector("#tomar").textContent);
        const bVal = parseInt(b.querySelector("#tomar").textContent);
        return bVal - aVal;
    });
    rows.forEach((row) => tbody.appendChild(row));

    // const tdList = document.querySelectorAll('#g');

    // for (let i = 0; i < tdList.length; i++) {
    //     const tdValue = parseInt(tdList[i].textContent);

    //     if (tdValue < 1) {
    //         tdList[i].style.border = '1px solid red';
    //     }
    // }
</script>

</html>