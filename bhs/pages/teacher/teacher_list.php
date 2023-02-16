<?php
include '../../../config/database.php';


$sql = "SELECT * FROM `teacher`";
$teacher = mysqli_query($conn, $sql);

if (mysqli_num_rows($teacher) > 0) {
    // output data of each row
    $i = 1;
    while ($row = mysqli_fetch_assoc($teacher)) {


?>

        <div class="card-body tab-content p-0">
            <div class="tab-pane active show fade" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-responsive-md card-table transactions-table">
                        <tbody>
                            <tr>
                                <td>
                                    <a id="notice_edit" href="edit.php?id=<?php echo $row['Id'] ?>">
                                        <h6 class=" fs-16 text-black font-w600 mb-0"><i class="fa-sharp fa-solid fa-file-pen "></i></h6>
                                    </a>
                                </td>
                                <td>
                                    <a id="delete" href="delete.php?id=<?php echo $row['Id'] ?>">
                                        <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash"></i></h6>
                                    </a>
                                </td>

                                <td>
                                    <h6 class=" fs-16 text-black font-w600 mb-0"><?php echo $i++ ?></h6>
                                </td>
                                <td style="width: 250px;">
                                    <h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row["Name"] ?></h6>
                                </td>

                                <td style="width: 250px;">
                                    <span class="fs-16 text-black font-w600 mb-0">
                                        <?php echo $row["Designation"] ?>
                                    </span>
                                </td>

                                <td>
                                    <h6 class="fs-16 text-black font-w600 mb-0">
                                        <?php echo $row['Mobile_Number']; ?>
                                    </h6>
                                </td>
                                <td>
                                    <h6 class="fs-16 text-black font-w600 mb-0">
                                        <?php echo $row['join_date']; ?>
                                    </h6>
                                </td>
                                <td>
                                    <span class="text-success fs-16 font-w500 text-end d-block">

                                        <img src="<?php echo $webName ?>/img/teacher/<?php echo $row['Picture']; ?>" alt="" width="20" style="border-radius: 50%;">


                                    </span>
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