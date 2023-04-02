<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../../auth/islogin.php';
    include '../../../config/database.php';
    $class = $_POST['Class'];
    $Section = $_POST['Section'];
    $query = "SELECT * FROM student_info2 WHERE Class = '$class' AND Section = '$Section' ORDER BY Roll_No ASC";
    $result = mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.bootstrap5.min.css">


    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script>

    </script>
    <style>
        html,
        body,
        .intro {
            margin: 5px;
            height: 100%;
            font-family: Noto Sans Bengali;

        }



        table,
        th,
        td {

            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <center>

        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>ID Number</th>
                    <th>Student Name (Bangla)</th>
                    <!-- <th>Student Name (English)</th> -->
                    <th>Father's Name (Bangla)</th>
                    <!-- <th>Father's Name (English)</th>
                    <th>Mother's Name (Bangla)</th>
                    <th>Mother's Name (English)</th> -->
                    <!-- <th>Division</th>
                    <th>District</th>
                    <th>Upazila</th>
                    <th>Post Office</th> -->
                    <th>Village</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Group</th>
                    <th>Roll No</th>
                    <!-- <th>Session</th> -->
                    <!-- <th>Gender</th> -->
                    <!-- <th>Religion</th> -->
                    <th>St_Code</th>
                    <!-- <th>UID Number</th> -->
                    <!-- <th>Mobile Number</th> -->
                    <!-- <th>Blood Group</th> -->
                    <th>Picture</th>
                </tr>
            </thead>

            <tbody>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['Student_Name_Bangla'] ?></td>
                        <!-- <td><?php echo $row['Student_Name_English'] ?></td> -->
                        <td><?php echo $row['Fathers_Name_Bangla'] ?></td>
                        <!-- <td><?php echo $row['Fathers_Name_English'] ?></td>
                        <td><?php echo $row['Mothers_Name_Bangla'] ?></td>
                        <td><?php echo $row['Mothers_Name_English'] ?></td>
                        <td><?php echo $row['Divission'] ?></td>
                        <td><?php echo $row['District'] ?></td>
                        <td><?php echo $row['Upazila'] ?></td>
                        <td><?php echo $row['Post_office'] ?></td> -->
                        <td><?php echo $row['Village'] ?></td>
                        <td><?php echo $row['Class'] ?></td>
                        <td><?php echo $row['Section'] ?></td>
                        <td><?php echo $row['Group'] ?></td>
                        <td><?php echo $row['Roll_No'] ?></td>
                        <!-- <td><?php echo $row['Session'] ?></td> -->
                        <!-- <td><?php echo $row['Gender'] ?></td> -->
                        <!-- <td><?php echo $row['Religion'] ?></td> -->
                        <td><?php echo $row['St_Code'] ?></td>
                        <!-- <td><?php echo $row['UID_Number'] ?></td> -->
                        <!-- <td><?php echo $row['Mobile_Number'] ?></td> -->
                        <!-- <td><?php echo $row['Blood_Group'] ?></td> -->
                        <td><img src="<?php echo $webName ?>/img/student/<?php echo $row['img'] ?>" alt="picture" height="30px" width="30px"></td>
                    </tr>

                <?php
                }
                ?>
            </tbody>

        </table>


    </center>
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
                        pdf.text("<?php echo "Student List" ?>".toUpperCase(), pdf.internal.pageSize.getWidth() / 2, 0.8, {
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
                "pageLength": 25,
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                paging: true,
                lengthChange: true,
                buttons: ['PDF', 'copy', 'excel', {
                    extend: 'print',
                    text: 'Print',
                    title: '<?php echo $schoolName ?>',
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
</body>

</html>