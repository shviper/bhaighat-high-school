<?php
include '../../../config/database.php';


$sql = "SELECT * FROM `student`";
$student = mysqli_query($conn, $sql);

if (mysqli_num_rows($student) > 0) {
    // output data of each row

    while ($row = mysqli_fetch_assoc($student)) {


?>

        <div class="card-body tab-content p-0">
            <div class="tab-pane active show fade" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-responsive-md card-table transactions-table">
                        <tbody>
                            <tr>
                                <td>
                                    <a id="notice_edit" href="edit.php?id=<?php echo $row['id'] ?>">
                                        <h6 class=" fs-16 text-black font-w600 mb-0"><i class="fa-sharp fa-solid fa-file-pen "></i></h6>
                                    </a>
                                </td>
                                <td style="width: 93.63px;">
                                    <a id="delete" href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this?')">
                                        <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash"></i></h6>
                                    </a>
                                </td>


                                <td style="width: 147.567px;">
                                    <h6 class="fs-16 text-black font-w600 mb-0">
                                        <?php echo $row['class'] ?>
                                    </h6>
                                </td>

                                <td style="width: 129.283px;">
                                    <span class="fs-16 text-black font-w600 mb-0">
                                        <?php echo $row['male']; ?>
                                </td>

                                <td style="width: 142.75px;">
                                    <h6 class="fs-16 text-black font-w600 mb-0">
                                        <?php echo $row['female']; ?>
                                    </h6>
                                </td>

                                <td>
                                    <h6 class="fs-16 text-black font-w600 mb-0">
                                        <?php echo $row['sceince']; ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6 class="fs-16 text-black font-w600 mb-0">
                                        <?php echo $row['humane']; ?>
                                    </h6>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>


        </div>
<?php
    }
}
?>